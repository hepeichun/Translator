<?php


namespace jdkysq\Translator;


use jdkysq\Translator\tool\From;

/**
 * Class Msg
 * @package jdkysq\Translator
 */
class Msg
{
    /**
     * @var string
     */
    protected $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }


    /**
     * @param string $from
     * @return From
     */
    public function from(string $from): From
    {
        $from = "\\jdkysq\\Translator\\helper\\_".strtolower($from);
        return new From($from,$this->msg);
    }


    /**
     * @param $format
     * @return bool
     */
    public static function hasFormat($format): bool
    {
        if(class_exists("\\jdkysq\\Translator\\helper\\_".strtolower($format))){
            return true;
        }
        return false;
    }

}