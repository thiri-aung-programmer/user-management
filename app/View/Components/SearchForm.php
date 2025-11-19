<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function test(){
        return "Something";
    }
    public function __construct(public string $action='/search',public string $method="GET")
                                    // default ထည့်ထားတာ 
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search-form');
    }
}
