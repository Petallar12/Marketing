<?php

namespace App\Http\Controllers;
use App\Models\Marketing_2024;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Dashboard_2024Controller extends Controller
{
    public function users()
    {
    if(!(auth()->user()->role == '1' || auth()->user()->role == '2' )) {
            abort(404, 'Cannot Access');
            }
    //NEW LIVES CO //Total Active New Lives
    $newlives_active = Marketing_2024::wherein('leads',['Ad','Organic'])
        ->count(); 
    $total_headcount = Marketing_2024::where('status','SOLD')->sum('insured_headcount');
    
    $potential_commission = Marketing_2024::sum('potential_commission');
    $commission = Marketing_2024::sum('commission');
    $gross_sale = Marketing_2024::sum('premium_annual');
    $closed = Marketing_2024::
            where('status','SOLD')
            ->sum('insured_headcount');
    // $expenditures
    // $net_income = $expenditures -$commission;


        
    return view('2024.marketing.dashboard',
    compact('newlives_active','total_headcount','potential_commission','commission', 'gross_sale','closed'));
    }
}
