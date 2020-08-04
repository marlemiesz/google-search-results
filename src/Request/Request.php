<?php


namespace Marlemiesz\GoogleSearchResult\Request;


class Request implements RequestInterface
{
    private string $query;
    private string $domain;
    private ?string $location;
    /**
     * @var ?ProxyInterface
     */
    private ?ProxyInterface $proxy;

    /**
     * Request constructor.
     * @param string $query
     * @param string $domain
     * @param ?ProxyInterface $proxy
     * @param string|null $location
     */
    public function __construct(string $query, string $domain = 'google.com', ?ProxyInterface $proxy, ?string $location  = null)
    {

        $this->query = $query;
        $this->domain = $domain;
        $this->location = $location;
        $this->proxy = $proxy;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string|null $location
     */
    public function setLocation(?string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery(string $query): void
    {
        $this->query = $query;
    }

    /**
     * @return ProxyInterface|null
     */
    public function getProxy(): ?ProxyInterface
    {
        return $this->proxy;
    }

    /**
     * @param ProxyInterface|null $proxy
     */
    public function setProxy(?ProxyInterface $proxy): void
    {
        $this->proxy = $proxy;
    }
}
