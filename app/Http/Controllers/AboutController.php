<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function init()
    {
        parent::init();
        
        $this->route = 'about';
    }
}