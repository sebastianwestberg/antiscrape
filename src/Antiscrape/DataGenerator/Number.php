<?php

namespace Antiscrape\DataGenerator;

use Antiscrape\DataGenerator\DataGeneratorInterface;

class Number implements DataGeneratorInterface
{
	private $subject = [];

    public function getData()
    {
        // TODO: write logic here
    	return 1;
    }

    public function setSubject($subject)
    {
        array_push($this->subject, (int) $subject);
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function generateData($start = 1, $end = 1)
    {
        return mt_rand($start, $end);
    }
}
