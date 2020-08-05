<?php


namespace Marlemiesz\GoogleSearchResult\RequestService;

use Marlemiesz\GoogleSearchResult\Parser\ParserInterface;
use Marlemiesz\GoogleSearchResult\Request\RequestInterface;

class AsyncService implements ServiceInterface
{
    public function execute(ParserInterface $parser, RequestInterface ...$request): array
    {
    }
}
