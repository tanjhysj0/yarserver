<?php
use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入

require '../vendor/autoload.php';

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection(require '../config/database.php');

$capsule->bootEloquent();
// 路由配置
$pathInfo = $_SERVER['PATH_INFO'];
$query = str_replace("/","\\",$pathInfo);

$className = "app\\service{$query}Service";

$controller = new $className;
$server = new Yar_Server($controller);
$server->handle();