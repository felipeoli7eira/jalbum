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
    class Auth extends Model
    {
        /** @var Source\System\Session */
        private static $session;

        public function __construct()
        {
            parent::__construct("users");
        }

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

        /**
         * @param string $email
         * @param string $password
         * @return bool
         */
        public function login(string $email, string $password)
        {
            // $user = (new User())->findByEmail($email);
            // if (!$user)
            // {
            //     return false;
            // }

            // if (!pwd_verify($password, $user->password))
            // {
            //     $this->message->error("A senha informada não confere");
            //     return false;
            // }

        //     //LOGIN
        //     (new Session())->set("authUser", $user->id);
        //     $this->message->success("Login efetuado com sucesso")->flash();
        //     return true;

            $user = $this->select()->where("email = :email", [":email" => $email])->get("fetch");

            if(!$user)
            {
               return false;
            }

            if (!pwd_verify($password, $user->password))
            {
                return false;
            }

            return true;
        }
    }