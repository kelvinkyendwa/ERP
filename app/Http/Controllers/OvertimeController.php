<?php

namespace App\Http\Controllers;

use App\Overtime;
use App\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $time = Overtime::get()->all();
        return view('overtime.index')->with('time',$time);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = Project::get()->all();
        return view('overtime.create')->with('list', $list);
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

     $over = new Overtime;
     $over->project = request('project');
     $over->date = request('date');
     $over->hours = request('hours');
     $over->description = request('description');
     $over->save();

return redirect('over/show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function show(Overtime $overtime)
    {
        $over = Overtime::get()->all();
        // $over = Overtime::where('date', Carbon::today());
       return view('overtime.show',compact('over'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Overtime $overtime)
    {
      $list = Project::get()->all();
       return view('overtime.edit', compact('overtime'))->with('list', $list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overtime $overtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overtime $overtime)
    {
        //
    }
}
