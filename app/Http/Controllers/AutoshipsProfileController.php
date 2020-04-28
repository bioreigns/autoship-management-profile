<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Autoship as AutoshipResource;

class AutoshipsProfileController extends Controller
{

    // public function __construct($Credentials, $ProfileID, $RepNumber, $CustomerNumber)
    // {
    //     // $Credentials->autoshipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
    //     // $credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
    //     $this->Credentials = $Credentials;
    //     $this->ProfileID = $ProfileID;
    //     $this->RepNumber = $RepNumber;
    //     $this->CustomerNumber = $CustomerNumber;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoShipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
        $Credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
        $Credentials->setUsername(config('bydesign.username'));
        $Credentials->setPassword(config('bydesign.password'));
        
        $profileAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetAutoshipProfiles($Credentials, '1114', '');
        $profiles = $autoShipAPI->GetAutoshipProfiles($profileAPI)->getGetAutoshipProfilesResult();

        // $profileItemsID = array();

        foreach($profiles as $profileid){

            $id = $profileid->getProfileID();

            // dd($id);

            $itemsAPI = new \DataHead\ByDesignAPI\AutoshipAPI\GetProfileItemDetails($Credentials, $id);
            $profileItems = $autoShipAPI->GetProfileItemDetails($itemsAPI)->getGetProfileItemDetailsResult();

            return view('pages.index', ['profiles' => $profiles , 'profileItems' => $profileItems]);
        }

        //  return view('pages.index', ['profiles' => $profiles , 'profileItems' => $profileItems]);
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


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages.view');
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
