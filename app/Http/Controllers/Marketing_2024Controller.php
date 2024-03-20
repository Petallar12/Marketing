<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Marketing_2024;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;




class Marketing_2024Controller extends Controller
{
public function try(){
return view('2024.marketing.try');

}

    public function index(Request $request)
    {
    $MonthInquiries = Marketing_2024::distinct()
        ->whereNotNull('month')
        ->pluck('month');

    $Sourcefilter = Marketing_2024::distinct()
        ->whereNotNull('source')
        ->pluck('source');

    $Leadsfilter  = Marketing_2024::distinct()
        ->whereNotNull('leads')
        ->pluck('leads');

    $Case_officerfilter  = Marketing_2024::distinct()
        ->whereNotNull('case_officer')
        ->pluck('case_officer');

    $Nationalityfilter  = Marketing_2024::distinct()
        ->whereNotNull('nationality')
        ->pluck('nationality');

    $Residencefilter  = Marketing_2024::distinct()
        ->whereNotNull('residence')
        ->pluck('residence');
        
    $Agefilter  = Marketing_2024::distinct()
        ->whereNotNull('age')
        ->pluck('age');
    $EmailFilter  = Marketing_2024::distinct()
        ->whereNotNull('email')
        ->pluck('email');
    $Contactfilter  = Marketing_2024::distinct()
        ->whereNotNull('contact_number')
        ->pluck('contact_number');




    if ($request->ajax()) {
        $month = $request->query('month');
        $source = $request->query('source');
        $leads = $request->query('leads');
        $case_officer = $request->query('case_officer');
        $nationality = $request->query('nationality');
        $residence = $request->query('residence');
        $age = $request->query('age');
        $email = $request->query('email');
        $contact_number = $request->query('contact_number');




            $query = Marketing_2024::query('*');
        
         // Apply filters
         if (!empty($month)) {
            $query->where('month', $month);
        }
        if (!empty($source)) {
            $query->where('source', $source);
        }
        if (!empty($leads)) {
            $query->where('leads', $leads);
        }            
        if (!empty($case_officer)) {
            $query->where('case_officer', $case_officer);
        }
        if (!empty($nationality)) {
            $query->where('nationality', $nationality);
        }
        if (!empty($residence)) {
            $query->where('residence', $residence);
        }
        if (!empty($age)) {
            $query->where('age', $age);
        }
        if (!empty($email)) {
            $query->where('email', $email);
        }
        if (!empty($contact_number)) {
            $query->where('contact_number', $contact_number);
        }
        
        return DataTables::of($query)
        ->addColumn('action', function($row){
            // You can add your action buttons here
            return '<button class="btn btn-primary">Action</button>';
        })
        ->make(true);
}
return view('2024.marketing.index', compact('MonthInquiries', 'Sourcefilter','Leadsfilter','Case_officerfilter','Nationalityfilter','Residencefilter','Agefilter','EmailFilter','Contactfilter'));

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
    public function destroy($id)
    {
        if (!(auth()->user()->role == '1' || auth()->user()->role == '3')) {
            abort(404, 'Cannot Access');
        }

        $marketing_2024 = Marketing_2024::findOrFail($id);

     

        $marketing_2024->delete();

        return response()->json([
            'message' => 'Data Deleted'
        ]);
    }

    public function create()
    {
        if (!(auth()->user()->role == '1' || auth()->user()->role == '3')) {
            abort(404, 'Cannot Access');
        }
        return view('2024.marketing.create');
    }


    // To save The Enter Add Record 2023
    public function store(Request $request)
    {
        $fileName = '';
        $fileName2 = '';
        $fileName3 = '';

        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/images', $fileName);
        }

        if ($request->hasFile('file2')) {
            $fileName2 = $request->file('file2')->getClientOriginalName();
            $request->file('file2')->storeAs('public/attachment_2', $fileName2);
        }
        if ($request->hasFile('file3')) {
            $fileName3 = $request->file('file3')->getClientOriginalName();
            $request->file('file3')->storeAs('public/application_form', $fileName3);
        }



        $marketing_2024 = $request->all();
        $accountsection['attachment'] = $fileName;
        $accountsection['attachment_2'] = $fileName2;
        $accountsection['attachment_3'] = $fileName3;

        Marketing_2024::create($marketing_2024);

        return redirect('2024/marketing/index')->with(['message' => 'Post added successfully!', 'status' => 'success']);
    }



}

