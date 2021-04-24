<?php

// @codingStandardsIgnoreFile

$databases = [];

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;

$settings['entity_update_backup'] = TRUE;

$settings['migrate_node_migrate_type_classic'] = FALSE;

$settings['config_sync_directory'] = '../config/sync';

$databases['default']['default'] = [
  'host'      => getenv('MYSQL_HOSTNAME'),
  'database'  => getenv('MYSQL_DATABASE'),
  'username'  => getenv('MYSQL_USER'),
  'password'  => getenv('MYSQL_PASSWORD'),
  'port'      => getenv('MYSQL_PORT'),
  'driver'    => 'mysql',
  'prefix'    => '',
  'collation' => 'utf8mb4_general_ci',
];

$settings['hash_salt'] = '1234';

$settings['trusted_host_patterns'] = [
  '^drupal-meetup\.lndo\.site$',
];
