@extends('layouts.app2')

@section('content')

<style>
    label{
        font-weight: bold;
        font-size:14px;
    }
    h1{
        margin:5px;
        /* color:black; */
         font-weight:bold;
         text-align:center;
    }
    

    .form-control{
        /* width:90%; */
        margin-bottom:8px;
        font-size:12px;
    }
</style>

<div class="container-fluid mt-2 px-4 text-white" style="background-color: rgb(255, 255, 255, .5);
width: 97%;
border-radius: 10px;
justify-content: center;
margin: 0 auto;
padding:10px;
box-shadow: 5px 10px  30px #888888;">

    <div class="button">

    
    <div class="card-body">
            <form action="{{ url('2024/marketing') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <H1>Create Record for Marketing 2024</H1>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" class="form-control" required placeholder="YYYY/MM/DD">
                        </div>
                        <div class="form-group">
                            <label for="source">Source:</label>
                            <input type="text" id="source" name="source" class="form-control" required placeholder="Enter Source">
                        </div>
                        <div class="form-group">
                            <label for="case_officer">Case Officer:</label>
                            <input type="text" id="case_officer" name="case_officer" class="form-control" required placeholder="Enter Case Officer">
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality:</label>
                            <input type="text" id="nationality" name="nationality" class="form-control" required placeholder="Enter Nationality">
                        </div>
                        <div class="form-group">
                            <label for="residence">Residence:</label>
                            <input type="text" id="residence" name="residence" class="form-control" required placeholder="Enter Residence">
                        </div>
                        <div class="form-group">
                            <label for="contact_number">Contact Number:</label>
                            <input type="text" id="contact_number" name="contact_number" class="form-control" required placeholder="Enter Contact Number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="product_inquired">Product Inquired:</label>
                            <input type="text" id="product_inquired" name="product_inquired" class="form-control" required placeholder="Enter Product Inquired">
                        </div>
                        <div class="form-group">
                            <label for="product_offered">Product Offered:</label>
                            <input type="text" id="product_offered" name="product_offered" class="form-control" required placeholder="Enter Product Offered">
                        </div>
                        <div class="form-group">
                            <label for="tat">TAT:</label>
                            <input type="text" id="tat" name="tat" class="form-control" required placeholder="Enter TAT">
                        </div>
                        <div class="form-group">
                            <label for="dob">DOB:</label>
                            <input type="text" id="dob" name="dob" class="form-control" required placeholder="Enter DOB">
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="text" id="age" name="age" class="form-control" required placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" id="status" name="status" class="form-control" required placeholder="Enter Status">
                        </div>
                        
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="month">Month:</label>
                            <input type="text" id="month" name="month" class="form-control" required placeholder="Enter Month">
                        </div>
                        <div class="form-group">
                            <label for="leads">Leads:</label>
                            <input type="text" id="leads" name="leads" class="form-control" required placeholder="Enter Leads">
                        </div>
                        <div class="form-group">
                            <label for="date_assigned">Date Assigned:</label>
                            <input type="date" id="date_assigned" name="date_assigned" class="form-control" required placeholder="yyyy/mm/dd">
                        </div>
                        
                        <div class="form-group">
                            <label for="number_dependent">Number of Dependents:</label>
                            <input type="text" id="number_dependent" name="number_dependent" class="form-control" required placeholder="Enter Number of Dependent">
                        </div>
                        <div class="form-group">
                            <label for="inquire_dependent">Inquire Also for Independent:</label>
                            <input type="text" id="inquire_dependent" name="inquire_dependent" class="form-control" required placeholder="Enter Inquire Also for Independent">
                        </div>
                        
                        <div class="form-group">
                            <label for="quoted_premium">Quoted Premium:</label>
                            <input type="text" id="quoted_premium" name="status" class="form-control" required placeholder="Enter Quoted Premium">
                        </div>
                        <div class="form-group">
                            <label for="potential_commission">Potential Commission:</label>
                            <input type="text" id="potential_commission" name="potential_commission" class="form-control" required placeholder="Enter Potential Premium">
                        </div>
                        <div class="form-group">
                            <label for="commission_percentage">Commission Percentage:</label>
                            <input type="text" id="commission_percentage" name="commission_percentage" class="form-control" required placeholder="Enter Commission Percentage">
                        </div>
                        <div class="form-group">
                            <label for="commission">Commission:</label>
                            <input type="text" id="commission" name="commission" class="form-control" required placeholder="Enter Commission">
                        </div>
                        <div class="form-group">
                            <label for="insured_headcount">Insured Headcount:</label>
                            <input type="text" id="insured_headcount" name="insured_headcount" class="form-control" required placeholder="Enter Insured Headcounts">
                        </div>
                        <div class="form-group">
                            <label for="placement_date">Placement Date:</label>
                            <input type="date" id="placement_date" name="placement_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="product_sold_offered">Product Sold Offered:</label>
                            <input type="text" id="product_sold_offered" name="product_sold_offered" class="form-control" required placeholder="Enter Product Sold Offered">
                        </div>
                        <div class="form-group">
                            <label for="premium_annual">Premium Annual:</label>
                            <input type="text" id="premium_annual" name="status" class="form-control" required placeholder="Enter Premium Annual">
                        </div>                       
                        <div class="form-group">
                            <label for="reason">Reason:</label>
                            <textarea id="reason" name="reason" class="form-control" required placeholder="Enter Reason"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="other_message">Other Message:</label>
                            <textarea id="other_message" name="other_message" class="form-control" required placeholder="Enter Other Message"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="remarks">Remarks:</label>
                            <textarea id="remarks" name="remarks" class="form-control" required placeholder="Enter Remarks"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" onclick="goBack()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function goBack() {
    window.history.back();
}
</script>

@endsection
