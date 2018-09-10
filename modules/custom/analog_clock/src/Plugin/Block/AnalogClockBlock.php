<?php

/**
* @file
* Contains \Drupal\analog_clock\Plugin\Block\AnalogClockBlock.
*/
namespace Drupal\analog_clock\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Shows the current time in Analog ClockBlock.
*
* @Block(
* id = "analog_clock",
* admin_label = @Translation("Analog Clock Block"),
* category = @Translation("Blocks")
* )
*/
class AnalogClockBlock extends BlockBase {
  /**
  * {@inheritdoc}
  */

  public function build() {
    return ([
      '#theme' => 'analog_clock_template',
    ]);
  }
}


