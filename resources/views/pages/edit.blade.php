@extends('layouts.app')

@section('content')
    
<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">

    <div class="mb-5">
        <div class="divider d-flex justify-content-between">
            <h4 class="font-weight-bold">EDIT AUTOSHIP PROFILE</h4>
            <a href="/" class="link font-weight-bold">BACK</a>
        </div>
        <hr class="seperator mr-auto">
    </div>

    <div class="card border-0 create-profile-fill-up">
        <div class="card-body">

            {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold title-style m-0">FILL-UP FORM</h5>
            </div> --}}

            <form>
                <div class="row">

                    <div class="col-12">

                        <div class="card mb-5">
                            <h5 class="card-header">Dates Information</h5>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="startDate">Start Date:</label>
                                            <input type="date" class="form-control" id="startDate" aria-describedby="startDate">
                                        </div>
                
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="stopDate">Stop Date:</label>
                                            <input type="date" class="form-control" id="stopDate" aria-describedby="stopDate">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="periodType">Period Type : </label>
                                            <input type="text" class="form-control" id="periodType" aria-describedby="periodType">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="periodDay">Period Day : </label>
                                            <input type="text" class="form-control" id="periodDay" aria-describedby="periodDay">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="nextShipDate">Next Ship Date:</label>
                                            <input type="date" class="form-control" id="nextShipDate" aria-describedby="nextShipDate">
                                        </div>
                                    </div>

                                </div>
                                

                            </div>
                        </div>

                        <div class="card mb-5">
                            <h5 class="card-header">Shipment Information</h5>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipName">Ship Name : </label>
                                            <input type="text" class="form-control" id="shipName" aria-describedby="shipName">
                                        </div>
                
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipStreet1">Ship Street 1 : </label>
                                            <input type="text" class="form-control" id="shipStreet1" aria-describedby="shipStreet1">
                                        </div>
                
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipStreet2">Ship Street 2 : </label>
                                            <input type="text" class="form-control" id="shipStreet2" aria-describedby="shipStreet2">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="shipCity">Ship City : </label>
                                            <select class="custom-select" id="shipCity">
                                                <option selected>Choose...</option>
                                                <option value="1">LA MIRADA</option>
                                                <option value="2">LAMIRADA</option>
                                                <option value="3">MIRADA</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="shipState">Ship State : </label>
                                            <select class="custom-select" id="shipState">
                                                <option selected>Choose...</option>
                                                <option value="1">CA</option>
                                              </select>
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">                
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipPostalCode">Ship Postal Code : </label>
                                            <input type="text" class="form-control" id="shipPostalCode" aria-describedby="shipPostalCode">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="shipCounty">Ship County : </label>
                                            <select class="custom-select" id="shipCounty">
                                                <option selected>Choose...</option>
                                                <option value="1">Los Angeles</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="shipCountry">Ship Country : </label>
                                            <select class="custom-select" id="shipCountry">
                                                <option selected>Choose...</option>
                                                <option value="1">USA</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipMethod">Ship Method : </label>
                                            <input type="text" class="form-control" id="shipMethod" aria-describedby="shipMethod">
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipPhone">Ship Phone : </label>
                                            <input type="text" class="form-control" id="shipPhone" aria-describedby="shipPhone">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="shipMethodID">Ship Method ID : </label>
                                            <input type="text" class="form-control" id="shipMethodID" aria-describedby="shipMethodID">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="overrideShipping">Override Shipping : </label>
                                            <input type="text" class="form-control" id="overrideShipping" aria-describedby="overrideShipping">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="overrideShippingTotal">Override Shipping Total : </label>
                                            <input type="text" class="form-control" id="overrideShippingTotal" aria-describedby="overrideShippingTotal">
                                        </div>

                                    </div>

                                </div>
                                

                            </div>
                        </div>

                        <div class="card mb-5">
                            <h5 class="card-header">Payment Information</h5>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="paymentType">Payment Type : </label>
                                            <input type="text" class="form-control" id="paymentType" aria-describedby="paymentType">
                                        </div>
                
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="currencyTypeID">Currency Type ID : </label>
                                            <input type="text" class="form-control" id="currencyTypeID" aria-describedby="currencyTypeID">
                                        </div>
                                    </div>

                                </div>
                                

                            </div>
                        </div>

                        <div class="form-group float-right">
                            <button class="btn btn-gold font-weight-bold">UPDATE</button>
                        </div>

                    </div>
                    
                </div>
           </form>

            {{-- <hr class="mt-5 seperator-full"> --}}

        </div>
    </div>

</div>

@endsection