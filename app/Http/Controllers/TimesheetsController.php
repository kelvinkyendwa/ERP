<?php

namespace App\Http\Controllers;

use App\Timesheets;
use App\Project;
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
        $list = Project::get()->all();
        return view('time.create')->with('list', $list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    //validate inputs
     $this->validate(request(),[

        'project' => 'required',
        'date' => 'required',
        'hours' => 'required',
        'description' => 'required',

     ]);

     //insert into database 

     $time = new Timesheets;
     $time->project = request('project');
     $time->date = request('date');
     $time->hours = request('hours');
     $time->description = request('description');
     $time->save();

     return redirect('time/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function show(Timesheets $timesheets)
    {
        $time = Timesheets::get()->all();
       return view('time/show',compact('time'));
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
