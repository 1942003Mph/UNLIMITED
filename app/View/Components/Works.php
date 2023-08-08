<?php

namespace App\View\Components;

use Closure;
use App\Models\Work;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Works extends Component
{
    public $works ;
    public $count ;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $works =  $this->works = work::latest('id')->paginate(2);
        $count = 0 ;
        return view('components.works' , compact('works' , 'count'));
    }
}
