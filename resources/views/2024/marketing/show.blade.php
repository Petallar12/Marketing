<!-- resources/views/marketing_2024s/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 text-white">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link  rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<style>

</style>
<body>

    <div class="card detail-card">
        <div class="card-header">
            <h2>Detail View - {{ $marketing_2024->name }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Date:</strong> {{ $marketing_2024->date }}</p>
                    <p><strong>Month:</strong> {{ $marketing_2024->month }}</p>
                    <p><strong>Source:</strong> {{ $marketing_2024->source }}</p>
                    <p><strong>Leads:</strong> {{ $marketing_2024->leads }}</p>
                    <p><strong>Case Officer:</strong> {{ $marketing_2024->case_officer }}</p>
                    <p><strong>Date Assigned:</strong> {{ $marketing_2024->date_assigned }}</p>
                    <p><strong>Nationality:</strong> {{ $marketing_2024->nationality }}</p>
                    <p><strong>Residence:</strong> {{ $marketing_2024->residence }}</p>
                    <p><strong>DOB:</strong> {{ $marketing_2024->dob }}</p>
                    <p><strong>Age:</strong> {{ $marketing_2024->age }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Email:</strong> {{ $marketing_2024->email }}</p>
                    <p><strong>Contact Number:</strong> {{ $marketing_2024->contact_number }}</p>
                    <p><strong>Product Inquired:</strong> {{ $marketing_2024->product_inquired }}</p>
                    <p><strong>Inquire Also for Independent:</strong> {{ $marketing_2024->inquire_dependent }}</p>
                    <p><strong>Number of Dependent:</strong> {{ $marketing_2024->number_dependent }}</p>
                    <p><strong>Status:</strong> {{ $marketing_2024->status }}</p>
                    <p><strong>Product Offered:</strong> {{ $marketing_2024->product_offered }}</p>
                    <p><strong>Quoted Premium:</strong> {{ $marketing_2024->quoted_premium }}</p>
                    <p><strong>Potential Commission:</strong> {{ $marketing_2024->potential_commission }}</p>
                </div>
                <div class="col-12">
                    <p><strong>Insured Headcount:</strong> {{ $marketing_2024->insured_headcount }}</p>
                    <p><strong>Placement Date:</strong> {{ $marketing_2024->placement_date }}</p>
                    <p><strong>Product Sold/Offered:</strong> {{ $marketing_2024->product_sold_offered }}</p>
                    <p><strong>Premium Annual:</strong> {{ $marketing_2024->premium_annual }}</p>
                    <p><strong>Commission Percentage:</strong> {{ $marketing_2024->commission_percentage }}</p>
                    <p><strong>Commission:</strong> {{ $marketing_2024->commission }}</p>
                    <p><strong>TAT:</strong> {{ $marketing_2024->tat }}</p>
                    <p><strong>Reasons:</strong> {{ $marketing_2024->reason }}</p>
                    <p><strong>Other Message:</strong> {{ $marketing_2024->other_message }}</p>

                    <p><strong>Remarks:</strong> {{ $marketing_2024->remarks }}</p>
                </div>
            </div>
            <a href="{{ route('marketing.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
</body>
</html>
@endsection

