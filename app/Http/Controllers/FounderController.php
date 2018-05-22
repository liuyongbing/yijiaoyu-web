<?php

namespace App\Http\Controllers;

class FounderController extends Controller
{
    public function init()
    {
        parent::init();
        
        $this->route = 'founder';
    }
}