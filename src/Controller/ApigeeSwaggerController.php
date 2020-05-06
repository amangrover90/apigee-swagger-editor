<?php

/**
 * Controller for GET Article detail page.
 */

namespace Drupal\apigee_swagger_editor\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

class ApigeeSwaggerController extends ControllerBase {

  /**
   * Controller method for GET Swagger Editor.
   * @param Request $request
   * @return $build
   */
  public function getSwaggerEditor(Request $request) {
    $build = array(
      '#theme' => 'apigee_swagger_editor_view',
    );
    $build['#attached']['library'][] = 'apigee_swagger_editor/swagger_editor_library';
    return $build;
  }
  
  public function getIframeSwaggerEditor(Request $request) {
    $build = array(
      '#theme' => 'apigee_iframe_swagger_editor_view'
    );
    return $build;
  }

}
