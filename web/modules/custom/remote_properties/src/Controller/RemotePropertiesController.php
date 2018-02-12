<?php

namespace Drupal\remote_properties\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\remote_properties\PropertiesFetcher;
use Symfony\Component\DependencyInjection\ContainerInterface;

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
  public function propertiesList() {
    $this->propertiesFetcher->fetchProperties();
    $build = [
      '#theme' => 'remote_properties_page',
    ];
//todo
    $build['#table'] = [
      '#type' => 'table',
//      '#header' => $this->buildHeader(),
//      '#title' => $this->getTitle(),
      '#rows' => [],
      '#empty' => $this->t('There is no @label yet.', ['@label' => 'label']),
      '#cache' => [
//        'contexts' => $this->entityType->getListCacheContexts(),
//        'tags' => $this->entityType->getListCacheTags(),
      ],
    ];
//    foreach ($this->load() as $entity) {
//      if ($row = $this->buildRow($entity)) {
//        $build['#table']['#rows'][$entity->id()] = $row;
//      }
//    }


    return $build;
  }

}
