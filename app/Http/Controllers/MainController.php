<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected array $data;
    public function home(Request $request)
    {
        $this->data['breadcrumb'] = [
            (object) ['page' => 'Dashboard', 'link' => route('home'), 'icon' => 'icon-display']
        ];
        return view('home', $this->data);
    }
}
