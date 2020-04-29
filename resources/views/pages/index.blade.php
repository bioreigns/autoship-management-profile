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

<div class="row">
@foreach ($profiles as $key => $profile)
  <div class="col-12 col-md-6">

    <div class="card my-3">
      <div class="card-body">

          <div class="row mb-3">
              <div class="col-12">

                {{-- profile info --}}
                  <div class="card shadow-sm border-0 mb-3">
                      <h5 class="card-header border-0">Profile Information</h5>
                      <div class="card-body">
                          <ul class="list-group list-group-flush">

                              <li class="list-group-item d-flex justify-content-between p-1">
                                <span class="font-weight-bold">Ship Name : </span> 
                                <span>{{$profile->getShipName()}}</span>
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
                                <span class="font-weight-bold">Ship Method : </span> 
                                <span>{{$profile->getShipMethod()}}</span>
                              </li>

                              <li class="list-group-item d-flex justify-content-between p-1">
                                <span class="font-weight-bold">Payment Type : </span> 
                                <span>{{$profile->getPaymentType()}}</span>
                              </li>

                          </ul>
                      </div>
                  </div>

                {{-- items table --}}
                    <div class="card shadow-sm border-0">
                        <h5 class="card-header border-0">Profile`s Item Information</h5>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Number of Items : </span>
                                  <span>
                                    @foreach ($profileItems[$key] as $profileItem)
                                    @if($profileItem->getItemNumber() == null)
                                    No Item to ship
                                    @endif
                                    @endforeach
                                  {{count($profileItems[$key])}}
                                  </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Status : </span>
                                  <span class="badge badge-success">Active</span>
                                </li>

                            </ul>
                        </div>
                    </div>

              </div>
          </div>

          
          {{-- button --}}
          <div class="text-center mt-4">
            {{-- <h5 class="font-weight-bold title-style m-0">AUTOSHIP PROFILE DETAILS</h5> --}}
          <a href="/view-authoship-profile/{{$profile->getProfileID()}}" class="btn btn-gold font-weight-bold">VIEW AUTOSHIP PROFILE</a>
        </div>



      </div>
    </div>

  </div>
  @endforeach
</div>



</div>

@endsection
