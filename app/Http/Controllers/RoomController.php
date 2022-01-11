<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Room;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rooms=Room::all();
        return view('rooms.index',compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('rooms.create');
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
        'type'=>'required',
        'room_no'=>'required',
        'price'=>'required'
        ]);
        $rooms=new room();
        $rooms->type=request('type');//req(input name)
        $rooms->room_no=request('room_no');
        $rooms->price=request('price');
        $rooms->save();
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("rooms.detail");

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room=Room::find($id);
        return view('rooms.edit',compact('room'));
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
        'type'=>'required',
        'room_no'=>'required',
        'price'=>'required'
        ]);
        $rooms=Room::find($id);
        $rooms->type=request('type');
        $rooms->room_no=request('room_no');
        $rooms->price=request('price');
        $rooms->save();
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $room=Room::find($id);
    $room->delete();
    return redirect()->route('rooms.index');

        
    }
}
