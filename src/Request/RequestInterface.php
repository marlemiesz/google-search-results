<?php

namespace Marlemiesz\GoogleSearchResult\Request;

use Marlemiesz\GoogleSearchResult\Proxy\ProxyInterface;

interface RequestInterface
{
    /**
     * @return string|null
     */
    public function getLocation(): ?string;

    /**
     * @param string|null $location
     */
    public function setLocation(?string $location): void;

    /**
     * @return string
     */
    public function getDomain(): string;

    /**
     * @param string $domain
     */
    public function setDomain(string $domain): void;

    /**
     * @return string
     */
    public function getQuery(): string;

    /**
     * @param string $query
     */
    public function setQuery(string $query): void;

    /**
     * @return ProxyInterface|null
     */
    public function getProxy(): ?ProxyInterface;

    /**
     * @param ProxyInterface|null $proxy
     */
    public function setProxy(?ProxyInterface $proxy): void;

    /**
     * @param int|null $rank
     * @param string|null $error_message
     * @return void
     */
    public function setResponse(?int $rank, ?string $error_message): void;

    /**
     * @return int
     */
    public function getResponseRank(): ?int;

    /**
     * @return bool
     */
    public function isResponseCorrect(): bool;

    /**
     * @return string|null
     */
    public function getResponseError(): ?string;
}
