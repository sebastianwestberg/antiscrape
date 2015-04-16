<?php

namespace spec\Antiscrape\Formatter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Antiscrape\Scrambler\GenericScrambler as Scrambler;

class CssFormatterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Antiscrape\Formatter\CssFormatter');
    }

    function it_generates_a_random_css_class()
    {
        $nameLen = 15;
        $this->nameGenerator($nameLen)->shouldBeValidCssClassName($nameLen);
    }

    function getMatchers()
    {
        return [
            'beValidStyle' => function($subject) {
                $pattern = '/^(\.[a-z]*{display: ?(none|inline)})+$/i';
                return preg_match($pattern, $subject);
            },
            'beValidCssClassName' => function($subject, $chars = 8) {
                $pattern = sprintf('/^[a-zA-Z]{%d}$/', $chars);
                return preg_match($pattern, $subject);
            }
        ];
    }
}
