<?php


namespace jdkysq\Translator\helper;

use jdkysq\Translator\Interfaces\Template;

/**
 * Class _xml
 * @package extend\Translator
 */
class _xml implements Template
{

    /**
     * 消息解码
     * @param mixed $msg
     * @return mixed
     */
    public function decode($msg)
    {
        return (array)simplexml_load_string($msg, 'SimpleXMLElement', LIBXML_NOCDATA);
    }

    /**
     * 消息编码
     * @param array $msg
     * @return mixed
     */
    public function encode(array $msg)
    {
        return '<?xml version="1.0" encoding="UTF-8"?><root>' . $this->convert($msg) . '</root>';
    }

    /**
     * @param array $msg
     * @return string
     */
    private function convert(array $msg)
    {
        $xml = '';
        foreach ($msg as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<{$key}>{$val}</{$key}>";
            } elseif (is_array($val)) {
                $xml .= "<{$key}>" . $this->convert($val) . "</{$key}>";
            } else {
                $val = htmlspecialchars($val, ENT_QUOTES);
                $xml .= "<{$key}>{$val}</{$key}>";
            }
        }

        return $xml;
    }
}
