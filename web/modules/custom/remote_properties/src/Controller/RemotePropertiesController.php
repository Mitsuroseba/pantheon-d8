<?php

namespace Drupal\remote_properties\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\remote_properties\Form\ExposedForm;
use Drupal\remote_properties\PropertiesFetcher;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 */
class RemotePropertiesController extends ControllerBase {

  /**
   * Properties fetcher.
   *
   * @var \Drupal\remote_properties\PropertiesFetcher
   */
  protected $propertiesFetcher;

  /**
   *
   */
  public function __construct(PropertiesFetcher $properties_fetcher) {
    $this->propertiesFetcher = $properties_fetcher;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('remote_properties.properties_fetcher')
    );
  }

  /**
   * Properties list.
   */
  public function propertiesList(Request $request) {
    $form = $this->formBuilder()->getForm('Drupal\remote_properties\Form\ExposedForm');

    $options = [];
    foreach (ExposedForm::FILTERS_MAP as $filter => $default) {
      $options[$filter] = $request->get($filter) ?: $default;
    }

    $build = [
      '#theme' => 'remote_properties_page',
      '#result_set' => $this->propertiesFetcher->fetchProperties($options),
      '#exposed' => $form,
    ];

    return $build;
  }

}
