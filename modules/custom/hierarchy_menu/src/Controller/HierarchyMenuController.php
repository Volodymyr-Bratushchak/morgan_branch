<?php
/**
 * @file
 * Contains \Drupal\hierarchy_menu\Controller\HierarchyMenuController.
 */

namespace Drupal\hierarchy_menu\Controller;

use Drupal\Core\Controller\ControllerBase;

class HierarchyMenuController extends ControllerBase {
/**
 * @return mixed
 */
  public function content() {
//    field_node_reference
    $entities = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'menu_element']);

    foreach ($entities as $entity ){
      $title =  $entity -> get('title')->getValue();
      $nid =  $entity -> get('nid')->getValue();
      $reference =  $entity -> get('field_node_reference')->getValue();
      $menu_elements[$nid[0]['value']] =[
        'title' => $nid[0]['value'] . '. ' . $title[0]['value'],
        'nid' => $nid[0]['value'],
        'reference' => ($reference[0]['target_id'])
      ];
      if ($menu_elements[$nid[0]['value']]['reference'] == NULL ) {
        $parent_nid = $menu_elements[$nid[0]['value']]['nid'];
      }
    }

    //  Search for children
    foreach ($menu_elements as $element ){
      if ($element['reference'] == $parent_nid){
        $children_bush[] = $element;
      }
    }

    $parent_element =  $menu_elements[$parent_nid];
//    kint( $parent_element, $children_bush);

    return ([
      '#theme' => 'hierarchy_menu_template',
      '#parent_element'=> $parent_element,
      '#children_bush' => $children_bush,
    ]);
  }
}