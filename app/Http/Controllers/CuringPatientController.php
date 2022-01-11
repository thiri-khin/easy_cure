<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curing_Patient;
use App\Patient;
use App\Room;
use App\User;

class CuringPatientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Curing_Patient::all();
        return view('curingpatient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curingpatient.create');
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
            'blood' => 'required',
            'gurdian' => 'required',
            'startdate' => 'required'
        ]);

        //store data
        $patient = new Curing_Patient;
        $patient->patient_id = request('pid');
        $patient->room_id = request('roomtype');
        $patient->blood_type = request('blood');
        $patient->gurdian = request('gurdian');
        $patient->start_date = request('startdate');
        $patient->save();
        //return
        return redirect()->route('curingpatient.index');
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
        $rooms = Room::all();
        $patient = Patient::find($id);
        return view('curingpatient.edit',compact('patient','rooms'));
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
            'patientid' => 'required',
            'roomid' => 'required',
            'blood' => 'required',
            'gurdian' => 'required',
            'startdate' => 'required'
        ]);
        //store data
        $patient = Curing_Patient::find($id);
        $patient->patient_id = request('patientid');
        $patient->room_id = request('roomid');
        $patient->blood_type = request('blood');
        $patient->gurdian = request('gurdian');
        $patient->start_date = request('startdate');
        $patient->end_date = request('enddate');
        $patient->save();
        //return
        return redirect()->route('curingpatient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Curing_Patient::find($id);
        $patient->delete();
        return redirect()->route('curingpatient.index');

    }
}
