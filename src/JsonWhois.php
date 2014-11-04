<?php
namespace JsonWhois;

use Unirest;

class JsonWhois
{
    var $apiKey;
    var $apiBase;

    public function __construct()
    {
        $this->apiBase = "http://jsonwhois.com/api/v1";
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

            array( 
                "Accept" => "application/json",
                "Authorization" => "Token token='" . $this->apiKey . "'"
            ),

            array(
                "domain" => $domain
            )

        );

        return $response->body; // Parsed body

    }

    public function screenshot($domain)
    {
        if(!$this->apiKey) return array("error" => "No apiKey defined");

        $response = Unirest::get($this->apiBase . "screenshot",

            array( 
                "Accept" => "application/json",
                "Authorization" => "Token token='" . $this->apiKey . "'"
            ),

            array(
                "domain" => $domain
            )

        );

        return $response->body; // Parsed body

    }
}
