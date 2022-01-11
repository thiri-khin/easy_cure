<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\Appointment;
use DB;

class AppointmentFrontendController extends Controller
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
        $specialities = Specialization::all();
        return view('appointment_forntend.create',compact('specialities'));
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
            'name' => 'required|min:5|max:191',
            'phone' => 'required|min:5|max:191',
            'address' => 'required',
            'situation' => 'required',
            'doctor' => 'required',
            'day' => 'required'
        ]);

        $appointment = new Appointment;
        $appointment->name = request('name');
        $appointment->schedule_id = request('day');
        $appointment->phone = request('phone');
        $appointment->address = request('address');
        $appointment->patient_situation = request('situation');
        $appointment->save();
        //return
        return view('appointment_forntend.token_no',compact('appointment'));
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
        //
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
