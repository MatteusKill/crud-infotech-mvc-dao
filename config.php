<?php

define('BASE_DIR', dirname(__FILE__));
define('VIEW', BASE_DIR . '/View/');

$_ENV['db']['host'] = getenv('DB_HOST');
$_ENV['db']['database'] = getenv('DB_NAME');
$_ENV['db']['user'] = getenv('DB_USER');
$_ENV['db']['pass'] = getenv('DB_PASSWORD');