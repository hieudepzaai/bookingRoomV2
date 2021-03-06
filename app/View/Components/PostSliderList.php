<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostSliderList extends Component
{
    public $posts;
    public string $title;
    public string $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($posts , string $title , string $url)
    {
        //
        $this->posts = $posts;
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-slider-list' );
    }
}
