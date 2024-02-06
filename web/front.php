<?php
// framework/front.php


require_once dirname(__DIR__, 1).'/vendor/autoload.php';
ini_set('display_errors', 1);
error_reporting(-1);
use Symfony\Component\HttpFoundation\Request;

$routes = include dirname(__DIR__, 1).'/src/app.php';
//$container = include dirname(__DIR__, 1).'/src/container.php';

$request = Request::createFromGlobals();

$response = $container->get('framework')->handle($request);

$response->send();
?>
