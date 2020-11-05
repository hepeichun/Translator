<?php

require __DIR__.'/../vendor/autoload.php';

var_dump((new \jdkysq\Translator\Translator())->isFormat('xml'));


$json = '{"id":"1682333591565606218","wfr":"spider","for":"pc"}';

var_dump((new \jdkysq\Translator\Translator())->To('json','xml',$json));
