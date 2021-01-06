<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use Session;

class BuildingController extends Controller
{
    public function index()
    {
        $buildings = Building::get();
        return view('buildings.index',
        compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building=Building::create
        ($request->validate([
            'name'=>'required'
        ]));
            
            $building->save();
    
            Session::flash('success','You have successfully created a building.');
            return redirect()->route('buildings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        return view('news',compact('building'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::find($id);

        return view('buildings.edit',
        compact('building'));
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
        $building = Building::find($id);
        $building->name = request()->name;
        $building->update();

        Session::flash('success','You have successfully updated a building.');
        return redirect()->route('buildings.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building=Building::find($id);
          
        foreach($building->allocations as $allocation){
            $allocation->forceDelete();
        }
        
        $building->delete();
         
        Session::flash('success','You have successfully deleted a building.');
        return redirect()->route('buildings.index');
    }
}
