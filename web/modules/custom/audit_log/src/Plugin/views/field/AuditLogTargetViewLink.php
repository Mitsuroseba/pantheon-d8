<?php

namespace Drupal\audit_log\Plugin\views\field;

use Drupal\Core\Url;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Provides a target entity view link.
 *
 * @ViewsField("audit_log_target_view_link")
 */
class AuditLogTargetViewLink extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function render(ResultRow $row) {
    $entity_type = $this->getEntity($row)->entity_type->value;

    return [
      '#markup' => Url::fromRoute("entity.{$entity_type}.canonical", [$entity_type => $this->getEntity($row)->entity_id->target_id])->toString(),
    ];
  }

}
