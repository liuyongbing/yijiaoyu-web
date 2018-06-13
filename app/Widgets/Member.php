<?php
namespace App\Widgets;

use App\Repositories\MembersRepository;
use App\Constants\Dictionary;

class Member
{
    /**
     * 人物品牌 - 列表
     * 
     * @param string $brand
     * @param string $teamType
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public static function list($brand, $teamType)
    {
        $brandValues = Dictionary::$brandValues;
        $brandId = isset($brandValues[$brand]) ? $brandValues[$brand] : '';
        
        $teamTypes = Dictionary::$teamTypesValues;
        $teamType = isset($teamTypes[$teamType]) ? $teamTypes[$teamType] : '';
        
        $params = [
            'status' => 1
        ];
        if (!empty($brandId))
        {
            $params['brand_id'] = $brandId;
        }
        if (!empty($teamType))
        {
            $params['team_type'] = $teamType;
        }
        
        $repository = new MembersRepository();
        $results = $repository->list($params, 1, Dictionary::PAGE_SIZE_7, 'sort');
        
        $total = isset($results['total']) ? $results['total'] : 0;
        $loadMore = Dictionary::PAGE_SIZE_7 < $total ? true: false;
        
        return view('widgets.member', [
            'members' => isset($results['list']) ? $results['list'] : [],
            'brandId' => $brandId,
            'teamType' => $teamType,
            'pageSize' => Dictionary::PAGE_SIZE_7 + 1,
            'loadMore' => $loadMore
        ]);
    }
    
    /**
     * 人物品牌 - 所有
     * 
     * @param string $brand
     * @param string $teamType
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public static function all($brand, $teamType)
    {
        $brandValues = Dictionary::$brandValues;
        $brandId = isset($brandValues[$brand]) ? $brandValues[$brand] : '';
        
        $teamTypes = Dictionary::$teamTypesValues;
        $teamType = isset($teamTypes[$teamType]) ? $teamTypes[$teamType] : '';
        
        $params = [
            'status' => 1
        ];
        if (!empty($brandId))
        {
            $params['brand_id'] = $brandId;
        }
        if (!empty($teamType))
        {
            $params['team_type'] = $teamType;
        }
        
        $repository = new MembersRepository();
        $results = $repository->all($params, 'sort');
        
        return view('widgets.member', [
            'members' => isset($results['list']) ? $results['list'] : [],
            'brandId' => $brandId,
            'teamType' => $teamType,
            'pageSize' => Dictionary::PAGE_SIZE_7 + 1,
            'loadMore' => false
        ]);
    }
}