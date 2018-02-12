<?php

namespace Drupal\Tests\remote_properties\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\remote_properties\Controller\RemotePropertiesController;
use Symfony\Component\HttpFoundation\Request;


/**
 * @group
 */
class RemotePropertiesControllerTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['remote_properties', 'serialization'];
  protected $serializer;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->installConfig('remote_properties');

    $this->serializer = $this->container->get('serializer');
  }

  /**
   * Test properties list.
   */
  public function testPropertiesList() {

    $properties_fetcher = $this->getMockBuilder('Drupal\remote_properties\PropertiesFetcher')->disableOriginalConstructor()->getMock();

    $properties_fetcher->expects($this->once())
      ->method('fetchProperties')
      ->with([
        'date_from' => 20141012,
        'date_to' => 20170203,
        'count' => 10,
        'offset' => 0,
      ])
      ->will($this->returnValue(NULL));
    $this->container->set('remote_properties.properties_fetcher', $properties_fetcher);

    $controller = RemotePropertiesController::create($this->container);
    $request = new Request(['date_from' => 20141012]);
    $build = $controller->propertiesList($request);
    self::assertEquals($build['#exposed']['#form_id'], 'exposed_form');
  }

}
