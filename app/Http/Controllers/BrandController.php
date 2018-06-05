<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\ApplyRepository;
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
        $brand = Dictionary::$brands['wukong'];
        
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
        $brand = Dictionary::$brands['pocketcat'];
        
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
        $brand = Dictionary::$brands['town'];
        
        return view($this->route . '.' . $brand, [
            'route'     => $this->route,
            'detail'    => $detail,
            'brand'     => $brand
        ]);
    }
    
    /**
     * 加盟申请
     */
    public function apply(Request $request)
    {
        $repository = new ApplyRepository();
        $repository->store();
    }
    
    public function members(Request $request)
    {
        
    }
}