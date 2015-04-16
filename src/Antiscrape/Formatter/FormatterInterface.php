<?php

namespace Antiscrape\Formatter;

interface FormatterInterface
{
    public function addFormatting($data);

    public function getFormatting();
}