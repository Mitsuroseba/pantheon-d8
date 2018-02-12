<?php

// Local enviroment variables.
if (!isset($_ENV['PANTHEON_ENVIRONMENT'])) {
  $databases['default']['default'] = array (
    'database' => 'drupal',
    'username' => 'drupal',
    'password' => 'drupal',
    'prefix' => '',
    'host' => 'mariadb',
    'port' => '3306',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  );

  $settings['hash_salt'] = '5xAVyif6ZWvMWuegmfvCLp_m644IMHiltlJxTeEvaP0HupX3x3TlxPnhsVTY60MgAC09M4-upQ';

  $settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

  assert_options(ASSERT_ACTIVE, TRUE);
  \Drupal\Component\Assertion\Handle::register();
  /**
   * Show all error messages, with backtrace information.
   *
   * In case the error level could not be fetched from the database, as for
   * example the database connection failed, we rely only on this value.
   */
  $config['system.logging']['error_level'] = 'verbose';

}
