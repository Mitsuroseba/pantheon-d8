<?php

namespace Drupal\remote_properties\Normalizer;

use Drupal\hal\Encoder\JsonEncoder;
use Drupal\remote_properties\Entity\Property;
use Drupal\remote_properties\Entity\ResultSet;
use Drupal\serialization\Normalizer\NormalizerBase;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 *
 */
class PropertyNormalizer extends NormalizerBase implements DenormalizerInterface {

  /**
   * {@inheritdoc}
   */
  protected $supportedInterfaceOrClass = 'Drupal\remote_properties\Entity\ResultSet';

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []) {}

  /**
   * {@inheritdoc}
   */
  public function denormalize($data, $class, $format = NULL, array $context = []) {
    $serializer = new Serializer([new GetSetMethodNormalizer()], []);
    $properties = [];

    foreach ($data['results'] as $property_data) {
      $properties[] = $serializer->denormalize($property_data, Property::class);
    }

    $data['results'] = $properties;
    return $serializer->denormalize($data, ResultSet::class);
  }

}
