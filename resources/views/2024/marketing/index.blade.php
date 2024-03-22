
@extends('layouts.app')
@section('content')
<html>
    <title>Index</title>
    <head>
        <title>Marketing Clients</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <style>

    
        </style>
    </head>
    <link  rel="stylesheet" href="{{ asset('css/index.css') }}">

    <body>
      
<div class="containerTable">

    <h1>Marketing 2024</h1>
    <table id="table" class="display nowrap" style="width:100%">
        <thead>
            <tr>

                            <th>Id</th>
                            <th>Action</th>
                            <th>Date</th>
                            <th>
                                <select class="month" onchange="reloadTable();">
                                <option value="">Month</option>
                                @foreach ($MonthInquiries as $month)
                                    <option value="{{ $month }}">{{ $month }}</option>
                                @endforeach
                                </select>
                            </th>
                            <th>
                                <select class="source" onchange="reloadTable();">
                                <option value="">Source</option>
                                @foreach ($Sourcefilter as $source)
                                    <option value="{{ $source }}">{{ $source }}</option>
                                @endforeach
                                </select>
                            </th>
                            <th>
                                <select class="leads" onchange="reloadTable();">
                                <option value="">Leads</option>
                                @foreach ($Leadsfilter as $leads)
                                    <option value="{{ $leads }}">{{ $leads }}</option>
                                @endforeach
                                </select>
                            </th>                            <th>
                                <select class="case_officer" onchange="reloadTable();">
                                <option value="">Case Officer</option>
                                @foreach ($Case_officerfilter as $case_officer)
                                    <option value="{{ $case_officer }}">{{ $case_officer }}</option>
                                @endforeach
                                </select>
                            </th>                            
                            <th>Date Assigned</th>
                            <th>Name</th>
                            <th>
                                <select class="nationality" onchange="reloadTable();">
                                <option value="">Nationality</option>
                                @foreach ($Nationalityfilter as $nationality)
                                    <option value="{{ $nationality }}">{{ $nationality }}</option>
                                @endforeach
                                </select>
                            </th>                            
                            <th>
                                <select class="residence" onchange="reloadTable();">
                                <option value="">Residence</option>
                                @foreach ($Residencefilter as $residence)
                                    <option value="{{ $residence }}">{{ $residence }}</option>
                                @endforeach
                                </select>
                            </th>                             
                            <th>DOB</th>
                            <th>
                                <select class="age" onchange="reloadTable();">
                                <option value="">Age</option>
                                @foreach ($Agefilter as $age)
                                    <option value="{{ $age }}">{{ $age }}</option>
                                @endforeach
                                </select>
                            </th>                             
                            <th>
                                <select class="email" onchange="reloadTable();">
                                <option value="">Email</option>
                                @foreach ($EmailFilter as $email)
                                    <option value="{{ $email }}">{{ $email }}</option>
                                @endforeach
                                </select>
                            </th>                           
                            
                            <th>
                                <select class="contact_number" onchange="reloadTable();">
                                <option value="">Contact Number</option>
                                @foreach ($Contactfilter as $contact_number)
                                    <option value="{{ $contact_number }}">{{ $contact_number }}</option>
                                @endforeach
                                </select>
                            </th>                             
                            <th>Product Inquired</th>
                            <th>Other Message</th>
                            <th>Inquire Also for Independent</th>
                            <th>Number of Dependent</th>
                            <th>Status</th>
                            <th>Product Offered</th>
                            <th>Quoted Premium</th>
                            <th>Potential Commission</th>
                            <th>Insured Headcount</th>
                            <th>Either Placement Date or Policy Start Date</th>
                            <th>Product Sold / Offered</th>
                            <th>Premium</th>
                            <th>Commission-%</th>
                            <th>Commission</th>
                            <th>TAT</th>
                            <th>Reason</th>
                            <th>Remarks</th>
                            <th>Encoded By</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
              </div>
              

        <!-- Remarks Modal -->
        <div class="modal fade" id="remarksModal" tabindex="-1" aria-labelledby="remarksModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="remarksModalLabel">Remarks</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- The remarks will be dynamically inserted here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Messages Modal -->
        <div class="modal fade" id="other_messageModal" tabindex="-1" aria-labelledby="other_messageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="other_messageModalLabel">Other Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- The remarks will be dynamically inserted here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
  <!-- Include jQuery and DataTables libraries -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <!-- Include DataTables Buttons libraries -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  



  <script type="text/javascript">
    $(document).ready(function () {
        const table = $('#table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "scrollX": true,
            "info": true,
            "autoWidth": true,
            lengthMenu: [
          [ 10, 25, 50, -1 ],
          [ '10', '25', '50', 'Show all' ]
          ],
            "processing": true,
            "serverSide": true,
            "ajax": {
              "url": "{{ route('marketing.index') }}",
              "type": "GET",
              "data": function (d) {
                d.month = $('.month').val();
                    d.source = $('.source').val();
                    d.leads = $('.leads').val();
                    d.case_officer = $('.case_officer').val();
                    d.nationality = $('.nationality').val();
                    d.residence = $('.residence').val();
                    d.age = $('.age').val();
                    d.email = $('.email').val();
                    d.contact_number = $('.contact_number').val();
                }
             
          },

                    "columns": [
                    {data: 'id', name: 'id'},
                    {
                      data: null,
                      render: function (data, type, row) {
                          return '<a href="' + "{{ url('/2024/marketing/') }}/" + row.id + '/" title="Show Client"><button class="btnColor"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>' +
                          '<a href="' + "{{ url('/2024/marketing/') }}/" + row.id + '/edit" title="Edit Client"><button class="btnColor"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>' +
                          '<button class="btnColor delete-btn" data-id="' + row.id + '" title="Delete Client"><i class="fa fa-trash-o" aria-hidden="true"></i>  </button>';                                                     
                      }
                    },
                    {data: 'date', name: 'date'},
                    
                    {data: 'month', name: 'month'},
                    {data: 'source', name: 'source'},
                    {data: 'leads', name: 'leads'},
                    {data: 'case_officer', name: 'case_officer'},
                    {data: 'date_assigned', name: 'date_assigned'},
                    {data: 'name', name: 'name'},
                    {data: 'nationality', name: 'nationality'},
                    {data: 'residence', name: 'residence'},
                    {data: 'dob', name: 'dob'},
                    {data: 'age', name: 'age'},
                    {data: 'email', name: 'email'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'product_inquired', name: 'product_inquired'},
                    {
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btnColor other_message-btn" data-bs-toggle="modal" data-bs-target="#other_messageModal" data-remarks="' + row.other_message + '">Other Message</button>';
                        }
                    },                     
                    {data: 'inquire_dependent', name: 'inquire_dependent'},
                    {data: 'number_dependent', name: 'number_dependent'},
                    {data: 'status', name: 'status'},
                    {data: 'product_offered', name: 'product_offered'},
                    {data: 'quoted_premium', name: 'quoted_premium'},
                    {data: 'potential_commission', name: 'potential_commission'},
                    {data: 'insured_headcount', name: 'insured_headcount'},
                    {data: 'placement_date', name: 'placement_date'},
                    {data: 'product_sold_offered', name: 'product_sold_offered'},
                    {data: 'premium_annual', name: 'premium_annual'},
                    {data: 'commission_percentage', name: 'commission_percentage'},
                    {data: 'commission', name: 'commission'},
                    {data: 'tat', name: 'tat'},
                    {data: 'reason', name: 'reason'},
                    {
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btnColor remarks-btn" data-bs-toggle="modal" data-bs-target="#remarksModal" data-remarks="' + row.remarks + '">Remarks</button>';
                        }
                    },  
                    {data: 'encode_by', name: 'encode_by'},                                
                    ]
                });
        
        $('#table').on('click', '.delete-btn', function () {
            var id = $(this).data('id');
            deleteRow(id);
        });

        function deleteRow(id) {
            if (confirm('Confirm delete?')) {
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/2024/marketing/delete') }}/" + id,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        console.log('Success:', data);
                        window.location.href = "{{ url('/2024/marketing/index') }}";
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                    }
                });
            }
        }


        // Function to trigger reload of DataTables
        function reloadTable() {
            table.ajax.reload();
        }
        // Event handler for filter changes
        $('.month, .source, .leads, .case_officer, .nationality, .residence, .age, .email, .contact_number').on('change', function () {
            table.ajax.reload();
        });
        
                    

                $('#table').on('click', '.other_message-btn', function () {
                    var data = table.row($(this).parents('tr')).data();
                    var other_message = data.other_message;
                    $('#other_messageModal .modal-body').text(other_message);
                    new bootstrap.Modal(document.getElementById('other_messageModal')).show();
                });
                $('#table').on('click', '.remarks-btn', function () {
                    var data = table.row($(this).parents('tr')).data();
                    var remarks = data.remarks;
                    $('#remarksModal .modal-body').text(remarks);
                    new bootstrap.Modal(document.getElementById('remarksModal')).show();
                });
            });
        </script>
</body>
</html>
@endsection

