<?php


namespace jdkysq\Translator\Interfaces;


interface Template
{
    /**
     * 消息解码
     * @param mixed $msg
     * @return mixed
     */
    public function decode($msg);

    /**
     * 消息编码
     * @param array $msg
     * @return mixed
     */
    public function encode(Array $msg);
}
