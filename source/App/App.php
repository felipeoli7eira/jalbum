<?php

    namespace Source\App;

    use Source\App\Controller;
    use Source\Models\Auth;

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

        public function execLogin(?array $data)
        {
            if (empty($data["umail"]) && empty($data["upwd"]) )
            {
                echo json_encode(
                    [
                        "error" => true,
                        "response" => "Nenhum dado informado! E-mail e senha são obrigatórios"
                    ]
                );

                return;
            }

            if (empty($data["umail"]))
            {
                echo json_encode(
                    [
                        "error" => true,
                        "response" => "Nenhum e-mail informado"
                    ]
                );

                return;
            }

            if (empty($data["upwd"]) )
            {
                echo json_encode(
                    [
                        "error" => true,
                        "response" => "Uma senha não foi informada. Impossível autenticar"
                    ]
                );

                return;
            }

            if (!is_valid_email($data["umail"]))
            {
                echo json_encode(
                    [
                        "error" => true,
                        "response" => "O e-mail informado não parece válido. Verifique e tente novamente"
                    ]
                );

                return;
            }

            $auth = new Auth();
            var_dump (
                $auth->login($data["umail"], $data["upwd"])
            );
        }

        /**
         * @param array|null $data
        */
        public function error($data): void
        {
            echo "<h1>Erro na aplicação (". $data["code"] .")</h1>"; // por enquanto
            var_dump($data);
        }
    }