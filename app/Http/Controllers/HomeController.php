<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;

class HomeController extends Controller
{
    public function init()
    {
        $this->repository = new NewsRepository();
        
        $this->route = 'home';
    }
}