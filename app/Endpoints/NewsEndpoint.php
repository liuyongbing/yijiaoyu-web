<?php

namespace App\Endpoints;

use App\Endpoints\Endpoints;
use App\Facades\ApiClient;

class NewsEndpoint extends Endpoints
{
    public function init()
    {
        $this->api = 'news';
    }
    
    public function years()
    {
        $response = ApiClient::get($this->api . '/years', []);
        
        return $this->response($response);
    }
}
