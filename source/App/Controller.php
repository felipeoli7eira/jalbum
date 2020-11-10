<?php

    namespace Source\App;

    use League\Plates\Engine as PlatesEngine;

    class Controller
    {
        protected $view;

        protected function __construct(string $viewType)
        {
            /**
             * $viewType: app || dashboard
            */
            $this->view = PlatesEngine::create( CONF_VIEWS_DIR . $viewType, CONF_VIEWS_EXT );
        }

        public function view(string $viewName, array $viewData = []): string
        {
            return $this->view->render($viewName, $viewData);
        }
    }