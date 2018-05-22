<?php
namespace App\Repositories;

use App\Endpoints\NewsEndpoint;

class NewsRepository extends Repository
{
    public function init()
    {
        $this->endPoint = new NewsEndpoint();
    }
    
    /**
     * 新闻包含年份
     * 
     * @return array
     */
    public function years()
    {
        return $this->endPoint->years();
    }
    
    /**
     * 下一篇
     * @param int $id
     */
    public function next($id)
    {
        return $this->endPoint->next($id);
    }
    
    /**
     * 上一篇
     * @param int $id
     */
    public function previous($id)
    {
        return $this->endPoint->previous($id);
    }
}