<?php

namespace App\Http\Controllers;

use App\Constants\Dictionary;
use App\Repositories\MembersRepository;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function init()
    {
        $this->repository = new MembersRepository();
        
        $this->route = 'members';
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
        
        $params = [];
        $orderBy = [
            'brand_id' => 'asc',
            'team_type' => 'asc',
            'sort' => 'asc',
        ];
        $results = $this->repository->list($params, $page, $size, $orderBy);
return $results;
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
}