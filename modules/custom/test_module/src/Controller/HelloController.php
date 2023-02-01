<?php

/**
 * @file
 * Provides basic hello world message functionality.
 */

namespace Drupal\test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldController.
 *
 * @package Drupal\test_module\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Say Hello.
   *
   * @return array
   *   Markup.
   */
  public function hello() {
    return ['#markup' => $this->t("This is a test module for Balidea!")];
  }

}
