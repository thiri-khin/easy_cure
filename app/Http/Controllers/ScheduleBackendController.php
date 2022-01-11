<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Doctor;
use App\Specialization;
use DB;

class ScheduleBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();//Mentor is model class

        return view('ScheduleBackend.index',compact('schedules'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specializations=Specialization::all();
        $doctors = Doctor::all();
        return view('ScheduleBackend.create',compact('specializations','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //input name
            'speciality' => 'required',
            'doctor' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $schedule = new Schedule;
        $schedule->user_id =request('doctor');
        $schedule->day =request('day');
        $schedule->start_time =request('start_time');    
        $schedule->end_time = request('end_time');
        $schedule->save();
        
        return redirect()->route('ScheduleBackend.index');
    }

    /**
     * Display the specified resource.
   create  *
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
        $schedule = Schedule::find($id);
        return view('ScheduleBackend.edit',compact('schedule'));
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
        $request->validate([
            //input name
            'doctor' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $schedule = Schedule::find($id);
        $schedule->user_id =request('doctor');
        $schedule->day =request('day');
        $schedule->start_time =request('start_time');
        $schedule->end_time =request('end_time');
        $schedule->save();
        
        return redirect()->route('ScheduleBackend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();
        return redirect()->route('ScheduleBackend.index');
    }
}
