<?php


namespace jdkysq\Translator\helper;


use jdkysq\Translator\Interfaces\TemplateInterfaces;

class _serialize implements TemplateInterfaces
{

    /**
     * @inheritDoc
     */
    public function decode($msg): array
    {
        return unserialize($msg);
    }

    /**
     * @inheritDoc
     */
    public function encode(array $msg): string
    {
        return serialize($msg);
    }
}
