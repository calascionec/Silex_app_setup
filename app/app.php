<?php
    require_once __DIR__."/../vendor/autoload.php";
//insert classes needed
    //require_once __DIR__."/../src/"

//start session

//initialize silex application and twig

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigserviceProvider(), array('twig.path' => __DIR__."/../views"));

//routes

    $app->get('/', function() use ($app) {

        return $app['twig']->render('index.html.twig');
    });


    return $app;


 ?>
