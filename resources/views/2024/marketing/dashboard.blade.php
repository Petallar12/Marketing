@extends('layouts.app')
<style>
    


    /* size of box of graph */
    iframe {
        width: 200%;
        height: 400px;
    }

    .col {
        margin: 0 auto;
    }

    /*Text inside the boxes */
    .card {
        padding-bottom: 5px;
        color: white;
        background-color: rgb(255, 255, 255, .3);
    }

    strong {
        font-size: 25px;
    }

    /* total numbers of clients as of 2024 (top) */
    .input-field .input {
        width: 12%;
        border: none;
        border-radius: 25px;
        color: #fff;
        padding: 0 0 0 0px;
        background: rgba(255, 255, 255, 0.1);
        outline: none;
        font-size: 45px;
        text-align: center;
        font-weight: bold;
        margin-bottom: 2%;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

</style>
@section('content')
<div class="container-fluid px-4 text-white">



    <!-- ROW FOR CANCELLATION BUFFER CARDS -->
    <header class="row">
        <!-- DISPLAY CARD FOR CANCELLATION BUFFER 1 -->
        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Total Leads</h5>
                </div>
                <div class="card-body">
                    Total Leads: {{$newlives_active}} 
                </div>
            </div>
        </div>

        <!-- DISPLAY CARD FOR CANCELLATION BUFFER 2 -->
        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title"> Headcounts</h5>
                </div>
                <div class="card-body">
                Total Headcounts: {{$total_headcount}}
                </div>
            </div>
        </div>

        <!-- DISPLAY CARD FOR Potential Commission -->
        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Potential Commission</h5>
                </div>
                <div class="card-body">
                    Potential Commission: {{$potential_commission}}
                </div>
            </div>
        </div>
        <!-- DISPLAY CARD FOR CANCELLATION BUFFER 1 -->
        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Total Gross Sales</h5>
                </div>
                <div class="card-body">
                    Total Gross Sales: {{$gross_sale}}
                </div>
            </div>
        </div>

        <!-- DISPLAY CARD FOR CANCELLATION BUFFER 2 -->
        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Total Commission</h5>
                </div>
                <div class="card-body">
                    Commission {{$commission}}
                </div>
            </div>
        </div>

        <!-- DISPLAY CARD FOR CANCELLATION BUFFER 3 -->
        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Closed</h5>
                </div>
                <div class="card-body">
                    Closed Count: {{$closed}}
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Expenditures</h5>
                </div>
                <div class="card-body">
                    Expenditures: Not Yet Known
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-2">
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-header">
                    <h5 class="card-title">Net Income</h5>
                </div>
                <div class="card-body">
                    Net Income: Not Yet Known
                </div>
            </div>
        </div>

        </header>
    
    <header class="row">
        <div class="col-xl-6 col-md-6">
            <!-- TOTAL Premium and Commission per Insurer -->
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-body" style="display: flex; justify-content: space-between;">
                    <h3 class="card-title" style="color: white;">Total Premium and Commission per Insurer 2024</h3>
                </div>
                <div class="card-footer d-flex">
                    <iframe src="/2024/dashboard/lead_distribution" frameborder="1"></iframe>
                </div>
            </div>
        </div>
    
        <div class="col-xl-6 col-md-6">
            <!-- TOTAL Premium and Commission per Insurer -->
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-body" style="display: flex; justify-content: space-between;">
                    <h3 class="card-title" style="color: white;">Total Premium and Commission per Insurer 2024</h3>
                </div>
                <div class="card-footer d-flex">
                    <iframe src="/2024/dashboard/lead_based_headcount" frameborder="1"></iframe>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <!-- TOTAL Premium and Commission per Insurer -->
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-body" style="display: flex; justify-content: space-between;">
                    <h3 class="card-title" style="color: white;">Total Premium and Commission per Insurer 2024</h3>
                </div>
                <div class="card-footer d-flex">
                    <iframe src="/2024/dashboard/website_leads_based_headcount" frameborder="1"></iframe>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <!-- TOTAL Premium and Commission per Insurer -->
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-body" style="display: flex; justify-content: space-between;">
                    <h3 class="card-title" style="color: white;">Contributing Website or Platform</h3>
                </div>
                <div class="card-footer d-flex">
                    <iframe src="/2024/dashboard/contributing_website" frameborder="1"></iframe>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <!-- TOTAL Premium and Commission per Insurer -->
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-body" style="display: flex; justify-content: space-between;">
                    <h3 class="card-title" style="color: white;">Monthly Lead Count</h3>
                </div>
                <div class="card-footer d-flex">
                    <iframe src="/2024/dashboard/monthly_lead_count" frameborder="1"></iframe>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <!-- TOTAL Premium and Commission per Insurer -->
            <div class="card mb-4" style="background-color: rgb(255, 255, 255, .3)">
                <div class="card-body" style="display: flex; justify-content: space-between;">
                    <h3 class="card-title" style="color: white;">Age Population</h3>
                </div>
                <div class="card-footer d-flex">
                    <iframe src="/2024/dashboard/age" frameborder="1"></iframe>
                </div>
            </div>
        </div>
    </header>
    


    

    
    <header class="row mt-3">
        <div class="col-xl-8 col-md-8">
            <div class="card mb-2 h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">BUUUnuuus</h5>
                    <div class="btn-group">
                        <!-- Button group content here -->
                    </div>
                </div>
                <div class="card-body">
                    <!-- Content for card body -->
                    <div id="group-div">
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>         


     
            <!-- Other column content like 0, 1, and "Individual and Group Count" -->
        
            <!-- Column for cards 3 and 4 -->
            <div class="col-xl-2 col-md-2">
                <!-- Card 3 -->
                <div class="card mb-2"> <!-- If you want no space, remove mb-2 class -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">3</h5>
                    </div>
                    <div class="card-body">
                        <!-- Content for card 3 -->
                    </div>
                </div>
        
                <!-- Card 4 -->
                <div class="card mb-2"> 
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">4</h5>
                    </div>
                    <div class="card-body">
                        <!-- Content for card 4 -->
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card mb-2"> 
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">5</h5>
                    </div>
                    <div class="card-body">
                        <!-- Content for card 5 -->
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card"> <!-- No mb-2 class here to remove bottom margin -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">6</h5>
                    </div>
                    <div class="card-body">
                        <!-- Content for card 6 -->
                    </div>
                </div>
            </div>
        
            <!-- Column for card 7 -->
            <div class="col-xl-2 col-md-2">
                <div class="card h-100"> <!-- Make sure the height matches the combined height of 3 and 4 if needed -->
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">7</h5>
                    </div>
                    <div class="card-body">
                        <!-- Content for card 7 -->
                    </div>
                </div>
            </div>
        </div>
        
    </header>

    <div class="container-fluid px-4 text-white">
    <div class="row mt-3">
        <div class="col-12 h-200"> <!-- Use col-12 to span the full width -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">8</h5>
                </div>
                <div class="card-body">
                    <br><br><Br>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
