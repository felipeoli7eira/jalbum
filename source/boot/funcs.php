<?php

    /**
     * URL
    */

    function url(?string $path = null): string
    {
        if( $_SERVER[ "SERVER_NAME" ] === "localhost" )
        {
            if( $path )
            {
                return CONF_URL_DEV . ( $path[0] === "/" ? $path : "/{$path}" );
            }

            return CONF_URL_DEV;
        }
        else
        {
            if( $path )
            {
                return $path[0];
            }

            return CONF_URL_PROD;
        }
    }

    function resource(string $resource)
    {
        // $replace = str_replace("|", DIRECTORY_SEPARATOR, $resource);
    }