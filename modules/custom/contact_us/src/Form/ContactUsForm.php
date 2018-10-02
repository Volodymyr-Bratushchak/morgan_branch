<?php

/**
* @file
* Contains \Drupal\contact_us\Form\ContactUsForm.
*/

namespace Drupal\contact_us\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Url;

/**
* Form for redirect on node.
*/
class ContactUsForm extends FormBase {
  /**
  * {@inheritdoc}
  */
  public function getFormId() {
      return 'contact_us';
    }

    /**
    * {@inheritdoc}
    */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['email'] = array(
      '#type' => 'email',
      '#title' => t('Email'),
      '#required' => TRUE,
      '#default_value' => "",
      '#description' => "Please enter your email.",
      '#size' => 30,
      '#maxlength' => 30,
      '#prefix' => '<div class="email-validation-message"></div>',
      '#ajax' => [
        'callback' => '::validateMailAjax',
        'event' => 'change',
        'progress' => ['type' => 'throbber',],
       ]
    );
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
      '#default_value' => "",
      '#size' => 15,
      '#placeholder' => t('Text of the massage'),
    );
    $form['text'] = array(
      '#title' => t('Text'),
      '#type' => 'textarea',
      '#default_value' => t(''),
      '#placeholder' => t('Type the massage ...'),

    );

    $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateMailAjax(array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $user_mail = $form_state->getValue('email');
    if (! preg_match('([\\w-]+(?:\\.[\\w-]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7})', $user_mail)) {
      $value = '<div class ="messages messages--error">Please enter a valid email address!</div>';
      $response->addCommand(new HtmlCommand('.email-validation-message', $value));
    } else {
      $response->addCommand(new HtmlCommand('.email-validation-message', ''));
    }
    return $response;
  }

  /**
  * {@inheritdoc}
  */
  public function validateForm(array &$form, FormStateInterface $form_state) { }

  /**
  * {@inheritdoc}
  */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Here u can insert Your custom form values into your custom table.
    db_insert('contact_us')
      ->fields(array(
        'email' => $form_state->getValue('email'),
        'title' => $form_state->getValue('title'),
        'text' => $form_state->getValue('text'),

      ))->execute();
    drupal_set_message("Thank you, we will contact you soon!");

    return  $form_state->setRedirect('<front>');

  }
}
