<?php
namespace App\Helpers\Widgets;

use App\Repositories\MembersRepository;
use App\Constants\Dictionary;

trait Member
{
    public static function members($brand, $teamType)
    {
        $brandValues = Dictionary::$brandValues;
        $brandId = isset($brandValues[$brand]) ? $brandValues[$brand] : '';
        
        $teamTypes = Dictionary::$teamTypesValues;
        $teamType = isset($teamTypes[$brand]) ? $teamTypes[$brand] : '';
        
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
        $results = $repository->list($params, 1, 7, 'sort');
        
        $total = isset($results['total']) ? $results['total'] : 0;
        $loadMore = Dictionary::PAGE_SIZE_7 < $total ? true: false;
        
        return view('widgets.member', [
            'members' => isset($results['list']) ? $results['list'] : [],
            'loadMore' => $loadMore
        ]);
    }
}