<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $subtitle;
    public $boldsubtitle;
    public $link;
    public function __construct($subtitle = 'text', $title = 'text', $boldsubtitle = 'text',$link)    
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->boldsubtitle = $boldsubtitle;
        $this->link = $link;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.banners');
    }
}
