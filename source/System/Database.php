<?php

    namespace Source\System;

    use PDO;
    use PDOException;

    class Database
    {
        /** @const array */
        private const OPTIONS = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ];

        /** @var PDO */
        private static $instance;

        final private function __construct(){}

        final private function __clone(){}

        /**
         * @return PDO
        */
        public static function connect(): ?PDO
        {
            if (empty(self::$instance)) {
                try {
                    self::$instance = new PDO(
                        "mysql:host=" . CONF_DB_HOST . ";dbname=" . CONF_DB_NAME,
                        CONF_DB_USER,
                        CONF_DB_PWD,
                        self::OPTIONS
                    );
                } catch (PDOException $exception) {
                    // redirect("/erro/d");

                    var_dump($exception);
                }
            }

            return self::$instance;
        }
    }