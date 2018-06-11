<?php
namespace App\Widgets;

use App\Repositories\SectionRepository;

class Section
{
    public static function contents($sectionCode)
    {
        $repository = new SectionRepository();
        $section = $repository->detail(1);
        
        return view('widgets.section', [
            'content' => str_replace('&nbsp;', '', $section['content'])
        ]);
    }
}