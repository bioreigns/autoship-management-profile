<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoshipsProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $autoShipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
        $Credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
        $Credentials->setUsername(config('bydesign.username'));
        $Credentials->setPassword(config('bydesign.password'));

        // get profiles
        $profileAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetAutoshipProfiles($Credentials, '1114', '');
        $profiles = $autoShipAPI->GetAutoshipProfiles($profileAPI)->getGetAutoshipProfilesResult();

        // get profile details id

        // $profileItemsID = [];

        // $profileItemsID[$profiles->getProfileID()] = [];

        $profileItems = [];
        foreach($profiles as $profileid){

            // $profileItemsID[] = $profileid->getProfileID();
            $id = $profileid->getProfileID();

            // dd($id);

            $itemsAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetProfileItemDetails($Credentials, $id);
            $profileItemResult = $autoShipAPI->GetProfileItemDetails($itemsAPI)->getGetProfileItemDetailsResult();

            $profileItems[] = $profileItemResult;

        }
        return view('pages.index', ['profiles' => $profiles , 'profileItems' => $profileItems]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedInput = $request->validate([
            // 'BCNumber' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'street1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
            'county' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'startDate' => 'required',
            'stopDate' => 'required',
            'PeriodDay' => 'required',
            'OverrideShipping' => 'required',
            'ShippingTotal' => 'required',
        ]);

        if($validatedInput == true){
            // $BCNumber = $request->get('BCNumber');
            // ship address
            $firstName = $request->get('firstName');
            $lastName = $request->get('lastName');
            $street1 = $request->get('street1');
            $street2 = $request->get('street2');
            $city = $request->get('city');
            $state = $request->get('state');
            $postalCode = $request->get('postalCode');
            $county = $request->get('county');
            $country = $request->get('country');
            $phone = $request->get('phone');

            $StartDate = $request->get('startDate');
            $StopDate = $request->get('stopDate');
            $PeriodDay = $request->get('periodDay');
            $OverrideShipping = $request->get('overrideShipping');
            $ShippingTotal = $request->get('shippingTotal');
        }else{
           return redirect()->route('/');
        }

        $autoShipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
        $Credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
        $Credentials->setUsername(config('bydesign.username'));
        $Credentials->setPassword(config('bydesign.password'));

        $ShipAddress = new \DataHead\ByDesignAPI\AutoshipAPI\AutoshipAddress();
        $ShipAddress->setFirstname($firstName);
        $ShipAddress->setLastname($lastName);
        $ShipAddress->setStreet1($street1);
        $ShipAddress->setStreet2($street2);
        $ShipAddress->setCity($city);
        $ShipAddress->setState($state);
        $ShipAddress->setPostalCode($postalCode);
        $ShipAddress->setCounty($county);
        $ShipAddress->setCountry($country);
        $ShipAddress->setPhone($phone);

        // get create new profile
        $createRepProfileAPI = new \DataHead\ByDesignAPI\AutoshipAPI\CreateRepProfile($Credentials, '1114', 1 , $ShipAddress, $StartDate, $StopDate, 'Monthly', $PeriodDay, 1009, 1 , $OverrideShipping, $ShippingTotal);
        $CreateRepProfileResult = $autoShipAPI->CreateRepProfile($createRepProfileAPI)->GetCreateRepProfileResult();
    
        return redirect()->route('/')->with($CreateRepProfileResult);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autoShipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
        $Credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
        $Credentials->setUsername(config('bydesign.username'));
        $Credentials->setPassword(config('bydesign.password'));

        // get profile details
        $profileDetailsAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetProfileDetails($Credentials, $id);
        $profileDetailsResult = $autoShipAPI->GetProfileDetails($profileDetailsAPI)->getGetProfileDetailsResult();
        $profileDetails = $profileDetailsResult;

        //get profile's items
        $itemsAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetProfileItemDetails($Credentials, $id);
        $profileItemResult = $autoShipAPI->GetProfileItemDetails($itemsAPI)->getGetProfileItemDetailsResult();
        $profileItems = $profileItemResult;

        return view('pages.view', ['profileDetails' => $profileDetails,'profileItems' => $profileItems]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('pages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
