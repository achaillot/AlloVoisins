<?php

use Symfony\Component\Yaml\Yaml;

class i18n
{
    private $type;

    //$welcome = first part of message / $params = name of user / $lang = user language
    public static function tr($welcome, $params, $lang)
    {
        $type = ['yaml', 'db'];

        //for info in yaml
        if (in_array('yaml', $type)) {

            //add infos from a .yml file to a variable
            $test = Yaml::parseFile($lang.'.yml');

            //concatenation for the final message
            $welcome = $test[$lang]['welcome']." ".$params["user"];

            return $welcome;

        //for info in database
        } elseif (in_array('db', $type)) {

            // todo : put query to verify user name and language in db
            return $welcome;
        }
    }
}
