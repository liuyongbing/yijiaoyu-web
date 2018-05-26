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
        
        return view($this->route . '.wukong', [
            'route'     => $this->route,
            'detail'    => $detail
        ]);
    }
    
    /**
     * 口袋猫
     */
    public function pocketcat()
    {
        $detail = [];
        
        return view($this->route . '.pocketcat', [
            'route'     => $this->route,
            'detail'    => $detail
        ]);
    }
    
    /**
     * 童画镇
     */
    public function town()
    {
        $detail = [];
        
        return view($this->route . '.town', [
                'route'     => $this->route,
                'detail'    => $detail
        ]);
    }
}