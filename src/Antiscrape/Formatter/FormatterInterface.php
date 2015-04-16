<?php

namespace Antiscrape\Formatter;

interface FormatterInterface
{
    public function addFormatting($data);

    public static function getFormatting();
}