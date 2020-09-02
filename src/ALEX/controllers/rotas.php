<?php

$post = $app['controllers_factory'];

$post->get("/", function() use ($app){
   return $app['twig']->render('posts.twig', array());
})->bind('posts');

$post->get("/mac", function() use ($app){
    return $app['twig']->render('mac.twig', array());
})->bind('mac');

$post->get("/linux", function() use ($app){
    return $app['twig']->render('linux.twig', array());
})->bind('linux');

$post->get("/windows", function() use ($app){
    return $app['twig']->render('windows.twig', array());
})->bind('windows');

