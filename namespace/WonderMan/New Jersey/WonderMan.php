<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 24.05.16
 * Time: 23:07
 */
class WonderMan
{
    public static function whoami()
    {
        $path=explode('/',__DIR__);
        echo "I'm ".__CLASS__.". I am from ".$path[count($path)-1]."!".PHP_EOL;
    }
}