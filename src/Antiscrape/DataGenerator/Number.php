<?php

namespace Antiscrape\DataGenerator;

use Antiscrape\DataGenerator\DataGeneratorInterface;

class Number implements DataGeneratorInterface
{
    public function getData()
    {
        // TODO: write logic here
        return 1;
    }

    public function generateData($start = 1, $end = 1)
    {
        return mt_rand($start, $end);
    }
}
