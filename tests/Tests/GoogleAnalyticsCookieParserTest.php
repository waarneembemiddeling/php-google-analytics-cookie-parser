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
    public function testParseWithTimestamp()
    {
        $string = 'GA1.2.230657868.1384941727';

        $parser = new GoogleAnalyticsCookieParser();
        $result = $parser->parse($string);

        $this->assertSame('GA1', $result->getVersion());
        $this->assertSame('2', $result->getDepth());
        $this->assertSame('230657868.1384941727', $result->getClientId());
    }

    public function testParseWithoutTimestamp()
    {
        $string = 'GA1.2.20c7aee4-176d-4926-b6bb-db24b44d9ecb';

        $parser = new GoogleAnalyticsCookieParser();
        $result = $parser->parse($string);

        $this->assertSame('GA1', $result->getVersion());
        $this->assertSame('2', $result->getDepth());
        $this->assertSame('20c7aee4-176d-4926-b6bb-db24b44d9ecb', $result->getClientId());
    }

    public function testInvalidArgument()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        $parser = new GoogleAnalyticsCookieParser();
        $parser->parse('incorrectstring');
    }
}
