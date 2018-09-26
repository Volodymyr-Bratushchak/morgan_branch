<?php

/**
* @file
* Contains \Drupal\promote_persons\Plugin\Block\PromotePersonsBlock.
*/
namespace Drupal\promote_persons\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides Selected nodes Block.
*
* @Block(
* id = "promote_persons",
* admin_label = @Translation("Promote Persons"),
* category = @Translation("Blocks")
* )
*/
class PromotePersonsBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */
  public function build() {

//    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'person']);
    $entities = \Drupal::entityTypeManager()->getStorage('person_entity_person')->loadByProperties([]);

    foreach ($entities as $entity) {
      $id = $entity->get('id')->getValue();
      $promote = $entity->get('promoted')->getValue();
      $age = $entity->get('age')->getValue();
      $name = $entity->get('name')->getValue();
      $image = file_create_url($entity->get('image')->entity->getFileUri());
      if ($promote[0]['value']) {
        $variables['home_page']['slides'][] = [
          'image' => $image,
          'nid' => $id[0]['value'],
          'name' => $id[0]['value'] . '. ' . $name[0]['value'],
          'age' => $age[0]['value'],
        ];
      }
    }
    return ([
      '#theme' => 'promote_persons_template',
      '#slides' => $variables['home_page']['slides'],
    ]);
  }
}
