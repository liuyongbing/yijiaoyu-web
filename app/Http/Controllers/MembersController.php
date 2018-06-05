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
        $brandId = $request->input('brand_id', '');
        $teamType = $request->input('team_type', '');
        $page = $request->input('page', 1);
        $size = $request->input('page_size', Dictionary::PAGE_SIZE_7);
        
        $params = ['status' => 1];
        if (!empty($brandId))
        {
            $params['brand_id'] = $brandId;
        }
        if (!empty($teamType))
        {
            $params['team_type'] = $teamType;
        }
        
        $orderBy = [
            'sort' => 'asc',
        ];
        $results = $this->repository->list($params, $page, $size, $orderBy);
        
        $total = isset($results['total']) ? $results['total'] : 0;
        $loadMore = ($size * $page) < $total ? true: false;
        
        $response = [
            'items' => isset($results['list']) ? $results['list'] : [],
            'loadmore' => $loadMore
        ];
        
        return $response;
        return view($this->route . '.list', [
            'route' => $this->route,
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