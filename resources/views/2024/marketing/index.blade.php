
@extends('layouts.app')
@section('content')
<div class="container">

<!DOCTYPE html>
<html>
<head>
  <title>Marketing Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body {
      font-family: 'Arial', sans-serif; /* Change as per your preference */
    }
  
    .dataTables_wrapper {
      margin-top: 2em;
    }
  
    #table_wrapper {
      max-width: 90%;
      margin: auto;
    }
  
    .dataTable {
      width: 100% !important;
    }
  
    .dataTable thead th {
      background-color: gray; /* Bootstrap primary color */
      color: white;
    }
  
    .dataTable tbody tr:hover {
      background-color: #f8f9fa; /* Bootstrap light grey for hover */
    }
  </style>
  
</head>
<body>
    
 <div class="text">
      <br>
      <center><h1>Marketing 2024</h1></center>
      <br>
      <div class="table-responsive">
        <table id="table" class="table table-striped table-hover" style="width:100%">
            <thead>
                  <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Insured Headcount</th>
                    <th>Close Leads</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Case Officer</th>
                    <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
  </div>
  


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>


  
  <script type="text/javascript">
$(document).ready(function () {
    const table = $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "scrollX": true,
        "info": true,
        "autoWidth": true,
        "lengthMenu": [
            [10, 25, 50, -1],
            ['10', '25', '50', 'Show all']
        ],
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('marketing.index') }}", // Corrected route
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'insured_headcount', name: 'insured_headcount'},
            {data: 'leads', name: 'leads'},         
            {data: 'date', name: 'date'},         
            {data: 'email', name: 'email'},         
            {data: 'case_officer', name: 'case_officer'},     
                              // Define your actions column here...
                              {
                      data: null,
                      render: function (data, type, row) {
                          return '<a href="' + "{{ url('/2023/accountsection/') }}/" + row.id + '/" title="Show Client"><button class="btnColor"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>' +
                              '<a href="' + "{{ url('/2023/accountsection/') }}/" + row.id + '/edit" title="Edit Client"><button class="btnColor"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>' +
                              '<button class="btnColor delete-btn" data-id="' + row.id + '" title="Delete Client"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>'+
                            '<button class="btnColor transfer-btn" data-id="' + row.id + '" title="Transfer Data"><i class="fa fa-exchange" aria-hidden="true"></i> </button>';                              
                      }
                  }
                            
        ]
    });
});
  </script>
  
        
</div></div>


</body>
</html>
@endsection
