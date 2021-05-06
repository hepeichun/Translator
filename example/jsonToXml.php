<?php

require __DIR__.'/../vendor/autoload.php';



$json = '{"id":"1682333591565606218","wfr":"spider","for":"pc"}';

var_dump(\jdkysq\Translator\Msg::hasFormat('xml'));

$ret = (new \jdkysq\Translator\Msg($json))->from('json')->to('xml');

var_dump($ret);
