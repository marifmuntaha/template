<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $title;
    public string $favicon;
    public function __construct($page = null)
    {
        $appname = Setting::content('appname');
        $this->title = $page .' - '. $appname;
        $this->favicon = asset(Setting::content('favicon'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.head');
    }
}
