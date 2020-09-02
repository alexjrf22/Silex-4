<?php

ini_set('display_erros', 1);
ini_set("display_startup_erros", 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';


$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../src/ALEX/views'));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

require_once '../src/ALEX/controllers/rotas.php';

$app->mount("/", $post);

$app->run();