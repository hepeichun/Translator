<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\TemplateInterfaces;

class _url implements TemplateInterfaces
{

    /**
     * @param mixed $msg
     * @return array
     */
    public function decode($msg): array
    {
        parse_str($msg,$ret);
        return (array)$ret;
    }

    /**
     * @param array $msg
     * @return mixed|string
     */
    public function encode(array $msg): string
    {
        return http_build_query($msg);
    }
}
