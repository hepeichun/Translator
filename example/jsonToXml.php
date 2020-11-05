<?php

require __DIR__.'/../vendor/autoload.php';

var_dump((new \jdkysq\Translator\Translator())->isFormat('xml'));


$json = '{"id":"1682333591565606218","wfr":"spider","for":"pc"}';

$ret = (new \jdkysq\Translator\Translator())->to('json','xml',$json);

var_dump($ret);
