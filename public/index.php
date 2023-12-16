<?php

require_once __DIR__ . '/../vendor/autoload.php';
use myapp\Db;

require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';


$db_config = require CONFIG . '/db.php';
$db = Db::getInstance()->getConnection($db_config);


$router = new \myapp\Router();

require CONFIG . '/routes.php';
$router->match();






