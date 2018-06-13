<?php

namespace App\Endpoints;

use App\Endpoints\Endpoints;
use App\Facades\ApiClient;

class MembersEndpoint extends Endpoints
{
    public function init()
    {
        $this->api = 'members';
    }
    
    /**
     * 列表 - 所有
     *
     * @param array $params
     * @return array
     */
    public function all($params)
    {
        $response = ApiClient::get($this->api . '/all', $params);
        
        return $this->response($response);
    }
    
}
