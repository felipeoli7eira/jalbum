<?php

    namespace Source\App;

    class App extends Controller
    {
        /**
         * @var null|array|object $params
        */
        protected $params;

        public function __construct()
        {
            parent::__construct("app");
        }

        protected function arrayToObject(?array $routeParams = null): void
        {
            $this->params = (object) $routeParams;
        }

        public function index()
        {
            echo $this->view("index");
        }
    }