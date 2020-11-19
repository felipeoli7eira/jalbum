<?php

    require __DIR__ . "/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $route = new Router( url(), "::" ); // URL Project, Separator

    /** App Routes */

    $route->namespace("Source\App\Web");

    $route->get("/", "App::index");
    $route->get("/login", "App::login");
    $route->get("/erro/{code}", "App::error");

    /** Dashboard Routes */

    $route->namespace("Source\App\Dashboard");

    $route->get("/dashboard", "DashBoard::index");

    /** Dispatch Routes */

    $route->dispatch();

    /** Listen Error */

    if($route->error())
    {
        redirect("/erro/{$route->error()}");
    }
