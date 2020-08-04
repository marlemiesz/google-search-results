<?php

namespace Marlemiesz\GoogleSearchResult\Tests\Request;

use Marlemiesz\GoogleSearchResult\Request\Proxy;
use Marlemiesz\GoogleSearchResult\Request\Request;
use Marlemiesz\GoogleSearchResult\Request\RequestInterface;
use Marlemiesz\GoogleSearchResult\Tests\Constants\GoogleDomain;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testInterface()
    {
        $proxy = new Proxy('8.8.8.8','8081','sock5');

        $request = new Request('google.pl', GoogleDomain::googlepl, $proxy, 'Warsaw');

        $this->assertInstanceOf(RequestInterface::class, $request, "Request is not instance of RequestInterface");
    }
}
