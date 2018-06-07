<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\CategoriesRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function init()
    {
        $this->repository = new NewsRepository();
        
        $this->route = 'news';
    }
    
    /**
     * 列表
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $year = $request->input('year', 0);
        $categoryId = $request->input('category_id', 0);
        $page = $request->input('page', 1);
        $size = Dictionary::PAGE_SIZE;
        
        $params = [];
        if (!empty($year))
        {
            $params['year'] = $year;
        }
        if (!empty($categoryId))
        {
            $params['category_id'] = $categoryId;
        }
        $params['status'] = 1;
        
        $orderBy = [
            'id' => 'desc',
        ];
        
        $results = $this->repository->list($params, $page, $size, $orderBy);
        
        $repository = new CategoriesRepository();
        $categories = $repository->all(['status' => 1]);
        
        $years = $this->repository->years();
        
        $filters = [
            'year' => !empty($params['year']) ? $params['year'] : 0,
            'category_id' => !empty($params['category_id']) ? $params['category_id'] : 0,
        ];
        
        return view($this->route . '.list', [
            'route' => $this->route,
            'items' => isset($results['list']) ? $results['list'] : [],
            'categories' => $categories['list'],
            'years' => $years,
            'filters' => $filters,
            'pagination' => [
                'route' => $this->route . '.index',
                'page' => $page,
                'size' => $size,
                'total' => isset($results['total']) ? $results['total'] : 0
            ]
        ]);
    }
    
    /**
     * 查看
     *
     * @param int $id
     */
    public function show($id)
    {
        $detail= $this->repository->detail($id);
        
        $next       = $this->repository->next($id);//Next:下一篇
        $previous   = $this->repository->previous($id);//Previous:上一篇
        
        return view($this->route . '.detail', [
            'route'     => $this->route,
            'detail'    => $detail,
            'next'      => $next,
            'previous'  => $previous
        ]);
    }
}