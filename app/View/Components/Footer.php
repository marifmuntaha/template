<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $appname;
    public function __construct()
    {
        $this->appname = Setting::content('appname');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
