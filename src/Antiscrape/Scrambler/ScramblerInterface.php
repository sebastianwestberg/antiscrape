<?php

namespace Antiscrape\Scrambler;

interface ScramblerInterface
{
    public function scramble($data);

    public function setIterations($iterations);
}