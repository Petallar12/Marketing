<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_2024Controller extends Controller
{
    public function users()
    {
        if(!(auth()->user()->role == '1' || auth()->user()->role == '2' )) {
            abort(404, 'Cannot Access');
            }
    return view('2024.marketing.dashboard');
}
}