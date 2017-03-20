<?php

namespace App\Http\Controllers;

use App\CompoundName;
use Illuminate\Http\Request;

class CompoundNameController extends Controller
{
    /**
     * Creates Compound Name Controller with authorization.
     *
     * @return CompoundNameController
     */
    public function __construct()
    {
        $this->authorizeResource(CompoundName::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CompoundName::all();
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
     * @param  \App\CompoundName  $compoundName
     * @return \Illuminate\Http\Response
     */
    public function show(CompoundName $compoundName)
    {
//         $this->authorize('view', $compoundName);
        return $compoundName;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompoundName  $compoundName
     * @return \Illuminate\Http\Response
     */
    public function edit(CompoundName $compoundName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompoundName  $compoundName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompoundName $compoundName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompoundName  $compoundName
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompoundName $compoundName)
    {
        //
    }
}
