<?php

namespace Drupal\person_entity\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Provides a list controller for person_entity_person entity.
 *
 * @ingroup person_entity_person
 */
class PersonListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   *
   * We override ::render() so that we can add our own content above the table.
   * parent::render() is where EntityListBuilder creates the table using our
   * buildHeader() and buildRow() implementations.
   */
  public function render() {
    $build['description'] = [
      '#markup' => $this->t('You can manage the fields on the <a href="@adminlink">Contacts admin page</a>.', array(
        '@adminlink' => \Drupal::urlGenerator()
          ->generateFromRoute('person_entity.person_settings'),
      )),
    ];

    $build += parent::render();
    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the person list.
   *
   * Calling the parent::buildHeader() adds a column for the possible actions
   * and inserts the 'edit' and 'delete' links as defined for the entity type.
   */
  public function buildHeader() {
    $header['id'] = $this->t('ContactID');
    $header['name'] = $this->t('Name');
    $header['body'] = $this->t('Body');
    $header['image'] = $this->t('Image');
    $header['department'] = $this->t('Department');
    $header['age'] = $this->t('Age');
    $header['promoted'] = $this->t('Promoted to front');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\person_entity\Entity\Person */
    $row['id'] = $entity->id();
    $row['name'] = $entity->link();
    $row['body'] = $entity->body->value;
    $row['image'] = $entity->image->value;
    $row['department'] = $entity->department->value;
    $row['age'] = $entity->age->value;
    $row['promoted'] = $entity->promoted->value;

    return $row + parent::buildRow($entity);
  }

}
?>
