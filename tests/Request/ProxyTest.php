<?php

namespace Marlemiesz\GoogleSearchResult\Tests\Request;

use Marlemiesz\GoogleSearchResult\Request\Proxy;
use Marlemiesz\GoogleSearchResult\Request\ProxyInterface;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{

    public function testGetUrl()
    {
        $proxy = new Proxy('8.8.8.8','8081','sock5');
        $this->assertEquals('sock5://8.8.8.8:8081', $proxy->getUrl(), "Generated url by proxy isn't correct");

        $proxy = new Proxy('8.8.8.8','8081');
        $this->assertEquals('tcp://8.8.8.8:8081', $proxy->getUrl(), "Default protocol in proxy is not tcp");
    }

    public function testInterface()
    {
        $proxy = new Proxy('8.8.8.8','8081','sock5');
        $this->assertInstanceOf(ProxyInterface::class, $proxy, "Proxy is not instance of ProxyInterface");
    }
}
