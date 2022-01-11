<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curing_Patient;
use App\Patient;
use App\Room;
use DB;
class CuringPatientSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('curingpatient.search');
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
         $searchval = request('search');
        //dd($searchval);

        
      

          $patients= DB::table('patients')
        ->leftjoin('curing__patients', 'curing__patients.patient_id', '=', 'patients.id')
        ->leftjoin('rooms', 'curing__patients.room_id', '=', 'rooms.id')
        ->where('patients.name','=',$searchval)
        ->get();
      
                return view('curingpatient.cpresult',compact('patients'));
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
        //
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
