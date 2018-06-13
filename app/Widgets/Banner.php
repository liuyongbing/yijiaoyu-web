<?php
namespace App\Widgets;

use App\Repositories\BannerRepository;

class Banner
{
    /**
     * 人物品牌 - 列表
     * 
     * @param string $brand
     * @param string $teamType
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public static function list($position)
    {
        switch ($position)
        {
            case 'about':
                $positionId = 2;
                break;
            case 'home':
                $positionId = 1;
                break;
            case 'pocketcat':
                $positionId = 4;
                break;
            case 'town':
                $positionId = 5;
                break;
            case 'wukong':
                $positionId = 3;
                break;
            default:
                $positionId = 2;
                break;
        }
        $params = [
            'position_id' => $positionId,
            'status' => 1
        ];
        
        $repository = new BannerRepository();
        $results = $repository->all($params);
        
        return view('widgets.banner', [
            'banners' => isset($results['list']) ? $results['list'] : [],
        ]);
    }
}