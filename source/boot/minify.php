<?php

    if(strpos(url(), "localhost")) # Se eu estou em localhost
    {
        $minifyCSS = new MatthiasMullie\Minify\CSS();
        $minifyCSS->add(__DIR__ . "/../../resources/libs/bootstrap/css/bootstrap.min.css");
        $minifyCSS->add(__DIR__ . "/../../resources/css/app.css");
        $minifyCSS->minify(__DIR__ . "/../../resources/dist/app.css");


        $minifyJS = new \MatthiasMullie\Minify\JS();
        $minifyJS->add(__DIR__ . "/../../resources/libs/jquery/jquery.min.js");
        $minifyJS->add(__DIR__ . "/../../resources/libs/bootstrap/js/bootstrap.bundle.js");
        $minifyJS->minify(__DIR__ . "/../../resources/dist/app.js");
    }