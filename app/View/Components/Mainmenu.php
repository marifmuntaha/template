<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Mainmenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $page;
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mainmenu');
    }
}
