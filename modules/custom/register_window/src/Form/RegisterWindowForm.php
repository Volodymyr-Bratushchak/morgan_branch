<?php

namespace Drupal\register_window\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\user\Form\UserLoginForm;

class RegisterWindowForm extends UserLoginForm {
  // Login form
  /**
   * {@inheritdoc}
   */
  public function validateNameAjax(array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    if ( preg_match("/[^0-9a-z\s-]/i", $form_state->getValue('name')) ) {
      $value = '<div class ="messages messages--error"> Name has invalid characters!</div>';
      $response->addCommand(new HtmlCommand('.name-validation-message', $value));
    } else {
      $response->addCommand(new HtmlCommand('.name-validation-message', ''));
    }
    return $response;
  }

  /**
   * {@inheritdoc}
   */
  /**
   * Ajax form submit callback.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @return \Drupal\Core\Ajax\AjaxResponse
   */

  public function ajaxSubmitCallback(array &$form, FormStateInterface $form_state) {
    $ajax_response = new AjaxResponse();
    $user_name = $form_state->getValue(array('name'));
    $exist = \Drupal::entityQuery('user')
      ->condition('name', $user_name)
      ->range(0, 1)
      ->execute();

    if (! $exist ) {
      $value = '<div class ="messages messages--error">This name does not exist! Please check the correctness of name or register.</div>';
      $ajax_response->addCommand(new HtmlCommand('.name-validation-message', $value));
    } elseif (! $form_state->hasAnyErrors()) {
      $ajax_response->addCommand(new RedirectCommand(Url::fromRoute('<front>')->toString()));
    }

    return $ajax_response;
  }

  // Register form
  /**
   * {@inheritdoc}
   */
  public function validateNameRegisterAjax(array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $user_name = $form_state->getValue('name');
    $exist = \Drupal::entityQuery('user')
      ->condition('name', $user_name)
      ->range(0, 1)
      ->execute();
    if ( preg_match("/[^0-9a-z\s-]/i", $user_name) ) {
      $value = '<div class ="messages messages--error"> Name has invalid characters!</div>';
      $response->addCommand(new HtmlCommand('.name-validation-message', $value));
    } elseif (strlen($user_name) < 5) {
      $value = '<div class ="messages messages--error"> User name should have minimum of 5 characters</div>';
      $response->addCommand(new HtmlCommand('.name-validation-message', $value));
    } elseif ($exist) {
      $value = '<div class ="messages messages--error">This name exists! Please choose another one.</div>';
      $response->addCommand(new HtmlCommand('.name-validation-message', $value));
    } else {
      $response->addCommand(new HtmlCommand('.name-validation-message', ''));
    }

    return $response;
  }

  /**
   * {@inheritdoc}
   */
  public function validateMailRegisterAjax(array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $user_mail = $form_state->getValue('mail');
    $exist = \Drupal::entityQuery('user')
      ->condition('mail', $user_mail)
      ->range(0, 1)
      ->execute();
    if (! preg_match('([\\w-]+(?:\\.[\\w-]+)*@(?:[\\w-]+\\.)+[a-zA-Z]{2,7})', $user_mail)) {
      $value = '<div class ="messages messages--error">Please enter a valid email address!</div>';
      $response->addCommand(new HtmlCommand('.mail-validation-message', $value));
    } elseif ($exist) {
      $value = '<div class ="messages messages--error">This e-mail exists! Please choose another one.</div>';
      $response->addCommand(new HtmlCommand('.mail-validation-message', $value));
    }
    else {
      $response->addCommand(new HtmlCommand('.mail-validation-message', ''));
    }
    return $response;
  }

    /**
   * {@inheritdoc}
   */
  /**
   * Ajax form submit callback.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   * @return \Drupal\Core\Ajax\AjaxResponse
   */
  public function ajaxSubmitRegisterCallback(array &$form, FormStateInterface $form_state) {
    $ajax_response = new AjaxResponse();
    if (! $form_state->hasAnyErrors()) {
      $ajax_response->addCommand(new RedirectCommand(Url::fromRoute('<front>')->toString()));
    }
    return $ajax_response;
  }
}
