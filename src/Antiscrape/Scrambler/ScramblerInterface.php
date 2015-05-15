<?php

namespace Antiscrape\Scrambler;

interface ScramblerInterface
{
    public function scramble();

    public function setMultiplier($multiplier);
}