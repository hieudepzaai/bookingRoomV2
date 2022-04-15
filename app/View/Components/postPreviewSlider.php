<?php

namespace App\View\Components;

use Illuminate\View\Component;

class postPreviewSlider extends Component
{
    public $sliders;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
//        $this->sliders = $sliders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-preview-slider');
    }
}
