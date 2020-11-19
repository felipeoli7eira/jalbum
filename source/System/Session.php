<?php

    namespace Source\System;

    class Session
    {
        public function __construct()
        {
            if( !session_id() )
            {
                session_start();
            }
        }

        /**
         * @param string $name
         * @return null|array|mixed
        */
        public function __get(string $name)
        {
            if( !empty( $_SESSION[ $name ] ) )
            {
                return $_SESSION[ $name ];
            }

            return null;
        }

        /**
         * @param string $name
         * @param midex $value
         * @return Session
        */
        public function __set(string $name, $value): Session
        {
            return $this->set($name, $value);
        }

        /**
         * @param string $name
        */
        public function __isset(string $name)
        {
            var_dump("isset");
        }

        /**
         * @param string $name
         * @param midex $value
         * @return Session
        */
        public function set(string $name, $value): Session
        {
            $_SESSION[ $name ] = (is_array($value) ? (object) $value : $value );
            return $this;
        }

        /**
         * @param string $sessionName
         * @return null|array|mixed
        */
        public function get(string $sessionName)
        {
            if( !empty( $_SESSION[ $sessionName] ) )
            {
                return $_SESSION[ $sessionName ];
            }

            return null;
        }

        public function all(): ?object
        {
            return $_SESSION ?? null;
        }

        /**
         * @param string $sessionName
         * @return bool
        */
        public function exist(string $sessionName): bool
        {
            return isset( $_SESSION[ $sessionName ] );
        }

        public function clear(string $sessionName): Session
        {
            if($this->exist($sessionName))
            {
                unset($_SESSION[ $sessionName ]);
                return $this;
            }
            return $this;
        }

        /**
         * @return Session
         */
        public function regenerate(): Session
        {
            session_regenerate_id(true);
            return $this;
        }

        /**
         * @return Session
         */
        public function delete(): Session
        {
            session_destroy();
            return $this;
        }
    }