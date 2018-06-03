<?php

namespace App\Http\Controllers;

use App\Repositories\ApplyRepository;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function init()
    {
        $this->repository = new ApplyRepository();
        
        $this->route = 'apply';
    }
    
    /**
     * 新增 post
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $data = $request->input('Apply');
        
        $response = $this->repository->store($data);
        return $response;
    }
}