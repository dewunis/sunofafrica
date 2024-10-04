<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestActu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $text,
        public ?string $title,
        public ?string $url,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest-actu');
    }
}
