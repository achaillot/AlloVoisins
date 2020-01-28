<?php

require_once 'i18n.php';
require __DIR__ . '/vendor/autoload.php';

$params = array('user' => 'Pablo');

//Display message
echo i18n::tr('welcome', $params,'it');
