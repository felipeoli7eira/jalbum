<?php

    namespace Source\App\Web;

    use Source\App\Controller;

    class App extends Controller
    {
        public function __construct()
        {
            parent::__construct("app");
        }

        public function index(): void
        {
            echo $this->view("index");
        }

        public function login(): void
        {
            echo $this->view("login");
        }

        /**
         * @param array|null $data
        */
        public function error($data): void
        {
            echo "<h1>Erro na aplicação (". $data["code"] .")</h1>"; // por enquanto
        }
    }