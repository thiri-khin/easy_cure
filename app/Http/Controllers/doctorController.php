<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use App\Degree;
use App\Specialization;
use DB;
use Auth;

class doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialities = Specialization::all();

         return view('frontend.about',compact('specialities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialities = Specialization::all();
        $degrees = Degree::all();

        $searchvals = request('speciality');
        //dd($searchvals);

        $doctorss= Doctor::leftjoin('users', 'doctors.user_id', '=', 'users.id')
        ->leftjoin('specializations', 'doctors.speciality_id', '=', 'specializations.id')
        ->where('specializations.id','=',$searchvals)
        ->select('doctors.*','specializations.speciality','users.name','users.email')
        ->get();
        return view('doctors.dresult',compact('specialities','doctorss','searchvals'));
        //return view('specializeds.sresult',compact('specialities','doctorss'));
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
