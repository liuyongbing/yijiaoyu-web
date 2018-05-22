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
    
    /**
     * 新闻包含年份
     *
     * @return array
     */
    public function years()
    {
        $response = ApiClient::get($this->api . '/years', []);
        
        return $this->response($response);
    }
    
    /**
     * 下一篇
     * @param int $id
     */
    public function next($id)
    {
        $response = ApiClient::get($this->api . '/' . $id . '/next', []);
        
        return $this->response($response);
    }
    
    /**
     * 上一篇
     * @param int $id
     */
    public function previous($id)
    {
        $response = ApiClient::get($this->api . '/' . $id . '/previous', []);
        
        return $this->response($response);
    }
}
