<?php
/**
 * @file
 * Contains \Drupal\register_window\Controller\RegisterWindowController.
 */

namespace Drupal\register_window\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Url;

class RegisterWindowController extends ControllerBase {
/**
 * @return mixed
 */
  public function content() {
    if (! \Drupal::currentUser()->isAnonymous()) {
      $uid = \Drupal::currentUser()->getUsername();
    } else {

      // Login
      $attribute_login_button = new Attribute ([
        'type' => "button",
        'value' => "Login",
      ]);
      $ajax_attr_login = [
        'class' => 'use-ajax',
        'data-dialog-type' => 'modal',
        'data-dialog-options'=>'{"width":"50%"}',
        'id' => 'login'
      ];
      $options = [
        'absolute' => TRUE,
        'attributes' => $ajax_attr_login
      ];
      $button = "<input" . $attribute_login_button . ">";
      $link = Url::fromUri('internal:/user/login', $options);
      $linked_login_button = Link::fromTextAndUrl(Markup::create($button), $link);

      // Register
      $attribute_register_button = new Attribute ([
        'type' => "button",
        'value' => "Register",
      ]);
      $ajax_attr_register = [
        'class' => 'use-ajax',
        'data-dialog-type' => 'modal',
        'data-dialog-options'=>'{"width":"50%"}',
        'id' => 'register'
      ];
      $options = [
        'absolute' => TRUE,
        'attributes' => $ajax_attr_register
      ];
      $button = "<input" . $attribute_register_button . ">";
      $link = Url::fromUri('internal:/user/register', $options);
      $linked_register_button = Link::fromTextAndUrl(Markup::create($button), $link);
    }

    return ([
      '#theme' => 'register_window_template_ctrl',
      '#button_login' => $linked_login_button,
      '#button_register' => $linked_register_button,
      '#user' => $uid,
    ]);
  }
}
