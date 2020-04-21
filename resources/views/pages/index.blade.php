@extends('layouts.app')

@section('content')
    
<div class="col-12 col-sm-12 col-md-11 mx-auto bg-white shadow main-content">

    <div class="title mb-5">
        <h4>Autoship List</h4>
    </div>

    <div class="table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Profile ID</th>
                <th scope="col">Start   Date</th>
                <th scope="col">Stop Date</th>
                <th scope="col">Next Ship Date</th>
                <th scope="col">Period Type</th>
                <th scope="col">Period Day</th>
                <th scope="col">Ship Name</th>
                <th scope="col">Ship Street 1</th>
                <th scope="col">Ship Street 2</th>
                <th scope="col">Ship City</th>
                <th scope="col">Ship State</th>
                <th scope="col">Ship Postal Code</th>
                <th scope="col">Ship County</th>
                <th scope="col">Ship Country</th>
                <th scope="col">Ship Method</th>
                <th scope="col">Override Shipping</th>
                <th scope="col">Override Shipping Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($result as $profile)
                    <tr>
                    <th scope="row">{{$profile->ProfileID}}</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>

@endsection