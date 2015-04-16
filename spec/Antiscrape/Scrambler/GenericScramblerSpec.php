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

    /**
     * TODO: Add some more tests to ensure that we're actually getting a "valid" scrambled string.
     */
    function it_returns_a_scrambled_string()
    {
        $email = 'foo@bar.se';

        $this->scramble($email)->shouldNotBeLike($email);
    }
}
