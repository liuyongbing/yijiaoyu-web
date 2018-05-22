<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\Repository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public $repository;
    public $route;
    
    public function __construct()
    {
        $this->init();
        
        View::share([
            'STATIC_VERSION' => '?v=' . env('APP_STATIC_VERSION', date('Ymd')),
        ]);
    }
    
    public function init()
    {
        $this->repository = new Repository();
        
        $this->route = '';
    }
    
    /**
     * 列表
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $size = Dictionary::PAGE_SIZE;
        
        $results = $this->repository->list([], $page, $size);
        
        return view($this->route . '.list', [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : [],
            'filters' => [],
            'pagination' => [
                'route' => $this->route . '.index',
                'page' => $page,
                'size' => $size,
                'total' => isset($results['total']) ? $results['total'] : 0
            ]
        ]);
    }
    
    /**
     * 修改 put
     *
     * @param Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        return redirect()->route($this->route . '.index');
    }
    
    /**
     * 修改 view
     *
     * @param int $id
     */
    public function edit(Request $request, $id)
    {
        return redirect()->route($this->route . '.index');
    }
    
    /**
     * 新增
     *
     * @param Request $request
     */
    public function create(Request $request)
    {
        return redirect()->route($this->route . '.index');
    }
    
    /**
     * 新增 post
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        return redirect()->route($this->route . '.index');
    }
    
    /**
     * 附件上传
     *
     * @param Request $request
     * @return mixed
     */
    public function upload(Request $request)
    {
        return redirect()->route($this->route . '.index');
    }
    
    /**
     * 查看
     *
     * @param int $id
     */
    public function show($id)
    {
        $detail= $this->repository->detail($id);
        
        return view($this->route . '.detail', [
            'route' => $this->route,
            'detail' => $detail
        ]);
    }
    
    public function response($response)
    {
        return $response;
    }
}
