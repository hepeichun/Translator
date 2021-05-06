<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\TemplateInterfaces;

class _array implements TemplateInterfaces
{


    /**
     * @param mixed $msg
     * @return array
     */
    public function decode($msg): array
    {
        return (array)$msg;
    }

    /**
     * @param array $msg
     * @return array
     */
    public function encode(array $msg): array
    {
        return $msg;
    }
}
