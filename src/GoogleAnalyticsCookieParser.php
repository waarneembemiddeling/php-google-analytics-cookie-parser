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
    public function parse($cookieString)
    {
        list($version, $depth, $clientId, $timestamp) = explode('.', $cookieString);

        return new ParsedCookie($version, $depth, $clientId, $timestamp);
    }
}
