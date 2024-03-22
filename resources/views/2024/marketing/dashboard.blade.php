@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 text-white">
    
    <!-- Add a row to contain the columns -->
    <header class="row">
        <div class="col-xl-8 col-md-8">
            <div class="card mb-2 h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">0</h5>

                </div>
                <div class="card-body">
                    <!-- Content for card body -->
                    <div id="group-div">
                        <br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-4">
            <div class="card mb-2 ">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">1</h5>

                </div>
                <div class="card-body">
                    <br><br><br><br><br><br>
                    <div id="group-div">
                    </div>
                </div>
            </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">2</h5>
                    </div>
                    <div class="card-body">
                        <br><br><br><br><br><br>
                            <div id="group-div">
                        </div>
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
