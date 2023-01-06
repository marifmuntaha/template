<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $logo;
    public string $logoIcon;

    public object $user;
    public function __construct()
    {
        $this->logo = asset(Setting::content('logo'));
        $this->logoIcon = asset(Setting::content('logoIcon'));
        $this->user = auth()->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
