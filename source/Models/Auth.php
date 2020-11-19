<?php

    namespace Source\Models;

    use Source\System\Session;

    // use Source\Core\Model;
    // use Source\Core\View;
    // use Source\Support\Email;

    /**
    * Class Auth
    * @package Source\Models
    */
    class Auth
    {
        /** @var Source\System\Session */
        private static $session;

        public static function user()
        {
            self::$session = new Session();

            if (!self::$session->exist("auth_user"))
            {
                return false;
            }

            return true; // por enquanto

            // return (new User())->findById($session->authUser); retorna os dados do banco
        }

        // public static function logout(): void
        // {
        //     $session = new Session();
        //     $session->unset("authUser");
        // }

        // /**
        //  * @param User $user
        //  * @return bool
        //  */
        // public function register(User $user): bool
        // {
        //     if (!$user->save()) {
        //         $this->message = $user->message;
        //         return false;
        //     }

        //     $view = new View(__DIR__ . "/../../shared/views/email");
        //     $message = $view->render("confirm", [
        //         "first_name" => $user->first_name,
        //         "confirm_link" => url("/obrigado/" . base64_encode($user->email))
        //     ]);

        //     (new Email())->bootstrap(
        //         "Ative sua conta no " . CONF_SITE_NAME,
        //         $message,
        //         $user->email,
        //         "{$user->first_name} {$user->last_name}"
        //     )->send();

        //     return true;
        // }

        // /**
        //  * @param string $email
        //  * @param string $password
        //  * @param bool $save
        //  * @return bool
        //  */
        // public function login(string $email, string $password, bool $save = false): bool
        // {
        //     if (!is_email($email)) {
        //         $this->message->warning("O e-mail informado não é válido");
        //         return false;
        //     }

        //     if ($save) {
        //         setcookie("authEmail", $email, time() + 604800, "/");
        //     } else {
        //         setcookie("authEmail", null, time() - 3600, "/");
        //     }

        //     if (!is_passwd($password)) {
        //         $this->message->warning("A senha informada não é válida");
        //         return false;
        //     }

        //     $user = (new User())->findByEmail($email);
        //     if (!$user) {
        //         $this->message->error("O e-mail informado não está cadastrado");
        //         return false;
        //     }

        //     if (!passwd_verify($password, $user->password)) {
        //         $this->message->error("A senha informada não confere");
        //         return false;
        //     }

        //     if (passwd_rehash($user->password)) {
        //         $user->password = $password;
        //         $user->save();
        //     }

        //     //LOGIN
        //     (new Session())->set("authUser", $user->id);
        //     $this->message->success("Login efetuado com sucesso")->flash();
        //     return true;
        // }
    }