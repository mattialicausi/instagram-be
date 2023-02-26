<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStorieRequest;
use App\Http\Requests\UpdateStorieRequest;
use App\Models\Storie;

class StorieController extends Controller
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
     * @param  \App\Http\Requests\StoreStorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Storie  $storie
     * @return \Illuminate\Http\Response
     */
    public function show(Storie $storie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Storie  $storie
     * @return \Illuminate\Http\Response
     */
    public function edit(Storie $storie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStorieRequest  $request
     * @param  \App\Models\Storie  $storie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStorieRequest $request, Storie $storie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Storie  $storie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storie $storie)
    {
        //
    }
}
