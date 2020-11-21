<?php

    require __DIR__ . "/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $route = new Router( url(), "::" );

    /** App Routes */

    $route->namespace("Source\App");

    $route->get("/", "App::index");

    $route->get("/login", "App::login");
    $route->post("/login", "App::execLogin");

    $route->get("/erro/{code}", "App::error");

    /** Dashboard Routes */

    $route->get("/dashboard", "DashBoard::index");

    /** Dispatch Routes */

    $route->dispatch();

    /** Listen Error */

    if($route->error())
    {
        redirect("/erro/{$route->error()}");
    }
