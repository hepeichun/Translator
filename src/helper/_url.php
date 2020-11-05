<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\Template;

class _url implements Template
{

    /**
     * 消息解码
     * @param mixed $msg
     * @return mixed
     */
    public function decode($msg)
    {
        parse_str($msg,$ret);
        return $ret;
    }

    /**
     * 消息编码
     * @param array $msg
     * @return mixed
     */
    public function encode(array $msg)
    {
        return http_build_query($msg);
    }
}
