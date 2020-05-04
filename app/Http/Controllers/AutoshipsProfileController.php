<?php

namespace App\Http\Controllers;

use DataHead\ByDesignAPI\AutoshipAPI\AddItem;
use DataHead\ByDesignAPI\AutoshipAPI\AddPaymentProfile_CC;
use DataHead\ByDesignAPI\AutoshipAPI\AutoshipAddress;
use DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI;
use DataHead\ByDesignAPI\AutoshipAPI\AutoShipCCProfile;
use DataHead\ByDesignAPI\AutoshipAPI\Credentials;
use DataHead\ByDesignAPI\AutoshipAPI\GetAutoshipItems;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AutoshipsProfileController extends Controller
{
    private $autoShipAPI;
    private $credentials;

    public function __construct()
    {
        $this->autoShipAPI = new AutoShipAPI();
        $this->credentials = new Credentials();
        $this->credentials->setUsername(config('bydesign.username'));
        $this->credentials->setPassword(config('bydesign.password'));
    }

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $requestParams = new GetAutoshipItems($this->credentials, "", "1114", "");
        $items = $this->autoShipAPI->GetAutoshipItems($requestParams);
        return view('pages.create', ['items' => $items->getGetAutoshipItemsResult()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $validatedInput = $request->validate([
            // 'BCNumber' => 'required',
            'startDate' => 'required|date',
            'stopDate' => 'required|date',
            'firstName' => 'required',
            'lastName' => 'required',
            'street1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
            'county' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'items' => 'required',
            'bill_firstName' => 'required',
            'bill_lastName' => 'required',
            'bill_street1' => 'required',
            'bill_city' => 'required',
            'bill_state' => 'required',
            'bill_postalCode' => 'required',
            'cardNumber' => 'required',
            'expMonth' => 'required',
            'expYear' => 'required'
        ]);

        // Create the AutoShip address object
        $autoShipAddress = new AutoshipAddress();
        $autoShipAddress->setFirstname($request->post('firstName'));
        $autoShipAddress->setLastname($request->post('lastName'));
        $autoShipAddress->setStreet1($request->post('street1'));
        $autoShipAddress->setCity($request->post('city'));
        $autoShipAddress->setState($request->post('state'));
        $autoShipAddress->setPostalCode($request->post('postalCode'));
        $autoShipAddress->setCounty($request->post('county'));
        $autoShipAddress->setCountry($request->post('country'));
        $autoShipAddress->setPhone($request->post('phone'));

        if($request->has('street2'))
            $autoShipAddress->setStreet2($request->post('street2'));

        $startDate = Carbon::parse($request->post('startDate'));
        $endDate = Carbon::parse($request->post('stopDate'));

        // get create new profile
        $createRepProfileAPI = new \DataHead\ByDesignAPI\AutoshipAPI\CreateRepProfile($this->credentials, '1114', 1, $autoShipAddress, $startDate, $endDate, 1, $startDate->day, 1009, 1 , "", "");
        $createRepProfileResult = $this->autoShipAPI->CreateRepProfile($createRepProfileAPI)->GetCreateRepProfileResult();

        if($createRepProfileResult->getSuccess() != 1) {
            $requestParams = new GetAutoshipItems($this->credentials, "", "1114", "");
            $items = $this->autoShipAPI->GetAutoshipItems($requestParams);
            return view('pages.create', ['items' => $items])->withErrors(['error' => $createRepProfileResult->getMessage()]);
        }

        // Gets the new profile's ID number
        $profileId = $createRepProfileResult->getMessage();

        // Loop through the products from post and add them to the profile IF the quantity is greater than 0
        foreach ($request->post('items') as $key => $value) {
            if($value <= 0)
                continue;
            $requestParams = new AddItem($this->credentials, $profileId, $key,$value);
            $this->autoShipAPI->AddItem($requestParams);
        }

        $paymentInfo = new AutoShipCCProfile();
        $paymentInfo->setNameOnCard($request->post('bill_firstName') . ' ' . $request->post('bill_last_name'));
        $paymentInfo->setCardNumber($request->post('cardNumber'));
        // $paymentInfo->setExpDate($request->post('cardExpDate'));
        $paymentInfo->setExpDate($request->post('expDate') . '/' . $request->post('expYear'));
        $paymentInfo->setStreet1($request->post('bill_street1'));
        if($request->has('bill_street2'))
            $paymentInfo->setStreet2($request->post('bill_street2'));
        $paymentInfo->setCity($request->post('bill_city'));
        $paymentInfo->setState($request->post('bill_state'));
        $paymentInfo->setPostalCode($request->post('bill_postalCode'));

        $requestParams = new AddPaymentProfile_CC($this->credentials, $profileId, $paymentInfo);
        $this->autoShipAPI->AddPaymentProfile_CC($requestParams);

        return response()->redirectTo("/view-authoship-profile/$profileId");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $autoShipAPI = new AutoShipAPI();
        $Credentials = new Credentials();
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        // get profile details
        $profileDetailsAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetProfileDetails($this->credentials, $id);
        $profileDetailsResult = $this->autoShipAPI->GetProfileDetails($profileDetailsAPI)->getGetProfileDetailsResult();

        //get profile's items
        $itemsAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetProfileItemDetails($this->credentials, $id);
        $profileItemResult = $this->autoShipAPI->GetProfileItemDetails($itemsAPI)->getGetProfileItemDetailsResult();
        $profileItems = $profileItemResult;

        return view('pages.edit', ['profileDetails' => $profileDetailsResult, 'profileItems' => $profileItems]);
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
        $validatedInput = $request->validate([
            // 'BCNumber' => 'required',
            'startDate' => 'required|date',
            'stopDate' => 'required|date',
            'firstName' => 'required',
            'lastName' => 'required',
            'street1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postalCode' => 'required',
            'county' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'items' => 'required',
            'bill_firstName' => 'required',
            'bill_lastName' => 'required',
            'bill_street1' => 'required',
            'bill_city' => 'required',
            'bill_state' => 'required',
            'bill_postalCode' => 'required',
            'cardNumber' => 'required',
            'expMonth' => 'required',
            'expYear' => 'required'
        ]);

        $autoShipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
        $Credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
        $Credentials->setUsername(config('bydesign.username'));
        $Credentials->setPassword(config('bydesign.password'));

        // Update the AutoShip address object
        $autoShipAddress = new \DataHead\ByDesignAPI\AutoshipAPI\UpdateAddress($Credentials, $id, $ShipAddress);
        $autoShipAddress->setFirstname($request->post('firstName'));
        $autoShipAddress->setLastname($request->post('lastName'));
        $autoShipAddress->setStreet1($request->post('street1'));
        $autoShipAddress->setCity($request->post('city'));
        $autoShipAddress->setState($request->post('state'));
        $autoShipAddress->setPostalCode($request->post('postalCode'));
        $autoShipAddress->setCounty($request->post('county'));
        $autoShipAddress->setCountry($request->post('country'));
        $autoShipAddress->setPhone($request->post('phone'));

        if($request->has('street2'))
            $autoShipAddress->setStreet2($request->post('street2'));

        $startDate = Carbon::parse($request->post('startDate'));
        $endDate = Carbon::parse($request->post('stopDate'));

        // get create new profile
        $createRepProfileAPI = new \DataHead\ByDesignAPI\AutoshipAPI\CreateRepProfile($this->credentials, '1114', 1, $autoShipAddress, $startDate, $endDate, 1, $startDate->day, 1009, 1 , "", "");
        $createRepProfileResult = $this->autoShipAPI->CreateRepProfile($createRepProfileAPI)->GetCreateRepProfileResult();

        if($createRepProfileResult->getSuccess() != 1) {
            $requestParams = new GetAutoshipItems($this->credentials, "", "1114", "");
            $items = $this->autoShipAPI->GetAutoshipItems($requestParams);
            return view('pages.create', ['items' => $items])->withErrors(['error' => $createRepProfileResult->getMessage()]);
        }

        // Gets the new profile's ID number
        $profileId = $createRepProfileResult->getMessage();

        // Loop through the products from post and add them to the profile IF the quantity is greater than 0
        foreach ($request->post('items') as $key => $value) {
            if($value <= 0)
                continue;
            $requestParams = new AddItem($this->credentials, $profileId, $key,$value);
            $this->autoShipAPI->AddItem($requestParams);
        }

        $paymentInfo = new AutoShipCCProfile();
        $paymentInfo->setNameOnCard($request->post('bill_firstName') . ' ' . $request->post('bill_last_name'));
        $paymentInfo->setCardNumber($request->post('cardNumber'));
        // $paymentInfo->setExpDate($request->post('cardExpDate'));
        $paymentInfo->setExpDate($request->post('expDate') . '/' . $request->post('expYear'));
        $paymentInfo->setStreet1($request->post('bill_street1'));
        if($request->has('bill_street2'))
            $paymentInfo->setStreet2($request->post('bill_street2'));
        $paymentInfo->setCity($request->post('bill_city'));
        $paymentInfo->setState($request->post('bill_state'));
        $paymentInfo->setPostalCode($request->post('bill_postalCode'));

        $requestParams = new AddPaymentProfile_CC($this->credentials, $profileId, $paymentInfo);
        $this->autoShipAPI->AddPaymentProfile_CC($requestParams);

        return response()->redirectTo("/view-authoship-profile/$id");
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
