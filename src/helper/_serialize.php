<?php


namespace jdkysq\Translator\helper;


use jdkysq\Translator\Interfaces\Template;

class _serialize implements Template
{

    /**
     * @inheritDoc
     */
    public function decode($msg)
    {
        return unserialize($msg);
    }

    /**
     * @inheritDoc
     */
    public function encode(array $msg)
    {
        return serialize($msg);
    }
}
