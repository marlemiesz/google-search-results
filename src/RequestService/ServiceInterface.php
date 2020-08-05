<?php

namespace Marlemiesz\GoogleSearchResult\RequestService;

use Marlemiesz\GoogleSearchResult\Parser\ParserInterface;
use Marlemiesz\GoogleSearchResult\Request\RequestInterface;

interface ServiceInterface
{
    /**
     * @param RequestInterface ...$request
     * @param ParserInterface $parser
     * @return array
     */
    public function execute(ParserInterface $parser, RequestInterface ...$request): array;
}
