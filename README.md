php-google-analytics-cookie-parser
==================================

[![Build Status](https://travis-ci.org/waarneembemiddeling/php-google-analytics-cookie-parser.png?branch=master)](https://travis-ci.org/waarneembemiddeling/php-google-analytics-cookie-parser)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/waarneembemiddeling/php-google-analytics-cookie-parser/badges/quality-score.png?s=690ba3465d629f9876678af9ae4a41a346c994ab)](https://scrutinizer-ci.com/g/waarneembemiddeling/php-google-analytics-cookie-parser/)


Parses the _ga analytics.js cookie to a ParsedCookie result which includes version, depth, client id and timestamp.

Usage
-------------
```
use Wb\GoogleAnalyticsCookieParser\GoogleAnalyticsCookieParser;

$string = 'GA1.2.230657868.1384941727';

$parser = new GoogleAnalyticsCookieParser();
$result = $parser->parse($string);

// Available properties
$result->getVersion(); // Output: GA1
$result->getDepth(); // Output: 2
$result->getClientId(); // Output: 230657868.1384941727
```

Acknowledgements
----------------
* Thanks to Matt Clarke for his research on the analytics.js/_ga cookie format: https://plus.google.com/110147996971766876369/posts/Mz1ksPoBGHx
