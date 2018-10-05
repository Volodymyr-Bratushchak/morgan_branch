<?php

/**
* @file
* Contains \Drupal\contact_pager\Form\PagerForm.
*/

namespace Drupal\contact_pager\Form;

use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
* Form for sending letters on email.
*/
class ContactPagerForm extends FormBase {

  /**
  * {@inheritdoc}
  */
  public function getFormId() {
    return 'contact_pager';
  }

  /**
  * {@inheritdoc}
  */
  public function buildForm(array $form, FormStateInterface $form_state, $question = NULL) {

    $query = \Drupal::database()->select('contact_us', 'cu');
    $query->fields('cu', ['pid', 'email', 'title', 'text']);
    $query->condition('cu.pid', $question);
    $question_info = $query->execute()->fetchAll();

    $form_state->set('title', $question_info[0]->title);
    $form_state->set('pid', $question_info[0]->pid);
    $form_state->set('email', $question_info[0]->email);

    $url_question_list = Url::fromRoute('contact_pager.list', ['page' => 1])->toString();


    $form['text']['#markup'] = "<div class='question-text'><h3>Question:</h3><p>" . $question_info[0]->text . "</p></div>";

    $form['to'] = [
      '#type' => 'email',
      '#title' => t('Answer to'),
      '#required' => TRUE,
      '#default_value' => t($question_info[0]->email),
      '#size' => 30,
      '#maxlength' => 30,
    ];

     $form['answer'] = array(
      '#title' => t('Answer'),
      '#type' => 'textarea',
      '#default_value' => t(''),
      '#placeholder' => t('Type the answer ...'),
    );

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
      '#suffix' => '<a href="' . $url_question_list . '"><h3>back to Question list ...</h3></a>',
    );
    return $form;
  }

  /**
  * {@inheritdoc}
  */
  public function validateForm(array &$form, FormStateInterface $form_state) { }

  /**
  * {@inheritdoc}
  */
  public function submitForm(array &$form, FormStateInterface $form_state, $question = NULL ) { //AccountInterface

    $mailManager = \Drupal::service('plugin.manager.mail');
    $module = 'contact_pager';
    $key = 'contact_pager_answer_template';
    $to = $form_state->get('email');;
    $params['subject'] = $form_state->get('title');
    $params['message'] = $form_state->getValue('answer');
    $langcode = \Drupal::currentUser()->getPreferredLangcode();
    $send = true;
    $result = $mailManager->mail($module, $key, $to, $langcode, $params, NULL, $send);

    $pid = $form_state->get('pid');
    if ($result['result'] !== true) {
      drupal_set_message(t('There was a problem sending your message and it was not sent.'), 'error');
    }
    else {
      drupal_set_message(t('Your answer has been sent.'));
      $query = \Drupal::database()->update('contact_us');
      $query->fields(['`answered`' => 1,]);
      $query->condition('`pid`', $pid);
      $query->execute();
    }

    return ;
  }
}


