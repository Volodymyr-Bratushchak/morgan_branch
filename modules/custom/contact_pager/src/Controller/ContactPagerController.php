<?php
/**
 * @file
 * Contains \Drupal\contact_pager\Controller\ContactPagerController.
 */

namespace Drupal\contact_pager\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class ContactPagerController extends ControllerBase {
  /**
   * @return mixed
   */
  public function content($page) {
    $dozen = 0;
    if ( $page >= 2){
      $dozen = $page - 1;
    }
    $dozen *= 10;
    $query = \Drupal::database()->select('contact_us', 'cu');
    $query->fields('cu', ['pid', 'email', 'title', 'text', 'answered']);
    $query->range(0 + $dozen, 10 + $dozen);
    $questions = $query->execute()->fetchAll();

//    kint($url);


    $question_list = [];
    foreach ($questions as $question){
      $question_list[$question->pid] = [
        'pid' => $question->pid,
        'email' => $question->email,
        'title' => $question->title,
        'text' => $question->text,
        'answered' => $question->answered,
      ];
      if (! $question->answered){
        $question_list[$question->pid]['link'] = Url::fromRoute('contact_pager.form', ['question' => $question->pid])->toString();
      }
    }

    return ([
      '#theme' => 'contact_pager_list_template',
      '#questions' => $question_list,
    ]);
  }

}
