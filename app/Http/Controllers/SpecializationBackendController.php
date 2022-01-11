<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;

class SpecializationBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specializations=Specialization::all();//Mentor is model class

        return view('SpecializationBackend.index',compact('specializations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SpecializationBackend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //Validation
        $request->validate([
            //input name
            'speciality' => 'required',
            
        ]);
        // if file include, upload
        if ($request->hasFile('profile')) {
            $photo = $request->file('profile');
            $filename = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);
            $profile = '/storage/profile/'.$filename;
        }
        //store data
        
        $speciality = new Specialization;
        
        $speciality->speciality = request('speciality');
        $speciality->profile = $profile;
        
        $speciality->save();
        //return
        return redirect()->route('SpecializationBackend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('SpecializationBackend.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speciality = Specialization::find($id);
        //get obj
        return view('SpecializationBackend.edit',compact('speciality'));
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
        //dd($request);
        //Validation
        $request->validate([
            //input name
            'speciality' => 'required',
        ]);
        // if file include, upload
        if ($request->hasFile('profile')) {
            $photo = $request->file('profile');
            $filename = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);
            $profile = '/storage/profile/'.$filename;
        }
        else{
            $profile = request('oldprofile');
        }
        //update data
        $speciality = Specialization::find($id);
        $speciality->speciality = request('speciality');
        $speciality->profile = $profile;
        
        $speciality->save();
        
        //return
        return redirect()->route('SpecializationBackend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speciality = Specialization::find($id);
        $speciality->delete();
        return redirect()->route('SpecializationBackend.index');
    }
}
