<?php


namespace Marlemiesz\GoogleSearchResult;

use Marlemiesz\GoogleSearchResult\Request\RequestInterface;

class Client
{
    /**
     * @var RequestInterface[]
     */
    protected array $requests = [];

    /**
     * Client constructor.
     * @param RequestInterface ...$requests
     */
    public function __construct(RequestInterface ...$requests)
    {
        $this->requests = $requests;
    }

    /**
     * @param RequestInterface ...$requests
     */
    public function addRequests(RequestInterface ...$requests)
    {
        $this->requests += $requests;
    }

    /**
     * @param RequestInterface $request
     */
    public function addRequest(RequestInterface $request)
    {
        $this->request[] = $request;
    }

    public function execute(): void
    {
    }
}
