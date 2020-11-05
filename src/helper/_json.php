<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\Template;

class _json implements Template
{

    /**
     * 消息解码
     * @param mixed $msg
     * @return mixed
     */
    public function decode($msg)
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
