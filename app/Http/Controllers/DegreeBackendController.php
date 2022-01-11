<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;
use DB;

class DegreeBackendController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees=Degree::all();//Mentor is model class

        return view('DegreeBackend.index',compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DegreeBackend.create');
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
            'degree' => 'required',
            
        ]);
        // if file include, upload
       
        //store data
        
        $degree = new Degree;
        
        $degree->degree = request('degree');
        
        $degree->save();
        //return
        return redirect()->route('DegreeBackend.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('DegreeBackend.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $degree = Degree::find($id);
        //get obj
        return view('DegreeBackend.edit',compact('degree'));
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
            'degree' => 'required',
        ]);
        // if file include, upload
        
        //update data
        $degree = Degree::find($id);
        $degree->degree = request('degree');
        
        $degree->save();
        
        //return
        return redirect()->route('DegreeBackend.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degree = Degree::find($id);
        $degree->delete();
        return redirect()->route('DegreeBackend.index');
    }
}
