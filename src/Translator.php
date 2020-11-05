<?php


namespace jdkysq\Translator;


/**
 * Class Translator
 * @package extend\Translator
 */
class Translator
{
    /**
     * @param string $from
     * @param string $to
     * @param $msg
     * @return mixed
     */
    public function To(string $from, string $to, $msg){
        $to = "\\jdkysq\\Translator\\helper\\_".strtolower($to);
        $from = "\\jdkysq\\Translator\\helper\\_".strtolower($from);
        return (new $to())->encode((new $from())->decode($msg));
    }

    /**
     * @param $format
     * @return bool
     */
    public function isFormat($format){
        if(class_exists("\\jdkysq\\Translator\\helper\\_".strtolower($format))){
            return true;
        }
        return false;
    }
}
