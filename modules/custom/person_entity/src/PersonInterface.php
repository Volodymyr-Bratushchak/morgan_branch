<?php

namespace Drupal\person_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Contact entity.
 * @ingroup person_entity
 */
interface PersonInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}

?>
