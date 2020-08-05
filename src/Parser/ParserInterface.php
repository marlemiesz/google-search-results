<?php

namespace Marlemiesz\GoogleSearchResult\Parser;

interface ParserInterface
{
    public function parse(string $content);
}
