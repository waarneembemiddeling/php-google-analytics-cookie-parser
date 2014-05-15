<?php
/*
* (c) Waarneembemiddeling.nl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Wb\GoogleAnalyticsCookieParser;

class GoogleAnalyticsCookieParser
{
    /**
     * @var string $cookieString
     */
    public function parse($cookieString)
    {
        $result = explode('.', $cookieString);

        if (count($result) == 3) {
            list($version, $depth, $clientId) = $result;
            $timestamp = null;
        } else {
            list($version, $depth, $clientId, $timestamp) = $result;
        }

        return new ParsedCookie($version, $depth, $clientId, $timestamp);
    }
}