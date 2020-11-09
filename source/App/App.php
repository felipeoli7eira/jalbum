<?php

    namespace Source\App;

    class App
    {
        /**
         * @var null|array|object $params
        */
        protected $params;

        protected function arrayToObject(?array $routeParams = null): void
        {
            $this->params = (object) $routeParams;
        }

        public function index(): void
        {
            var_dump("welcome to app");
        }
    }