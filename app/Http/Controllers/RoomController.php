<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::get();
        return view('admin.room.index',['rooms'=>$rooms]);

    }

    public function show($id)
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
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       $room=Room::create($request->validate([
            'room_no'=>'required'
        ]));
        $room->save();

        Session::flash('success','You have successfully added a room');
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);

        return view('admin.rooms.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $room = Room::find($id);
        $room->room_no = request()->room_no;
        $room->update();

        Session::flash('success','You have successfully updated a room.');
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
         
        Session::flash('success','You have successfully deleted a room.');
        return redirect()->route('rooms.index');
    }
}
