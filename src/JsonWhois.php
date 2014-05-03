<?php
namespace JsonWhois;

use Unirest;

class JsonWhois
{
    var $apiKey;
    var $apiBase;

    public function __construct()
    {
        $this->apiBase = "http://jsonwhois.com/api/";
        return;
    }

    public function apiKey($key)
    {
        $this->apiKey = $key;
    }

    public function whois($domain)
    {
        if(!$this->apiKey) return array("error" => "No apiKey defined");

        $response = Unirest::get($this->apiBase . "whois",

            array( "Accept" => "application/json" ),

            array(
                "apiKey" => $this->apiKey,
                "domain" => $domain
            )

        );

        return $response->body; // Parsed body

    }

    public function screenshot($domain)
    {
        if(!$this->apiKey) return array("error" => "No apiKey defined");

        $response = Unirest::get($this->apiBase . "screenshot",

            array( "Accept" => "application/json" ),

            array(
                "apiKey" => $this->apiKey,
                "domain" => $domain
            )

        );

        return $response->body; // Parsed body

    }
}