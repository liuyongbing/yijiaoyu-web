<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function init()
    {
        parent::init();
        
        $this->route = 'home';
    }
}