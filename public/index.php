<?php
require_once __DIR__ . "/../vendor/autoload.php";

USE app\core\Application;
USE app\Controllers\SiteController;
USE app\Controllers\AuthController;

$app = new Application(dirname(__DIR__));

$app->getRouter()->get('/',[SiteController::class, 'home']);
$app->getRouter()->get('/features',[SiteController::class, 'features']);
$app->getRouter()->get('/blog',[SiteController::class, 'blog']);
$app->getRouter()->get('/_404',[SiteController::class,'_404']);
//$app->getRouter()->get('/_404','_404');

$app->getRouter()->get('/login',[AuthController::class,'login']);
$app->getRouter()->post('/login',[AuthController::class,'login']);
$app->getRouter()->get('/signup',[AuthController::class,'register']);
$app->getRouter()->post('/signup',[AuthController::class,'register']);


$app->run();


