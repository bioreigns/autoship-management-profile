<?php /** @var $items \DataHead\ByDesignAPI\AutoshipAPI\ArrayOfAutoshipItemDetail */ ?>
@extends('layouts.app')

@section('content')

<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">

    <div class="mb-5">
        <div class="divider d-flex justify-content-between">
            <h4 class="font-weight-bold">CREATE AUTOSHIP PROFILE</h4>
            <a href="/" class="link font-weight-bold">BACK</a>
        </div>
        <hr class="seperator mr-auto">
    </div>

    <div class="card border-0 create-profile-fill-up">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="font-weight-bold title-style m-0">FILL OUT FORM</h5>
            </div>

            <!-- alert -->
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach

            <form action="{{url('/store-authoship-profile')}}" method="post">
                @csrf
                <div class="row">

                    <div class="col-12">

                        <div class="card border-0 shadow-sm mb-5">
                            <h5 class="card-header border-0">Dates</h5>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="startDate">Start Date:</label>
                                            <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" name="startDate" id="startDate" aria-describedby="startDate" readonly>
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="stopDate">Stop Date:</label>
                                            <input type="date" class="form-control" name="stopDate" id="stopDate" aria-describedby="stopDate">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card border-0 shandow-sm mb-5">
                            <h5 class="card-header border-0">Shipment Information</h5>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="firstName">First Name : </label>
                                            <input type="text" class="form-control" value="{{old('firstName')}}" name="firstName" id="firstName" aria-describedby="firstName">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="lastName">Last Name : </label>
                                            <input type="text" class="form-control" value="{{old('lastName')}}" name="lastName" id="lastName" aria-describedby="lastName">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="street1">Street 1 : </label>
                                            <input type="text" class="form-control" value="{{old('street1')}}" name="street1" id="street1" aria-describedby="street1">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="street2">Street 2 : </label>
                                            <input type="text" class="form-control" value="{{old('street2')}}" name="street2" id="street2" aria-describedby="street2">
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="city">City : </label>
                                            <input type="text" class="form-control" value="{{old('city')}}" name="city" id="city">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="state">State / Province : </label>
                                            <input type="text" class="form-control" value="{{old('state')}}" id="state" name="state">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="postalCode">Postal Code : </label>
                                            <input type="text" class="form-control" value="{{old('postalCode')}}" name="postalCode" id="postalCode" aria-describedby="postalCode">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="county">County : </label>
                                            <input type="text" class="form-control" value="{{old('county')}}" name="county" id="county">
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="country">Country : </label>
                                            <select class="custom-select" value="{{old('country')}}" name="country" id="country">
                                                <option value="USA">USA</option>
                                                <option value="CANADA">Canada</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="phone">Phone : </label>
                                            <input type="text" class="form-control" value="{{old('phone')}}" name="phone" id="phone" aria-describedby="phone">
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="card shadow-sm border-0 border-0 mb-5">
                            <h5 class="card-header border-0">Payment Information</h5>
                            <div class="card-body">

                                <div class="row">

                                    <div class="col-12 col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="bill_firstName">First Name : </label>
                                            <input type="text" class="form-control" value="{{old('bill_firstName')}}" name="bill_firstName" id="bill_firstName" aria-describedby="firstName">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="lastName">Last Name : </label>
                                            <input type="text" class="form-control" value="{{old('bill_lastName')}}" name="bill_lastName" id="bill_lastName" aria-describedby="lastName">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="bill_street1">Street 1 : </label>
                                            <input type="text" class="form-control" value="{{old('bill_street1')}}" name="bill_street1" id="bill_street1" aria-describedby="street1">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="bill_street2">Street 2 : </label>
                                            <input type="text" class="form-control" value="{{old('bill_street2')}}" name="bill_street2" id="bill_street2" aria-describedby="street2">
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="bill_city">City : </label>
                                            <input type="text" class="form-control" value="{{old('bill_city')}}" name="bill_city" id="bill_city">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="bill_state">State / Province : </label>
                                            <input type="text" class="form-control" value="{{old('bill_state')}}" id="bill_state" name="bill_state">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="bill_postalCode">Postal Code : </label>
                                            <input type="text" class="form-control" value="{{old('bill_postalCode')}}" name="bill_postalCode" id="bill_postalCode" aria-describedby="bill_postalCode">
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label for="cardNumber" class="font-weight-bold">Card Number : </label>
                                            <input type="text" class="form-control cardnumber" data-inputmask-clearmaskonlostfocus="false" value="{{old('cardNumber')}}" name="cardNumber" id="cardNumber">
                                        </div>

                                        <div class="form-row">
                                            <div class="col-6 col-md-4 form-group">
                                                <label for="cardExpDate" class="font-weight-bold">Exp Month : </label>
                                                <input type="number" class="form-control" value="{{old('expMonth')}}" id="expMonth" name="expMonth">
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <label for="expYear" class="font-weight-bold">EXP Year : </label>
                                                <input type="number" class="form-control" value="{{old('expYear')}}" id="expYear" name="expYear">
                                            </div>
                                            <div class="col-12
                                             col-md-4">
                                                <label for="cvv" class="font-weight-bold">CVV : </label>
                                                <input type="number" class="form-control" value="{{old('cvv')}}" id="cvv" name="cvv">
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>


                        <hr class="mt-5 seperator-full">

                        <div class="card shadow-sm border-0 border-0 mb-5">
                            <h5 class="card-header border-0">Choose Items</h5>
                            <div class="card-body choose-item-table">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Set Quantity</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Item Number</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">QV</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>
                                                <input type="number" class="form-control qty" value="{{old('lastName')}}" name="items[{{ $item->getItemNumber() }}]" value="0">
                                            </td>
                                            <th><img src="https://extranet.bydesign.com/Bioreigns/Shopping/Images/{{ $item->getSmallImage() }}" alt="" width="150px"></th>
                                            <td>{{ $item->getItemNumber() }}</td>
                                            <td>{{ $item->getDescription() }}</td>
                                            <td>{{ $item->getVolume2() }}</td>
                                            <td>{{ $item->getPrice() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="form-group float-right">
                            <button type="submit" class="btn btn-gold font-weight-bold">Submit</button>
                        </div>

                    </div>

                </div>
            </form>


        </div>
    </div>

</div>

@endsection
