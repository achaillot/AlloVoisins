<?php

use Symfony\Component\Yaml\Yaml;

class i18n
{
    private $type = ['yaml', 'db'];

    //$welcome = first part of message / $params = name of user / $lang = user language
    public static function tr($welcome, $params, $lang)
    {
        //add infos from a .yml file to a variable
        $test = Yaml::parseFile($lang.'.yml');

        //concatenation for the final message
        $welcome = $test[$lang]['welcome']." ".$params["user"];

        return $welcome;
    }
}
