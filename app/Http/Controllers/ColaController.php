<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreColaRequest;
use App\Http\Requests\UpdateColaRequest;
use App\Models\Cola;

class ColaController extends Controller
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
     * @param  \App\Http\Requests\StoreColaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cola  $cola
     * @return \Illuminate\Http\Response
     */
    public function show(Cola $cola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cola  $cola
     * @return \Illuminate\Http\Response
     */
    public function edit(Cola $cola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColaRequest  $request
     * @param  \App\Models\Cola  $cola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColaRequest $request, Cola $cola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cola  $cola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cola $cola)
    {
        //
    }
}
