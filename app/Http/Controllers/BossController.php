<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;

class BossController extends Controller
{
    public function init()
    {
        $this->repository = new NewsRepository();
        
        $this->route = 'boss';
    }
}