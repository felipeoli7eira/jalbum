<?php

    require __DIR__ . "/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $route = new Router( url(), "::" );

    $route->namespace("Source\App");

    $route->get("/", "App::home");

    $route->dispatch();