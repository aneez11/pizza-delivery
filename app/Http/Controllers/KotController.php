<?php

namespace App\Http\Controllers;

use App\Models\Kot;
use App\Http\Requests\StoreKotRequest;
use App\Http\Requests\UpdateKotRequest;

class KotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kot  $kot
     * @return \Illuminate\Http\Response
     */
    public function show(Kot $kot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kot  $kot
     * @return \Illuminate\Http\Response
     */
    public function edit(Kot $kot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKotRequest  $request
     * @param  \App\Models\Kot  $kot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKotRequest $request, Kot $kot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kot  $kot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kot $kot)
    {
        //
    }
}
