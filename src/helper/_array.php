<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\Template;

class _array implements Template
{

    /**
     * 消息解码
     * @param mixed $msg
     * @return mixed
     */
    public function decode($msg)
    {
        return $msg;
    }

    /**
     * 消息编码
     * @param array $msg
     * @return mixed
     */
    public function encode(array $msg)
    {
        return $msg;
    }
}
