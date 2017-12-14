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
}
