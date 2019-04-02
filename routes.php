<?php
use App\Core\Router;
$router = new Router();
$router -> define([
    '' => 'controllers/index.php',
]);