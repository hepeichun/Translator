<?php


namespace jdkysq\Translator\tool;


use jdkysq\Translator\Interfaces\TemplateInterfaces;

class From
{
    /**
     * @var TemplateInterfaces
     */
    private $obj;

    /**
     * @var array
     */
    private $msg = [];

    /**
     * from constructor.
     * @param string $from
     * @param string $msg
     */
    public function __construct(string $from, string $msg)
    {
        $this->obj = new $from();
        $this->msg = $this->obj->decode($msg);
    }

    /**
     * @param string $to
     * @return mixed
     */
    public function to(string $to)
    {
        $to = "\\jdkysq\\Translator\\helper\\_".strtolower($to);
        /**
         * @var TemplateInterfaces $toObj
         */
        $toObj = new $to();
        return $toObj->encode($this->msg);
    }

    /**
     * @return mixed
     */
    public function encode()
    {
        return $this->obj->encode($this->msg);
    }

    /**
     * @return array
     */
    public function decode() :array
    {
        return $this->msg;
    }
}