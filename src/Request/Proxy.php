<?php


namespace Marlemiesz\GoogleSearchResult\Request;


class Proxy implements ProxyInterface
{
    private string $ip;
    private string $port;
    private string $protocol;

    /**
     * Proxy constructor.
     * @param string $ip
     * @param string $port
     * @param string $protocol
     */
    public function __construct(string $ip, string $port, string $protocol = 'tcp')
    {
        $this->ip = $ip;
        $this->port = $port;
        $this->protocol = $protocol;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void
    {
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort(string $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol(string $protocol): void
    {
        $this->protocol = $protocol;
    }

    public function getUrl(): string
    {
        return sprintf("%s://%s:%s",$this->getProtocol(), $this->getIp(), $this->getPort());
    }
}
