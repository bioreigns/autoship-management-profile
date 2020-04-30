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
                                            <input type="date" class="form-control" name="startDate" id="startDate" aria-describedby="startDate">
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
                                            <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby="firstName">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="lastName">Last Name : </label>
                                            <input type="text" class="form-control" name="lastName" id="shipName" aria-describedby="lastName">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="street1">Street 1 : </label>
                                            <input type="text" class="form-control" name="street1" id="street1" aria-describedby="street1">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="street2">Street 2 : </label>
                                            <input type="text" class="form-control" name="street2" id="street2" aria-describedby="street2">
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="city">City : </label>
                                            <input type="text" class="form-control" name="city" id="city">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="state">State / Province : </label>
                                            <select class="custom-select" name="state" id="state">
                                                <option selected>Choose...</option>
                                                <option value="CA">CA</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="postalCode">Postal Code : </label>
                                            <input type="text" class="form-control" name="postalCode" id="postalCode" aria-describedby="postalCode">
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="county">County : </label>
                                            <input type="text" class="form-control" name="county" id="county">
                                        </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4">

                                        <div class="form-group">
                                            <label class="font-weight-bold"  for="country">Country : </label>
                                            <select class="custom-select" name="country" id="country">
                                                <option value="USA">USA</option>
                                                <option value="CANADA">Canada</option>
                                              </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="phone">Phone : </label>
                                            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone">
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
                                        
                                    </div>

                                </div>


                            </div>
                        </div>


                        <hr class="mt-5 seperator-full">

                        <div class="card shadow-sm border-0 border-0 mb-5">
                            <h5 class="card-header border-0">Choose Item</h5>
                            <div class="card-body">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Item Number</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">QV</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th><img class="img-fluid" src="https://picsum.photos/100/100" width="100" height="100" alt=""></th>
                                        <td>AS-Gummy</td>
                                        <td>Gummy Bears</td>
                                        <td>35.00</td>
                                        <td>53.54</td>
                                        <td>
                                            <input type="number">
                                        </td>
                                    </tr>
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
