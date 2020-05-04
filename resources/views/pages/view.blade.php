@extends('layouts.app')

@section('content')

<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">

    <div class="mb-5">
        <div class="divider d-flex justify-content-between">
            <h4 class="font-weight-bold">PROFILE INFO</h4>
            <div class="">
                <a href="{{ url('/delete-profile/' . $profileDetails->GetProfileID()) }}" class="link font-weight-bold mr-3">DELETE PROFILE</a>
                <a href="/edit-authoship-profile/{{$profileDetails->GetProfileID()}}" class="link font-weight-bold mr-3">EDIT PROFILE</a>
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

                    <div class="card border-0 shadow-sm">
                        <h5 class="card-header border-0">Dates Information</h5>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Start Date : </span>
                                  <span>{{$profileDetails->getStartDate()->format('Y-m-d')}}</span>
                                </li>

                                {{--<li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Stop Date : </span>
                                  <span>{{$profileDetails->getStopDate()->format('Y-m-d')}}</span>
                                </li>--}}

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Next Ship Date : </span>
                                  <span>{{$profileDetails->getNextShipDate()->format('Y-m-d')}}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Type : </span>
                                  <span>{{$profileDetails->getPeriodType()}}</span>
                                </li>

                                {{--<li class="list-group-item d-flex justify-content-between p-1">
                                  <span class="font-weight-bold">Period Day : </span>
                                  <span>{{$profileDetails->getPeriodDay()}}</span>
                                </li>--}}
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm my-3">
                      <h5 class="card-header border-0">Payment Information</h5>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Payment Type : </span>
                              <span>{{$profileDetails->getPaymentType()}}</span>
                            </li>

                        </ul>
                      </div>
                    </div>

                </div>

                <div class="col-12 col-md-6">
                  <div class="card border-0 shadow-sm">
                    <h5 class="card-header border-0">Shipment Information</h5>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Name : </span>
                              <span>{{$profileDetails->getShipName()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Street 1 : </span>
                              <span>{{$profileDetails->getShipStreet1()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Street 2 : </span>
                              <span>{{$profileDetails->getShipStreet2()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship City : </span>
                              <span>{{$profileDetails->getShipCity()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship State : </span>
                              <span>{{$profileDetails->getShipState()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Postal Code : </span>
                              <span>{{$profileDetails->getShipPostalCode()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship County : </span>
                              <span>{{$profileDetails->getShipCounty()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Country : </span>
                              <span>{{$profileDetails->getShipCountry()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Method : </span>
                              <span>{{$profileDetails->getShipMethod()}}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between p-1">
                              <span class="font-weight-bold">Ship Phone : </span>
                              <span>{{$profileDetails->getShipPhone()}}</span>
                            </li>

                        </ul>
                    </div>
                </div>

              </div>

            </div>

            <hr class="mt-5 seperator-full">


            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold title-style m-0">PROFILE ITEMS</h5>
                <h5>
                  <span class="font-weight-bold">Status : </span>
                  <span class="badge badge-success">Active</span>
              </h5>
            </div>


            <div class="items-wrapper">
                <div class="row">
                  @foreach ($profileItems as $profileItem)
                      @if($profileItem->getItemNumber() == null)
                        No Item found.
                          @continue
                      @endif
                      <div class="col-12 col-lg-6 col-xl-4">
                          <div class="card border-0 shadow-sm my-3">
                              <div class="row">
                                <div class="col-4">
                                  <img class="img-fluid" src="https://extranet.bydesign.com/Bioreigns/Shopping/Images/{{ $profileItem->getSmallImage() }}" alt="Card image cap">
                                </div>

                                <div class="col-8">
                                  <div class="card-body">
                                    {{$profileItem->getItemNumber()}}
                                    <div class="item-title">
                                        <h5 class="card-title">{{ Str::limit($profileItem->getDescription(), 30) }}</h5>
                                    </div>
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

                      {{-- end col --}}
                      </div>

                        @endforeach

                {{-- end row --}}
                </div>

          {{-- end items wrapper --}}
            </div>

        </div>
    </div>

</div>

@endsection
