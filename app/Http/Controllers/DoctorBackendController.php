<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\User; 
use App\Specialization;
use App\Degree;
use Illuminate\Support\Facades\Hash;
use Auth;

class DoctorBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();//Mentor is model class

        return view('DoctorBackend.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $specializations=Specialization::all();
        $degree=Degree::all();
        return view('DoctorBackend.create',compact('specializations','degree'));

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
            'speciality' => 'required',
            'doctorFee' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required'
        ]);

        $user = new User;
        $user->name =request('name');
        $user->email =request('email');
        $user->password =Hash::make(request('password'));
        $user->save();
        $user->assignRole('Doctor');

        /*$this->guard()->login($user);*/
        
        $degree=request('degrees');

        $doctor = new Doctor;

        $doctor->user_id = $user->id;
        $doctor->speciality_id = request('speciality');
        $doctor->phone = request('phone');
        $doctor->doctorFee = request('doctorFee');
        $doctor->address = request('address');
        $doctor->save();

        foreach ($degree as $degreedd) {
            $doctor->degrees()->attach($degreedd);
        }
        
        return redirect()->route('DoctorBackend.index');
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
        $doctor = Doctor::find($id);
        //obj
        return view('DoctorBackend.edit',compact('doctor')); //d ('mentor') ka apaw ka $mentor
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
        //return view('mentors.update'); 
         //dd($request);
        //validation
         $request->validate([
            //input name
            'name' => 'required|min:5|max:191',
            'speciality' => 'required',
            'doctorFee' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required'
        ]);

        $user = User::find(request('user_id'));

        $user->name =request('name');
        $user->email =request('email');
        $user->password =request('password');
        $user->save();
       
        $degree=request('degrees');

        $doctor = Doctor::find($id);

        $doctor->user_id = $user->id;
        $doctor->speciality_id = request('speciality');
        $doctor->phone = request('phone');
        $doctor->doctorFee = request('doctorFee');
        $doctor->address = request('address');
        $doctor->save();

        
        
        return redirect()->route('DoctorBackend.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('DoctorBackend.index');
    }

    /*protected function guard()
    {
        return Auth::guard();
    }*/
}
