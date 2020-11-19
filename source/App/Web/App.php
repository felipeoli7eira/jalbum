<?php

    namespace Source\App\Web;

    use Source\App\Controller;

    class App extends Controller
    {
        public function __construct()
        {
            parent::__construct("app");
        }

        public function index()
        {
            echo $this->view("index");
        }

        public function login()
        {
            echo $this->view("login");
        }

        public function error($data)
        {
            echo "<h1>Erro na aplicação (". $data["code"] .")</h1>"; // por enquanto
        }
    }