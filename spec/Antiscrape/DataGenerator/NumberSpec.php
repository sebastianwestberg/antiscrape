<?php

namespace spec\Antiscrape\DataGenerator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Antiscrape\DataGenerator\Number');
    }

    function it_implements_datagenerator_interface()
    {
    	$this->shouldImplement('Antiscrape\DataGenerator\DataGeneratorInterface');
    }

    function it_generates_int_data()
    {
    	$this->getData()->shouldbeInt(1);
    }
    
    function it_generates_random_int()
    {
    	$this->generateData()->shouldBeInt();
    }

    function it_generates_random_int_between_1_and_3()
    {
    	$this->generateData(1, 3)->shouldBeIntBetween(1, 3);
    }

    function getMatchers()
    {
    	return [
    		'beInt' => function($subject) {
    			return filter_var(
    				$subject,
    				FILTER_VALIDATE_INT
    			);
    		},
    		'beIntBetween' => function($subject, $min, $max) {
    			return filter_var(
    				$subject,
    				FILTER_VALIDATE_INT,
    				[
						'options' => [
							'min_range' => $min,
							'max_range' => $max
						]
    				]
    			);
    		}
    	];
    }
}
