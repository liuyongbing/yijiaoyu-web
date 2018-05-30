<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function init()
    {
        parent::init();
        
        $this->route = 'brand';
    }
    
    /**
     * 齐天大圣
     */
    public function wukong()
    {
        $detail = [];
        $brand = 'wukong';
        
        return view($this->route . '.' . $brand, [
            'route'     => $this->route,
            'detail'    => $detail,
            'brand'     => $brand
        ]);
    }
    
    /**
     * 口袋猫
     */
    public function pocketcat()
    {
        $detail = [];
        $brand = 'pocketcat';
        
        return view($this->route . '.' . $brand, [
            'route'     => $this->route,
            'detail'    => $detail,
            'brand'     => $brand
        ]);
    }
    
    /**
     * 童画镇
     */
    public function town()
    {
        $detail = [];
        $brand = 'town';
        
        return view($this->route . '.' . $brand, [
            'route'     => $this->route,
            'detail'    => $detail,
            'brand'     => $brand
        ]);
    }
}