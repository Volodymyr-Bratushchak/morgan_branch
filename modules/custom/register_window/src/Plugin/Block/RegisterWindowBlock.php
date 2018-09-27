<?php

/**
* @file
* Contains \Drupal\register_window\Plugin\Block\RegisterWindowBlock.
*/

namespace Drupal\register_window\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Url;

/**
* Form for redirect on node.
*
* @Block(
* id = "register_window",
* admin_label = @Translation("Register Window Form"),
* category = @Translation("Blocks")
* )
*/

class RegisterWindowBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */

  public function build() {
    if (! \Drupal::currentUser()->isAnonymous()) {
      $uid = \Drupal::currentUser()->getUsername();
    } else {

      // Login/Register
      $attribute_login_button = new Attribute ([
        'type' => "button",
        'value' => "Login/Register",
      ]);
      $ajax_attr_login = [
        'class' => 'use-ajax',
        'data-dialog-type' => 'modal',
        'data-dialog-options'=>'{"width":"50%"}',
        'id' => 'login-register'
      ];
      $options = [
        'absolute' => TRUE,
        'attributes' => $ajax_attr_login
      ];
      $button = "<input" . $attribute_login_button . ">";
      $link = Url::fromUri('internal:/register_window', $options);
      $linked_log_reg_button = Link::fromTextAndUrl(Markup::create($button), $link);
    }
    return ([
      '#theme' => 'register_window_template',
      '#button_log_reg' => $linked_log_reg_button,
      '#user' => $uid,
    ]);
  }
}
