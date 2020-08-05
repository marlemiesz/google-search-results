<?php


namespace Marlemiesz\GoogleSearchResult\Request;

use Marlemiesz\GoogleSearchResult\Proxy\ProxyInterface;
use Marlemiesz\GoogleSearchResult\Response\ResponseInterface;

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
     * @var ResponseInterface
     */
    private ResponseInterface $response;

    /**
     * Request constructor.
     * @param string $query
     * @param ResponseInterface $response
     * @param string $domain
     * @param ?ProxyInterface $proxy
     * @param string|null $location
     */
    public function __construct(string $query, ResponseInterface $response, string $domain = 'google.com', ?ProxyInterface $proxy = null, ?string $location = null)
    {
        $this->query = $query;
        $this->domain = $domain;
        $this->location = $location;
        $this->proxy = $proxy;
        $this->response = $response;
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

    /**
     * @param int|null $rank
     * @param string|null $error_message
     * @return void
     */
    public function setResponse(?int $rank, ?string $error_message = null): void
    {
        $this->response->setRank($rank, $error_message);
    }

    /**
     * @return int
     */
    public function getResponseRank(): ?int
    {
        return $this->response->getRank();
    }

    /**
     * @return bool
     */
    public function isResponseCorrect(): bool
    {
        return $this->response->getErrorMessage() !== null;
    }

    /**
     * @return string|null
     */
    public function getResponseError(): ?string
    {
        return $this->response->getErrorMessage();
    }
}
