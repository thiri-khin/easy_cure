<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hpatients = Patient::where('patient_hospital','=','Hospitalized')->get();
        $npatients = Patient::where('patient_hospital','=','Not Hospitalized')->get();
        return view('patients.index',compact('hpatients','npatients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'situation' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'hospital' => 'required'
        ]);
        $patients = new Patient;
        $patients->name = request('name');
        $patients->phone = request('phone');
        $patients->address = request('address');
        $patients->remark = request('situation');
        $patients->cured_date = request('date');
        $patients->gender = request('gender');
        $patients->age = request('age');
        $patients->patient_hospital = request('hospital');
         $patients->save();
        return redirect()->route('patients.index');
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
        $patients  = Patient::find($id);
        //get obj
        return view('patients.edit',compact('patients'));
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
            'patientname' => 'required',
            'patientphone' => 'required',
            'patientaddress' => 'required',
            'patientremark' => 'required',
            'patient_cureddate' => 'required',
            'gender' => 'required',
            'patientage' => 'required'
        ]);
        $patients = Patient::find($id);
        $patients->name = request('patientname');
        $patients->phone = request('patientphone');
        $patients->address = request('patientaddress');
        $patients->remark = request('patientremark');
        $patients->cured_date = request('patient_cureddate');
        $patients->gender = request('gender');
        $patients->age = request('patientage');
         $patients->save();
        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);
        $patients->delete();
        return redirect()->route('patients.index');
    }

  public function search($id){
   
    
    $patients = Patient::find($id);
    return view('patients.search', compact('patients'));
  }
}
