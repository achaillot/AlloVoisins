<?php

use Symfony\Component\Yaml\Yaml;

class i18n
{
    private $type;

    public static function tr($welcome, $params, $lang)
    {
        $test = Yaml::parseFile($lang.'.yml');

        $welcome = $test[$lang]['welcome']." ".$params["user"];

        return $welcome;
    }
}
