<?php

    require __DIR__ . "/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $route = new Router( url(), "::" ); // URL Project, Separator

    /**
     * App Routes
    */

    $route->namespace("Source\App");

    $route->get("/", "App::index");


    /**
     * Panel Routes
    */

    $route->namespace("Source\App");

    $route->get("/dashboard", "DashBoard::index");

    /**
     * Dispatch Router
    */

    $route->dispatch();
