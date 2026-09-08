<?php

define('BASE_DIR', dirname(__FILE__));
define('VIEW', BASE_DIR . '/View/');

$_ENV['db']['host'] = getenv('DB_HOST');
$_ENV['db']['name'] = getenv('DB_DATABASE');
$_ENV['db']['user'] = getenv('DB_USERNAME');
$_ENV['db']['password'] = getenv('DB_PASSWORD');