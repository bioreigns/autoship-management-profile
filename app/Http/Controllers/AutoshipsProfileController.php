<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Autoship as AutoshipResource;

class AutoshipsProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autoShipAPI = new \DataHead\ByDesignAPI\AutoshipAPI\AutoShipAPI();
        $credentials = new \DataHead\ByDesignAPI\AutoshipAPI\Credentials();
        $credentials->setUsername('ChandlerV');
        $credentials->setPassword('1Xh0A@%EX3y1kCj48sSOcy');
        $profiles = $autoShipAPI->GetAutoshipProfiles(new \DataHead\ByDesignAPI\AutoshipAPI\GetAutoshipProfiles($credentials, '', 1114, ''));

        return view('pages.index', ['profiles' => $profiles]);
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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