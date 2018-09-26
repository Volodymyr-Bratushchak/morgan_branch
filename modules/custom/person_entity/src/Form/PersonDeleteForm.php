<?php

namespace Drupal\person_entity\Form;

use Drupal\Core\Entity\ContentEntityConfirmFormBase;
use Drupal\Core\Entity\ContentEntityDeleteForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Provides a form for deleting a person_entity entity.
 *
 * @ingroup person_entity
 */
class PersonDeleteForm extends ContentEntityDeleteForm {

  /**
   * Returns the question to ask the user.
   *
   * @return string
   *   The form question. The page title will be set to this value.
   */
  public function getQuestion()
  {
    // TODO: Implement getQuestion() method.
  }

  /**
   * Returns the route to go to if the user cancels the action.
   *
   * @return \Drupal\Core\Url
   *   A URL object.
   */
  public function getCancelUrl()
  {
    // TODO: Implement getCancelUrl() method.
  }

  public function delete(array $form, FormStateInterface $form_state) {

  }


}
?>
