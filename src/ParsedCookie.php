<?php
/*
* (c) Waarneembemiddeling.nl
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/ 

namespace Wb\GoogleAnalyticsCookieParser;

class ParsedCookie
{
    /** @var string */
    private $version;

    /** @var string */
    private $depth;

    /** @var string */
    private $clientId;

    /**
     * @param string $version
     * @param string $depth
     * @param string $clientId
     */
    public function __construct($version, $depth, $clientId)
    {
        $this->version = $version;
        $this->depth = $depth;
        $this->clientId = $clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $depth
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    /**
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}
