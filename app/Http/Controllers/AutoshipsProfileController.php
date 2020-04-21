<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\AutoshipAPI;

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
        $credentials->setUsername('Mark');
        $credentials->setPassword('iQ5xzW00BL3wbZs%');
        $result = $autoShipAPI->GetAutoshipProfiles(new \DataHead\ByDesignAPI\AutoshipAPI\GetAutoshipProfiles($credentials, '', 1114, ''));

        return view('pages.index', ['result' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
