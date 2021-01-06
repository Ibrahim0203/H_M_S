<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Askroom;
use Session;

class AskroomController extends Controller
{
    public function index()
    {
        return view('askrooms.index')->with('askrooms',Askroom::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('askrooms.create');
                              
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
            'name'=>'required',
            'student_id'=>'required',
            'program'=>'required',
            'semester'=>'required',
            'section'=>'required',
            'email'=>'required|email'
        ]);

        $askroom=Askroom::create([
          'name'=>$request->name,
          'student_id'=>$request->student_id,
          'program'=>$request->program,
          'semester'=>$request->semester,
          'section'=>$request->section,
          'email'=>$request->email,
          'slug'=>$request->name
        ]);
        
        return redirect()->back()->with('message_sent','Application submitted successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $askroom = Askroom::find($id);
        $askroom->delete();

        Session::flash('success','Application is deleted.');

        return redirect()->back();
    }
}
