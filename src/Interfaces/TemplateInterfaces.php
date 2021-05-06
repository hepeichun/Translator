<?php


namespace jdkysq\Translator\Interfaces;


interface TemplateInterfaces
{
    /**
     * 消息解码
     * @param mixed $msg
     * @return array
     */
    public function decode($msg): array;

    /**
     * 消息编码
     * @param array $msg
     * @return mixed
     */
    public function encode(Array $msg);
}
