<?php

    namespace Source\App;

    use Source\System\Session;

    class App extends Controller
    {
        /**
         * @var null|array|object $params
        */
        protected $params;
        private $session;

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
            $this->session = new Session();
            $this->session->set("userName", "Felipe");
        }

        public function contact()
        {
            echo $this->view("contact");
        }

        public function loginGet()
        {
            echo $this->view("login");
        }
    }