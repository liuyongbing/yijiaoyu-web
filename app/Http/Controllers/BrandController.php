<?php

namespace App\Http\Controllers;

class BrandController extends Controller
{
    public function init()
    {
        parent::init();
        
        $this->route = 'brand';
    }
}