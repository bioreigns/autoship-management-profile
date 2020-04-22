@extends('layouts.app')

@section('content')
    
<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">

    <div class="d-flex justify-content-between mb-5">
        <div class="title">
            <h4 class="mb-0">Autoship List</h4>
        </div>
        <div class="add-btn">
            <a href="/add-authoship-profile" class="btn btn-primary text-white">Add Autoship Profile</a>
        </div>
    </div>

@foreach ($profiles as $profile)
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-6 font-weight-bold">
                    <div>Profile ID : {{$profile->ProfileID}}</div>
                    <div>Start Date : {{$profile->StartDate}}</div>
                    <div>Stop Date : {{$profile->StopDate}}</div>
                    <div>Next Ship Date : {{$profile->NextShipDate}}</div>
                    <div>Period Type : {{$profile->PeriodType}}</div>
                    <div>Period Day : {{$profile->PeriodDay}}</div>
                    <div>Ship Name : {{$profile->ShipName}}</div>
                    <div>Ship Street 1 : {{$profile->ShipStreet1}}</div>
                    <div>Ship Street 2 : {{$profile->ShipStreet2}}</div>
                    <div>Ship City : {{$profile->ShipCity}}</div>
                    <div>Ship State : {{$profile->ShipState}}</div>
                </div>

                <div class="col-6 font-weight-bold">
                    <div>Ship Postal Code : {{$profile->ShipPostalCode}}</div>
                    <div>Ship County : {{$profile->ShipCounty}}</div>
                    <div>Ship Country : {{$profile->ShipCountry}}</div>
                    <div>Ship Method : {{$profile->ShipMethod}}</div>
                    <div>Override Shipping : {{$profile->OverrideShipping}}</div>
                    <div>Override Shipping Total : {{$profile->OverrideShippingTotal}}</div>
                    <div>Payment Type : {{$profile->PaymentType}}</div>
                    <div>Currency Type ID : {{$profile->CurrencyTypeID}}</div>
                    <div>Ship Phone : {{$profile->ShipPhone}}</div>
                    <div>Ship Method ID : {{$profile->ShipMethodID}}</div>
                </div>

            </div>
        </div>
    </div>
@endforeach

</div>

@endsection