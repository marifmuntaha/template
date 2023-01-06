<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $page;
    public string $appname;
    public array $breadcrumb;
    public function __construct($page = null, $breadcrumb = null)
    {
        $this->page = $page;
        $this->appname = Setting::content('appname');
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
