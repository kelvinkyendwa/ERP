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

    public function __construct()
        {
            $this->middleware('auth')->except(['index']);
        }
        
    public function index()
    {
         $time = Timesheets::get()->all();
        return view('time.index')->with('time', $time);
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

        'project_id' => 'required',
        'date' => 'required',
        'hours' => 'required',
        'description' => 'required',

     ]);

     //insert into database 

        auth()->user()->post_timesheet(
                new Timesheets(request(['project_id', 'date' , 'hours', 'description']))
        );
    
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
    public function edit($id)
    {
        $list = Project::get()->all();
        $time = Timesheets::find($id);
        return view('time/edit',compact('time','list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $time = Timesheets::find($id);
        
        //insert into database 
 
             $time->project_id = $request->project_id;
             $time->user_id = auth()->user()->id;
             $time->date = $request->date;
             $time->hours = $request->hours;
             $time->description = $request->description;
             $time->save();

     return redirect('time/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timesheets  $timesheets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $time = Timesheets::find($id);
                $time->delete();
         return redirect()->back();
    }
}
