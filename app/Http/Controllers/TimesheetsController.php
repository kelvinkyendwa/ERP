<?php

namespace App\Http\Controllers;

use App\Timesheets;
use Illuminate\Http\Request;

class TimesheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('time.index');
    }

    
    public function create()
    {
        return view('time.create');
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
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function show(Timesheets $timesheets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function edit(Timesheets $timesheets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timesheets $timesheets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timesheets $timesheets)
    {
        //
    }
}
