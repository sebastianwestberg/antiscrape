<?php

namespace Antiscrape\Formatter;

use Antiscrape\Scrambler;

class HtmlFormatter
{
    public static function format($stacks)
    {
        $formatting = '';

        foreach ($stacks as $stack) {
            foreach ($stack as $dataObj) {
                $formatting .= sprintf('<span class="%s">%s</span>', $dataObj->getId(), $dataObj->getData());
            }
        } 

        return $formatting;
    }
}
