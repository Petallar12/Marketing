@extends('layouts.app')
@section('content')
{{-- <link  rel="stylesheet" href="{{ asset('css/create.css') }}"> --}}


<div class="card">
    <div class="button">

    <div class="card-header">Create Record for Marketing 2024</div>
    <div class="card-body">


        <form action="{{ url('2024/marketing') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
        
        <div class="form-group mb-3">
            <label for="date">Date:</label>
            <input type="text" id="date" name="date" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="month">No. of Months:</label>
            <input type="text" id="month" name="month" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="source">Source:</label>
            <input type="text" id="source" name="source" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="leads">Leads:</label>
            <input type="text" id="leads" name="leads" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="case_officer">Case Officer:</label>
            <input type="text" id="case_officer" name="case_officer" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="date_assigned">Date Assigned:</label>
            <input type="date" id="date_assigned" name="date_assigned" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="residence">Residence:</label>
            <input type="text" id="residence" name="residence" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="dob">DOB:</label>
            <input type="date" id="dob" name="dob" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="product_inquired">Product Inquired:</label>
            <input type="text" id="product_inquired" name="product_inquired" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="inquire_dependent">Inquire Also for Independent:</label>
            <input type="text" id="inquire_dependent" name="inquire_dependent" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="number_dependent">Number of Dependent:</label>
            <input type="number" id="number_dependent" name="number_dependent" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="product_offered">Product Offered:</label>
            <input type="text" id="product_offered" name="product_offered" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="quoted_premium">Quoted Premium:</label>
            <input type="text" id="quoted_premium" name="quoted_premium" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="potential_commission">Potential Commission:</label>
            <input type="text" id="potential_commission" name="potential_commission" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="insured_headcount">Insured Headcount:</label>
            <input type="number" id="insured_headcount" name="insured_headcount" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="placement_date">Placement Date:</label>
            <input type="date" id="placement_date" name="placement_date" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="product_sold_offered">Product Sold/Offered:</label>
            <input type="text" id="product_sold_offered" name="product_sold_offered" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="premium_annual">Premium Annual:</label>
            <input type="text" id="premium_annual" name="premium_annual" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="commission_percentage">Commission Percentage:</label>
            <input type="text" id="commission_percentage" name="commission_percentage" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="commission">Commission:</label>
            <input type="text" id="commission" name="commission" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="tat">TAT:</label>
            <input type="text" id="tat" name="tat" class="form-control" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="reason">Reason:</label>
            <textarea id="reason" name="reason" class="form-control" required></textarea>
        </div>
        
        <div class="form-group mb-3">
            <label for="other_message">Other Message:</label>
            <textarea id="other_message" name="other_message" class="form-control" required></textarea>
        </div>
        
        <div class="form-group mb-3">
            <label for="remarks">Remarks:</label>
            <textarea id="remarks" name="remarks" class="form-control" required></textarea>
        </div>
        
        <input type="submit" value="Save" class="btnSave mt-3">
        <button type="button" class="btnCancel mt-3" onclick="goBack()">Cancel</button><br>
        </form>
        </div>
        </div>
    
    <script>
    function goBack() {
    window.history.back();
    }
    </script>
    
@endsection