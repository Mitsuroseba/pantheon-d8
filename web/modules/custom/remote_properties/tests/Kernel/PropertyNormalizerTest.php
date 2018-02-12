<?php

namespace Drupal\Tests\remote_properties\Kernel;

use Drupal\Component\Serialization\SerializationInterface;
use Drupal\KernelTests\KernelTestBase;
use Drupal\multiversion\Entity\Workspace;
use Drupal\node\Entity\Node;
use Drupal\node\Entity\NodeType;
use Drupal\remote_properties\Entity\Property;
use Drupal\remote_properties\Entity\ResultSet;


/**
 * @group
 */
class PropertyNormalizerTest extends KernelTestBase {

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
   *
   */
  public function testDeserialization() {
    /**
     * @var ResultSet $object
     */
    $object = $this->serializer->deserialize('{
        "requestTimeMs": 160.31,
        "results": [{
          "picture": "//sdc.novasol.com/pic/scr/scr199_pool_01.jpg",
          "rating": 4,
          "adults": 4
        }]
      }',
      ResultSet::class, 'json'
    );

    /** @var Property $property */
    $results = $object->getResults();
    $property = array_shift($results);
    $this->assertInstanceOf('Drupal\remote_properties\Entity\ResultSet', $object);
    $this->assertInstanceOf('Drupal\remote_properties\Entity\Property', $property);
    $this->assertEquals('160.31', $object->getRequestTimeMs());
    $this->assertEquals('4', $property->getRating());
  }

}
