<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeadingSubheading extends Component
{
    /**
     * Create a new component instance.
     */
    public string $mainClass;
    public string $headingClass;
    public string $subheadingClass;
    public string $heading;
    public string $subheading;

    public function __construct(string $mainClass = '', string $headingClass = '', string $subheadingClass = '', string $heading = '', string $subheading = '')
    {
        $this->heading = $heading;
        $this->subheading = $subheading;
        $this->mainClass = $mainClass;
        $this->headingClass = $headingClass;
        $this->subheadingClass = $subheadingClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading-subheading');
    }
}
