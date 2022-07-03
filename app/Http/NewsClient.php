<?php

namespace App\Http;

use GuzzleHttp\Client;

class NewsClient
{
    private $client;
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://newsapi.org/v2/'
        ]);
    }
}
