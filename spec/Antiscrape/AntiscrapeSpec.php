<?php

namespace spec\Antiscrape;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Antiscrape\DataGenerator\Number;

class AntiscrapeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Antiscrape\Antiscrape');
    }

    function it_sets_a_data_generator(\Antiscrape\DataGenerator\Number $numberDataGenerator)
    {
    	$this->setDataGenerator($numberDataGenerator);
    }

    function it_gets_a_data_generator(\Antiscrape\DataGenerator\Number $dataGenerator)
    {
    	$this->setDataGenerator($dataGenerator);
    	$this->getDataGenerator()->shouldBe($dataGenerator);
    }
}
