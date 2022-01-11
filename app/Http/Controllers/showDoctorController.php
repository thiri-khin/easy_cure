<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\Doctor;
use App\Degree;

class showDoctorController extends Controller
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
        $specialization = Specialization::find($id);
        


       $doctors= Doctor::leftjoin('users', 'doctors.user_id', '=', 'users.id')
        ->leftjoin('specializations', 'doctors.speciality_id', '=', 'specializations.id')
        ->leftjoin('schedules', 'schedules.user_id', '=', 'users.id')
       
        ->where('specializations.id','=',$specialization->id)
        ->select('users.name','specializations.speciality','schedules.day','schedules.start_time','schedules.end_time','doctors.*')
        ->get();


       $doctorid= Doctor::leftjoin('users', 'doctors.user_id', '=', 'users.id')
        ->leftjoin('specializations', 'doctors.speciality_id', '=', 'specializations.id')
        ->leftjoin('schedules', 'schedules.user_id', '=', 'users.id')
       
        ->where('specializations.id','=',$specialization->id)
        ->select('doctors.id')
        ->get();

        return view('showdoctors.show',compact('doctors'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
