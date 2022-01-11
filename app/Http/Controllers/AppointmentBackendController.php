<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Schedule;
use Illuminate\Support\Facades\Auth;

class AppointmentBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::join('schedules','schedules.id','=','appointments.schedule_id')
            ->join('users','users.id','=','schedules.user_id')
            ->where('users.id','=',Auth::user()->id)
            ->select('appointments.*')
            ->get();
        return view('appointment_backend.index',compact('appointments'));
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('appointment_backend.edit',compact('appointment'));
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
            'name' => 'required|min:5|max:191',
            'phone' => 'required|min:5|max:191',
            'address' => 'required',
            'date' => 'required',
            'situation' => 'required',
            'doctor' => 'required',
            'day' => 'required',
            'time' => 'required',
            'hospital' => 'required'
        ]);

        $appointment = Appointment::find($id);
        $appointment->name = request('name');
        $appointment->phone = request('phone');
        $appointment->address = request('address');
        $appointment->appointment_date = request('date');
        $appointment->patient_situation = request('situation');
        $appointment->patient_hospital = request('hospital');
        $appointment->save();
        //return
        return redirect()->route('appointmentbackend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointmentbackend.index');
    }
}
