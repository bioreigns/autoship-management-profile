@extends('layouts.app')

@section('content')
    
<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">
    
    <div class="mb-5">
        <div class="divider d-flex justify-content-between">
            <h4 class="font-weight-bold">AUTOSHIP PROFILES INFO </h4>
            <div class="">
                <a href="/edit-authoship-profile" class="link font-weight-bold mr-3">EDIT AUTOSHIP PROFILE</a>
                <a href="/" class="link font-weight-bold">BACK</a>
            </div>
        </div>
        <hr class="seperator mr-auto">
    </div>

    <div class="card border-0 my-5">
        <div class="card-body">

            {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold title-style m-0">AUTOSHIP PROFILE INFO</h5>
                <a href="" class="btn btn-outline-gold m-0">EDIT PROFILE</a>
            </div> --}}

            <div class="row">
                <div class="col-12 col-md-6">

                    <div class="card">
                        <h5 class="card-header">Dates Information</h5>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Start Date : </span> 
                                  {{-- <span>{{$profile->getStartDate()->format('Y-m-d')}}</span> --}}
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Stop Date : </span> 
                                  {{-- <span>{{$profile->getStopDate()->format('Y-m-d')}}</span> --}}
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Next Ship Date : </span> 
                                  {{-- <span>{{$profile->getNextShipDate()->format('Y-m-d')}}</span> --}}
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Type : </span> 
                                  {{-- <span>{{$profile->getPeriodType()}}</span> --}}
                                </li>
                                
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Day : </span> 
                                  {{-- <span>{{$profile->getPeriodDay()}}</span> --}}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card my-3">
                      <h5 class="card-header">Payment Information</h5>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
  
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Payment Type : </span> 
                              {{-- <span>{{$profile->getPaymentType()}}</span> --}}
                            </li>
  
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Currency Type ID : </span> 
                              {{-- <span>{{$profile->getCurrencyTypeID()}}</span> --}}
                            </li>
  
                        </ul>
                      </div>
                    </div>

                </div>

                <div class="col-12 col-md-6">
                  <div class="card">
                    <h5 class="card-header">Shipment Information</h5>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Name : </span> 
                              {{-- <span>{{$profile->getShipName()}}</span> --}}
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Street 1 : </span> 
                              {{-- <span>{{$profile->getShipStreet1()}}</span> --}}
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Street 2 : </span> 
                              {{-- <span>{{$profile->getShipStreet2()}}</span> --}}
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship City : </span> 
                              {{-- <span>{{$profile->getShipCity()}}</span> --}}
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship State : </span> 
                              {{-- <span>{{$profile->getShipState()}}</span> --}}
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Postal Code : </span> 
                              {{-- <span>{{$profile->getShipPostalCode()}}</span> --}}
                            </li>
    
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship County : </span> 
                              {{-- <span>{{$profile->getShipCounty()}}</span> --}}
                            </li>
    
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Country : </span> 
                              {{-- <span>{{$profile->getShipCountry()}}</span> --}}
                            </li>
    
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Method : </span> 
                              {{-- <span>{{$profile->getShipMethod()}}</span> --}}
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Phone : </span> 
                              {{-- <span>{{$profile->getShipPhone()}}</span> --}}
                            </li>
  
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Method ID : </span> 
                              {{-- <span>{{$profile->getShipMethodID()}}</span> --}}
                            </li>
    
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Override Shipping : </span> 
                              {{-- <span>{{$profile->getOverrideShipping()}}</span> --}}
                            </li>
    
                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Override Shipping Total : </span> 
                              {{-- <span>{{$profile->getOverrideShippingTotal()}}</span> --}}
                            </li>

                        </ul>
                    </div>
                </div>

              </div>

            </div>

            <hr class="mt-5 seperator-full">
            
            <div class="items-wrapper">
              @foreach ($profileItems[$key] as $profileItem)
                  @if($profileItem->getItemNumber() == null)
                    No Item found.
                      @continue
                  @endif
                  <div class="card border-0 shadow-sm my-3">
                      <div class="row">
                        <div class="col-4">
                          <img class="img-fluid" src="https://extranet.bydesign.com/Bioreigns/Shopping/Images/{{ $profileItem->getSmallImage() }}" alt="Card image cap">
                        </div>

                        <div class="col-8">
                          <div class="card-body">
                            {{$profileItem->getProfileDetailID()}}
                          <h5 class="card-title">{{$profileItem->getDescription()}}</h5>
                              <div class="">
                                <ul class="list-unstyled">
                                    <li class="list-item d-flex justify-content-between">
                                        <span class="font-weight-bold">Quantity: </span> {{$profileItem->getQuantity()}}
                                    </li>
                                    <li class="list-item d-flex justify-content-between">
                                        <span class="font-weight-bold">Price: </span> $ {{$profileItem->getPrice()}}
                                    </li>
                                  </ul>
                              </div>
                          </div>
                        </div>

                      </div>

                    </div>
           
              @endforeach
          
          {{-- end items wrapper --}}
            </div>
           
        </div>
    </div>

</div>

{{-- <div class="items-wrapper">
  @foreach ($profileItems[$key] as $profileItem)
      @if($profileItem->getItemNumber() == null)
        0
      @endif

      <div class="card border-0 shadow-sm my-3">
          <div class="row">
            <div class="col-4">
              <img class="img-fluid" src="https://extranet.bydesign.com/Bioreigns/Shopping/Images/{{ $profileItem->getSmallImage() }}" alt="Card image cap">
            </div>

            <div class="col-8">
              <div class="card-body">
                {{$profileItem->getProfileDetailID()}}
              <h5 class="card-title">{{$profileItem->getDescription()}}</h5>
                  <div class="">
                    <ul class="list-unstyled">
                        <li class="list-item d-flex justify-content-between">
                            <span class="font-weight-bold">Quantity: </span> {{$profileItem->getQuantity()}}
                        </li>
                        <li class="list-item d-flex justify-content-between">
                            <span class="font-weight-bold">Price: </span> $ {{$profileItem->getPrice()}}
                        </li>
                      </ul>
                  </div>
              </div>
            </div>

          </div>
    </div>

  @endforeach

</div> --}}

@endsection