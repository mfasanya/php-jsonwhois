<?php
namespace JsonWhois;

use Unirest;

class JsonWhois
{
    var $apiKey;

    public function apiKey($key)
    {
        $this->apiKey = $key;
    }

    public function whois($domain)
    {
        if(!$this->apiKey) return array("error" => "No apiKey defined");

        $response = Unirest::get("http://jsonwhois.com/api/whois",

            array( "Accept" => "application/json" ),

            array(
                "apiKey" => $this->apiKey,
                "domain" => $domain
            )

        );

        return $response->body; // Parsed body

    }
}