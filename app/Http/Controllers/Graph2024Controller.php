<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketing_2024;
use Illuminate\Support\Facades\DB;

class Graph2024Controller extends Controller
{
    public function lead_distribution()
    {
        // Get count per lead type
        $lead_distribution = Marketing_2024::select(DB::raw("count(leads) as count"), 'leads')
        ->groupBy('leads')
        ->havingRaw('count(leads)  > 0')
        ->get('count');


        $array = Marketing_2024::select('leads')
        ->groupBy('leads')
        //to remove the 0 in y axis
        ->havingRaw('COUNT(leads) > 0')
        ->pluck('leads')
        ->toArray();
    
        return view('/2024/2024graph/lead_distribution', compact('lead_distribution', 'array'));
    }
    

     public function lead_based_headcount()
        {        
        $lead_based_headcount  = Marketing_2024::select(DB::raw("count(insured_headcount) as count"), 'insured_headcount')
        ->where('status','SOLD')
        ->groupBy('insured_headcount')
        ->havingRaw('count(insured_headcount)  > 0')
        ->get('count');


        $array = Marketing_2024::select('leads')
        ->where('status','SOLD')
        ->groupBy('leads')
        //to remove the 0 in y axis
        ->havingRaw('COUNT(leads) > 0')
        ->pluck('leads')
        ->toArray();
    
            
            return view('/2024/2024graph/lead_based_headcount', compact('lead_based_headcount','array'));
        }
        
        public function website_leads_based_headcount()
        {        
        $website_leads_based_headcount = Marketing_2024::select(DB::raw("count(source) as count"), 'source')
        ->where('status','SOLD')
        ->groupBy('source')
        ->havingRaw('count(source)  > 0')
        ->get('count');


        $array = Marketing_2024::select('source')
        ->groupBy('source')
        ->where('status','SOLD')
        //to remove the 0 in y axis
        ->havingRaw('COUNT(source) > 0')
        ->pluck('source')
        ->toArray();
            return view('/2024/2024graph/website_leads_based_headcount', compact('website_leads_based_headcount','array'));
        }
                
        public function contributing_website()
        {        
        $contributing_website = Marketing_2024::select(DB::raw("count(source) as count"), 'source')
            ->groupBy('source')
            ->havingRaw('count(source)  > 0')
            ->get('count');

    
            $array = Marketing_2024::select('source')
            ->groupBy('source')
            //to remove the 0 in y axis
            ->havingRaw('COUNT(source) > 0')
            ->pluck('source')
            ->toArray();
            return view('/2024/2024graph/contributing_website', compact('contributing_website','array'));
        }

        public function age()
        {        
        $age = Marketing_2024::select(DB::raw("count(age) as count"), 'age')
            ->groupBy('age')
            ->havingRaw('count(age)  > 0')
            ->get('count');

    
            $array = Marketing_2024::select('age')
            ->groupBy('age')
            //to remove the 0 in y axis
            ->havingRaw('COUNT(age) > 0')
            ->pluck('age')
            ->toArray();
            return view('/2024/2024graph/age', compact('age','array'));
        }

        


        public function monthly_lead_count() {
            $monthly_lead_count = Marketing_2024::select(DB::raw("COUNT(*) as count"))

                ->whereYear("date", '2024')
                ->groupBy(DB::raw("Month(date)"))
                ->pluck('count');
        
            $totalmonthly_lead_count = Marketing_2024::
                whereYear("date", '2024')
                ->count();
        
            return view('/2024/2024graph/monthly_lead_count', compact('monthly_lead_count', 'totalmonthly_lead_count'));
        }
        
        
    }
