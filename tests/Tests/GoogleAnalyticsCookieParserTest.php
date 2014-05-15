<?php
/*
* (c) Waarneembemiddeling.nl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/ 

namespace Wb\GoogleAnalyticsCookieParser\Tests;

use Wb\GoogleAnalyticsCookieParser\GoogleAnalyticsCookieParser;

class GoogleAnalyticsCookieParserTest extends \PHPUnit_Framework_TestCase
{
    public function testParse()
    {
        $string = 'GA1.2.230657868.1384941727';

        $parser = new GoogleAnalyticsCookieParser();
        $result = $parser->parse($string);

        $this->assertSame('GA1', $result->getVersion());
        $this->assertSame('2', $result->getDepth());
        $this->assertSame('230657868', $result->getClientId());
        $this->assertSame('1384941727', $result->getTimestamp());

    }
}
