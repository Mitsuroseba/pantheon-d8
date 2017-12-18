<?php


/**
 * Implements hook_install_tasks().
 */
function pantheon_install_tasks($install_state) {
  $tasks = [
    'pantheon_setup_cleanup' => [
      'display_name' => t('Cleanup'),
      'display' => FALSE,
      'type' => 'normal',
    ],
  ];

  return $tasks;
}

/**
 * Post profile install function.
 */
function pantheon_setup_cleanup() {
  \Drupal::service('module_installer')->install([
    'audit_log',
    'audit_log_deploy',
    'audit_log_rest',
  ]);
}
