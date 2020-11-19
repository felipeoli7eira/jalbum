<?php

    require __DIR__ . "/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $route = new Router( url(), "::" ); // URL Project, Separator

    /**
     * App Routes
    */

    $route->namespace("Source\App");

    $route->get("/", "App::index");
    $route->get("/contato", "App::contact");
    $route->get("/login", "App::loginGet");

    /**
     * Panel Routes
    */

    $route->namespace("Source\App");

    $route->get("/dashboard", "DashBoard::index");

    /**
     * Dispatch Router
    */

    $route->dispatch();

    /**
     * Listen Error
    */

    if($route->error())
    {
        echo "<h1 style=\"text-align: center ; padding: 1rem\">{$route->error()}</h1>";
    }
