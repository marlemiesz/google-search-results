<?php

namespace Marlemiesz\GoogleSearchResult\Tests\Request;

use Marlemiesz\GoogleSearchResult\Constants\GoogleDomain;
use Marlemiesz\GoogleSearchResult\Proxy\Proxy;
use Marlemiesz\GoogleSearchResult\Request\Request;
use Marlemiesz\GoogleSearchResult\Request\RequestInterface;
use Marlemiesz\GoogleSearchResult\Response\Response;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testInterface()
    {
        $proxy = new Proxy('8.8.8.8', '8081', 'sock5');

        $request = new Request('google.pl', new Response(), GoogleDomain::googlepl, $proxy, 'Warsaw');

        $this->assertInstanceOf(RequestInterface::class, $request, "Request is not instance of RequestInterface");
    }

    public function testRequestResponse()
    {
        $request = new Request('world', new Response());

        $request->setResponse(4);

        $this->assertEquals(4, $request->getResponseRank());

        $request->setResponse(101);

        $this->assertEquals(null, $request->getResponseRank());
        $this->assertIsString($request->getResponseError());


        $error_message = 'Unable to find rank';
        $request->setResponse(null, $error_message);

        $this->assertEquals(null, $request->getResponseRank());
        $this->assertEquals($error_message, $request->getResponseError());

    }
}
