<?php

/**
* @file
* Contains \Drupal\hubr_rss\Plugin\Block\HubrRssBlock.
*/
namespace Drupal\hubr_rss\Plugin\Block;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;
use Drupal\Core\Template\Attribute;
use Drupal\Core\Url;
/**
* Provides Video Channel Block.
*
* @Block(
* id = "hubr_rss",
* admin_label = @Translation("Hubr RSS"),
* category = @Translation("Blocks")
* )
*/
class HubrRssBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $url = 'https://habr.com/rss/hubs/';
    $xml_web = (string) \Drupal::httpClient()->get($url, array('verify' => false))->getBody();
    $xml = simplexml_load_string($xml_web, "SimpleXMLElement", LIBXML_NOCDATA);

    $json = Json::encode($xml);
    $data = Json::decode($json);
    $items = $data['channel']['item'];

    $main_info = [];
    $main_info['title'] =       $data['channel']['title'];
    $main_info['link'] =        $data['channel']['link'];
    $main_info['description'] = $data['channel']['description'];
    $main_info['image'] =       $data['channel']['image'];

    $image_link = $data['channel']['image']['link'];
    $atributes = new Attribute ([
      'src' => $data['channel']['image']['url'],
      'alt' => $data['channel']['image']['title'],
    ]);
    $image = "<img" . $atributes . ">";
    $image_link = Url::fromUri($image_link);
    $image_wrapped = Link::fromTextAndUrl( Markup::create($image), $image_link);

    $selected_items = [];
    $count = 0;
    foreach ($items as $item){
      $selected_items[$count]['title']       = $item['title'];
      $selected_items[$count]['description'] = $item['description'];
      $selected_items[$count]['link']        = $item['link'];
      $selected_items[$count]['pubDate']     = $item['pubDate'];
      $selected_items[$count]['category']    = $item['category'];

      if (++$count == 10) break;
    }

    return ([
      '#theme' => 'hubr_rss_template',
      '#image' => $image_wrapped,
      '#main_info' => $main_info,
      '#selected_items' => $selected_items
    ]);
  }
}


