<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\TemplateInterfaces;

class _json implements TemplateInterfaces
{

    /**
     * @param mixed $msg
     * @return array|mixed
     */
    public function decode($msg) :array
    {
        return json_decode($msg,true);
    }

    /**
     * 消息编码
     * @param array $msg
     * @return mixed
     */
    public function encode(array $msg)
    {
        return json_encode($msg);
    }
}
