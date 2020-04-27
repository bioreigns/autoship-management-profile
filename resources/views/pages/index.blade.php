@extends('layouts.app')

@section('content')
    
<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">
    
    <div class="mb-5">
        <div class="divider d-flex justify-content-between">
            <h4 class="font-weight-bold">AUTOSHIP PROFILES LIST</h4>
            <a href="/add-authoship-profile" class="link font-weight-bold">ADD AUTOSHIP PROFILE</a>
        </div>
        <hr class="seperator mr-auto">
    </div>

@foreach ($profiles as $profile)
    <div class="card my-5">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold title-style m-0">AUTOSHIP PROFILE DETAILS</h5>
                <a href="" class="btn btn-outline-gold m-0">VIEW AUTOSHIP PROFILE</a>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 px-5">

                    <div class="card">
                        <h5 class="card-header">Autoship Dates Information</h5>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Start Date : </span> 
                                  <span>{{$profile->getStartDate()->format('Y-m-d')}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Stop Date : </span> 
                                  <span>{{$profile->getStopDate()->format('Y-m-d')}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Next Ship Date : </span> 
                                  <span>{{$profile->getNextShipDate()->format('Y-m-d')}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Type : </span> 
                                  <span>{{$profile->getPeriodType()}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Day : </span> 
                                  <span>{{$profile->getPeriodDay()}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Autoship Dates Information</h5>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Start Date : </span> 
                                  <span>{{$profile->getStartDate()->format('Y-m-d')}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Stop Date : </span> 
                                  <span>{{$profile->getStopDate()->format('Y-m-d')}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Next Ship Date : </span> 
                                  <span>{{$profile->getNextShipDate()->format('Y-m-d')}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Type : </span> 
                                  <span>{{$profile->getPeriodType()}}</span>
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Day : </span> 
                                  <span>{{$profile->getPeriodDay()}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6 px-5">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Ship Postal Code : </span> 
                          <span>{{$profile->getShipPostalCode()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Ship County : </span> 
                          <span>{{$profile->getShipCounty()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Ship Country : </span> 
                          <span>{{$profile->getShipCountry()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Ship Method : </span> 
                          <span>{{$profile->getShipMethod()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Override Shipping : </span> 
                          <span>{{$profile->getOverrideShipping()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Override Shipping Total : </span> 
                          <span>{{$profile->getOverrideShippingTotal()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Payment Type : </span> 
                          <span>{{$profile->getPaymentType()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Currency Type ID : </span> 
                          <span>{{$profile->getCurrencyTypeID()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Ship Phone : </span> 
                          <span>{{$profile->getShipPhone()}}</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between p-1">
                          <span class="font-weight-bold">Ship Method ID : </span> 
                          <span>{{$profile->getShipMethodID()}}</span>
                        </li>
                    </ul>

                </div>

            </div>

            <hr class="mt-5 seperator-full">
            
                <div class="items my-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="font-weight-bold title-style m-0">AUTOSHIP PROFILE ITEMS</h5>
                        <h5 class="font-weight-bold m-0 d-flex align-items-center">
                            <span class="mr-1">Status:</span> 
                            <span class="badge badge-success">Active</span>
                        </h5>
                    </div>
                    <div class="row">

                        @foreach ($profileItems as $profileItem)
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card border-0 shadow-sm">
                                <img class="card-img-top" src="https://picsum.photos/200/200" alt="Card image cap">
                                <div class="card-body">
                                    {{$profileItem->getProfileDetailID()}}
                                  <h5 class="card-title">{{$profileItem->getDescription()}}</h5>
                                  <div class="">
                                    <ul class="list-unstyled">
                                        <li class="list-item d-flex justify-content-between">
                                            <span class="font-weight-bold">Quantity: </span> 2
                                        </li>
                                        <li class="list-item d-flex justify-content-between">
                                            <span class="font-weight-bold">Price: </span> $299.00
                                        </li>
                                      </ul>
                                  </div>
                                </div>
                              </div>
                        </div>
                        @endforeach
                    </div>
                </div>
           
        </div>
    </div>
@endforeach

</div>

@endsection