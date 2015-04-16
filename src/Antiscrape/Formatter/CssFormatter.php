<?php

namespace Antiscrape\Formatter;

class CssFormatter implements FormatterInterface
{
    private $css = array();

    public function addFormatting($data = array())
    {
        $this->css[] = sprintf(".%s{%s}", $data['selector'], $data['style']);
    }

    public function getFormatting()
    {
        $str = '';

        foreach ($this->css as $css) {
            $str .= $css;
        }

        return $str;
    }

    public function nameGenerator($classLen = 8, $chars = 'abcdefghijklmnopqrstuvwxyz')
    {
        $charsLen = strlen($chars) - 1;
        $class = '';

        for ($i = 0; $i < $classLen; $i++) {
            $randEntry = mt_rand(1, $charsLen);
            $class .= $randEntry % 2 === 0 ? $chars[$randEntry] : ucfirst($chars[$randEntry]);
        }

        return $class;
    }
}
