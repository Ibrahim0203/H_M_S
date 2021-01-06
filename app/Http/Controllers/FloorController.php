<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor;
use Session;

class FloorController extends Controller
{
    public function index()
    {
        $floors = Floor::get();
        return view('floors.index',
        compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('floors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'floor'=>'required'
        ]);

        Floor::create([
             'floor'=>$request->floor
        ]);

        Session::flash('success','Floor created successfully.');
        return redirect()->route('floors.create');
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
        $floor=Floor::find($id);

        return view('floors.edit',compact('floor'));
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
        $floor = Floor::find($id);
        $floor->floor = request()->floor;
        $floor->update();

        Session::flash('success','You have successfully updated a floor.');
        return redirect()->route('floors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Floor::destroy($id);
        Session::flash('success','Floor deleted successfully.');
        return redirect()->route('floors.index');
    }
}
