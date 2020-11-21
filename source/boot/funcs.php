<?php

    /**
     * ###################
     * #### VALIDATES ####
     * ###################
    */

    /**
     * @param string $password
     * @param string $hash
     * @return bool
    */
    function pwd_verify(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

    /**
     * @param string $email
     * @return bool
    */
    function is_valid_email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * #############
     * #### URL ####
     * #############
    */

    /**
     * @param string $url
    */
    function redirect(string $url): void
    {
        header("HTTP/1.1 302 Redirect");
        if (filter_var($url, FILTER_VALIDATE_URL))
        {
            header("Location: {$url}");
            exit;
        }

        if (filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url)
        {
            $location = url($url);
            header("Location: {$location}");
            exit;
        }
    }

    /**
     * @return string
    */
    function url_back(): string
    {
        return ($_SERVER['HTTP_REFERER'] ?? url());
    }

    /**
     * @param string $uri
     * @return string
    */
    function current_uri_is(string $uri): string
    {
        return strpos($_SERVER["REQUEST_URI"], $uri);
    }

    /**
     * @param string|null $path
     * @return string
    */
    function url(?string $path = null): string
    {
        if ($_SERVER[ "SERVER_NAME" ] === "localhost")
        {
            if ($path)
            {
                return CONF_URL_DEV . ($path[0] === "/" ? $path : "/{$path}");
            }

            return CONF_URL_DEV;
        }
        else
        {
            if ($path)
            {
                return $path[0];
            }

            return CONF_URL_PROD;
        }
    }

    /**
     * ################
     * #### SYSTEM ####
     * ################
    */

    /**
     * @return Source\System\Session
    */
    function session(): Source\System\Session
    {
        return new Source\System\Session();
    }

    /**
     * @return Source\Models\Auth
    */
    function auth(): Source\Models\Auth
    {
        return new Source\Models\Auth();
    }

    /**
     * @param string $resource
     * @return string
    */
    function resource(string $resource): string
    {
        return url(
            CONF_RESOURCES_DIR . str_replace( "|", DIRECTORY_SEPARATOR, $resource )
        );
    }