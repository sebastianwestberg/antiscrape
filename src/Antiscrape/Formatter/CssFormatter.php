<?php

namespace Antiscrape\Formatter;

use Antiscrape\Scrambler;

class CssFormatter implements FormatterInterface
{
    public static function format($stacks)
    {
        $formatting = '';

        foreach ($stacks as $stack) {
            foreach ($stack as $dataObj) {
                $style = $dataObj->getState() === 'visible' ? 'inline' : 'none';
                $formatting .= sprintf(".%s{display:%s}", $dataObj->getId(), $style);
            }
        }

        return $formatting;
    }
}
