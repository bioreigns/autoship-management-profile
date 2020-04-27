@extends('layouts.app')

@section('content')
    
<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">

    <div class="mb-5">
        <div class="divider d-flex justify-content-between">
            <h4 class="font-weight-bold">CREATE AUTOSHIP PROFILE</h4>
            <a href="/" class="btn btn-danger text-white">Back</a>
        </div>
        <hr class="seperator mr-auto">
    </div>

    <div class="card create-profile-fill-up">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold title-style m-0">FILL-UP FORM</h5>
            </div>

            <form>
                <div class="row">

                    <div class="col-12">

                        <div class="card">
                            <h5 class="card-header">Autoship Dates Information</h5>
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label class="font-weight-bold" for="startDate">Start Date:</label>
                                    <input type="date" class="form-control" id="startDate" aria-describedby="startDate">
                                </div>
        
                                <div class="form-group">
                                    <label class="font-weight-bold" for="stopDate">Stop Date:</label>
                                    <input type="date" class="form-control" id="stopDate" aria-describedby="stopDate">
                                </div>
        
                                <div class="form-group">
                                    <label class="font-weight-bold" for="nextShipDate">Next Ship Date:</label>
                                    <input type="date" class="form-control" id="nextShipDate" aria-describedby="nextShipDate">
                                </div>
        
                                <div class="form-group">
                                    <label class="font-weight-bold" for="periodType">Period Type : </label>
                                    <input type="text" class="form-control" id="periodType" aria-describedby="periodType">
                                </div>
        
                                <div class="form-group">
                                    <label class="font-weight-bold" for="periodDay">Period Day : </label>
                                    <input type="text" class="form-control" id="periodDay" aria-describedby="periodDay">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="periodDay">Ship Name : </label>
                            <input type="text" class="form-control" id="periodDay" aria-describedby="periodDay">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="periodDay">Ship Name : </label>
                            <input type="text" class="form-control" id="periodDay" aria-describedby="periodDay">
                        </div>

                    </div>
                    
                </div>
           </form>

            <hr class="mt-5 seperator-full">

        </div>
    </div>

</div>

@endsection