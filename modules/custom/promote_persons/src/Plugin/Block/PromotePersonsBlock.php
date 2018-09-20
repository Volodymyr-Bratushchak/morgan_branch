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

    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'person']);
    foreach ($entities as $entity) {
      $nid = $entity->get('nid')->getValue();
      $promote = $entity->get('field_person_promote')->getValue();
      $age = $entity->get('field_person_age')->getValue();
      $name = $entity->get('title')->getValue();
      $image = file_create_url($entity->get('field_person_image')->entity->getFileUri());
      if ($promote[0]['value']) {
        $variables['home_page']['slides'][] = [
          'image' => $image,
          'nid' => $nid[0]['value'],
          'name' => $nid[0]['value'] . '. ' . $name[0]['value'],
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
