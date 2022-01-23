<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAtencioneRequest;
use App\Http\Requests\UpdateAtencioneRequest;
use App\Models\Atencione;

class AtencioneController extends Controller
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
     * @param  \App\Http\Requests\StoreAtencioneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAtencioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atencione  $atencione
     * @return \Illuminate\Http\Response
     */
    public function show(Atencione $atencione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atencione  $atencione
     * @return \Illuminate\Http\Response
     */
    public function edit(Atencione $atencione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAtencioneRequest  $request
     * @param  \App\Models\Atencione  $atencione
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAtencioneRequest $request, Atencione $atencione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atencione  $atencione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atencione $atencione)
    {
        //
    }
}
