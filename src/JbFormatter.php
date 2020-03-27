<?php

namespace JbLaravelNumberFormatter;

use NumberFormatter;

class JbFormatter
{
    protected $formattter;

    public function __construct($locale, $style, $pattern = null)
    {
        dd('a');
        $this->formattter = new NumberFormatter($locale, $style, $pattern);
    }

}
