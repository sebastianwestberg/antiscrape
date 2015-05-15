<?php

namespace spec\Antiscrape\Scrambler;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GenericScramblerSpec extends ObjectBehavior
{    
    function it_is_initializable()
    {
        $this->shouldHaveType('Antiscrape\Scrambler\GenericScrambler');
    }

    function it_returns_data_stacks_by_constructing_with_input_argument($scrambler)
    {
        $input = 'foo';
        $this->beConstructedWith($input);

        $this->scramble()->shouldHaveCount(strlen($input));
    }

    function it_returns_data_stacks_by_calling_scramble_method_directly($scrambler)
    {
        $input = 'foobar';
        $this->scramble($input)->shouldHaveCount(strlen($input));
    }
}
