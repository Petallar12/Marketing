<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\Marketing_2024;


class Marketing_2024Controller extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Marketing_2024::query();
           
        
            return DataTables::of($query)->make(true);
}
    return view('2024.marketing.index');

}
    //This is for view of Client
    public function show($id)
    {
        // if(!(auth()->user()->role == '1' || auth()->user()->role == '3' )) {
        //     abort(404, 'Cannot Access');
        // }
        $marketing_2024 = Marketing_2024::find($id);
        return view('2024.marketing.show')->with('marketing_2024', $marketing_2024);
    }



}

