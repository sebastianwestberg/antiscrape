<?php

namespace spec\Antiscrape\Formatter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Antiscrape\Scrambler;

class CssFormatterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Antiscrape\Formatter\HtmlFormatter');
    }
}