<?php

namespace Drupal\audit_log_deploy\EventSubscriber;

use Drupal\audit_log\AuditLogEventInterface;
use Drupal\audit_log\EventSubscriber\EventSubscriberInterface;

/**
 * Processes workspace entity events.
 */
class Workspace implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public function reactTo(AuditLogEventInterface $event) {
    $entity = $event->getEntity();

    if ($entity->getEntityTypeId() != 'workspace') {
      return FALSE;
    }

    $event_type = $event->getEventType();

    $args = ['@title' => $entity->label()];

    if ($event_type == 'insert') {
      $event
        ->setMessage(t('@title was created.', $args));
      return TRUE;
    }

    if ($event_type == 'update') {
      $event
        ->setMessage(t('@title was updated.', $args));
      return TRUE;
    }

    if ($event_type == 'delete') {
      $event
        ->setMessage(t('@title was deleted.', $args));
      return TRUE;
    }

    return FALSE;
  }

}
