<?php

namespace Drupal\audit_log\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Audit log entities.
 */
class AuditLogViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['audit_log']['target_entity_view_link'] = [
      'title' => $this->t('Target entity view link'),
      'real field' => 'entity_id',
      'field' => [
        'id' => 'audit_log_target_view_link',
      ],
    ];

    $data['audit_log']['event']['filter'] = [
      'id' => 'in_operator',
      'options callback' => 'Drupal\audit_log\Entity\AuditLogViewsData::getOptions',
    ];

    return $data;
  }

  /**
   * Get options.
   */
  public static function getOptions() {
    return [
      'insert' => t('Insert'),
      'update' => t('Update'),
      'delete' => t('Delete'),
    ];
  }

}
