<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public ?string $color;
    
    /**
     * Create a new component instance.
     */
    public function __construct(?string $type)
    {
        if($type === 'warning') {
            $this->color = 'bg-yellow-200 text-amber-600';
        } else if($type === 'success') {
            $this->color = 'bg-green-200 text-green-700';
        } else if($type === 'danger') {
            $this->color = 'bg-red-200 text-red-700';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.badge');
    }
}
