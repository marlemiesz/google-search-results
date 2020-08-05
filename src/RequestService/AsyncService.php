<?php


namespace Marlemiesz\GoogleSearchResult\RequestService;

use Marlemiesz\GoogleSearchResult\Request\RequestInterface;

class AsyncService
{
    /**
     * @var RequestInterface[]
     */
    private array $requests;

    /**
     * AsyncService constructor.
     * @param RequestInterface ...$requests
     */
    public function __construct(RequestInterface ...$requests)
    {
        $this->requests = $requests;
    }
}
