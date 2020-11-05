<?php

require __DIR__.'/../vendor/autoload.php';

$url = "id=1682333591565606218&wfr=spider&for=pc";

$ret = (new \jdkysq\Translator\Translator())->To('url','json',$url);

var_dump($ret);
