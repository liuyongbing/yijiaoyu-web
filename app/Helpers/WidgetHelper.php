<?php
namespace App\Helpers;

use App\Repositories\BannerRepository;

class WidgetHelper
{
    public static function banner($position)
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
        $results = $repository->list($params);
        
        return view('include.banner', [
            'banners' => isset($results['list']) ? $results['list'] : [],
        ]);
    }
}