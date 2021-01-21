<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leaveroom;
use App\Models\Building;
use App\Models\Floor;
use Session;

class LeaveroomController extends Controller
{
    public function index()
    {
        $leaverooms = Leaveroom::get();
        $buildings = Building::get();
        $floors = Floor::get();
        return view('leaverooms.index'
        ,compact('leaverooms','buildings','floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::all();
        
        $floors = Floor::all();

        if($buildings->count()==0 || $floors->count()==0){
            Session::flash('info','You must have some buildings and floors before attempting to create a allocation');
            return redirect()->back();
        }
        return view('leaverooms.create',
        compact('buildings','floors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'student_name'=>'required',
            'student_id'=>'required',
            'program'=>'required',
            'semester'=>'required',
            'room_no'=>'required',
            'building_id'=>'required',
            'floor_id'=>'required'
        ]);

        $leaveroom= Leaveroom::create([
          'student_name'=>$request->student_name,
          'student_id'=>$request->student_id,
          'program'=>$request->program,
          'semester'=>$request->semester,
          'room_no'=>$request->room_no,
          'building_id'=>$request->building_id,
          'floor_id'=>$request->floor_id,
          'slug'=>$request->student_name
        ]);
        
        return redirect()->back()->with('message_sent','Application submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        Leaveroom::destroy($id);
        Session::flash('success','Application deleted successfully.');
        return redirect()->route('leaverooms.index');
    }

}
