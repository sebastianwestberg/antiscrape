<?php

namespace Antiscrape;

class Antiscrape
{
    private $dataGenerator;

    public function setDataGenerator(DataGenerator\DataGeneratorInterface $dataGenerator)
    {
        $this->dataGenerator = $dataGenerator;
    }

    public function getDataGenerator()
    {
        return $this->dataGenerator;
    }

}
