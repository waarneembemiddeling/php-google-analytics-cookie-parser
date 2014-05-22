<?php
/*
* (c) Waarneembemiddeling.nl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Wb\GoogleAnalyticsCookieParser;

use Wb\GoogleAnalyticsCookieParser\Exception\InvalidArgumentException;

class GoogleAnalyticsCookieParser
{
    /**
     * @var string $cookieString
     */
    public function parse($cookieString)
    {
        $result = explode('.', $cookieString);

        $count = count($result);
        if ($count == 3) {
            list($version, $depth, $clientId) = $result;
            $timestamp = null;
        } else if ($count == 4) {
            list($version, $depth, $clientId, $timestamp) = $result;
        } else {
            throw new InvalidArgumentException(sprintf("Problem with parsing cookie string: %s Example of a correct
                string: GA1.2.20c7aee4-176d-4926-b6bb-db24b44d9ecb", $cookieString));
        }

        return new ParsedCookie($version, $depth, $clientId, $timestamp);
    }
}