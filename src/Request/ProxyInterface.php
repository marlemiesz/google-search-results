<?php

namespace Marlemiesz\GoogleSearchResult\Request;

interface ProxyInterface
{
    /**
     * @return string
     */
    public function getIp(): string;

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void;

    /**
     * @return string
     */
    public function getPort(): string;

    /**
     * @param string $port
     */
    public function setPort(string $port): void;

    /**
     * @return string
     */
    public function getProtocol(): string;

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol): void;

    public function getUrl(): string;
}
