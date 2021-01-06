<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Floor;
use App\Models\Allocation;
use Session;

class AllocationController extends Controller
{
    public function index()
    {
        $allocations = Allocation::get();
        $buildings = Building::get();
        $floors = Floor::get();
        return view('allocations.index'
        ,compact('allocations','buildings','floors'));
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
        return view('allocations.create',
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

        $allocation= Allocation::create([
          'student_name'=>$request->student_name,
          'student_id'=>$request->student_id,
          'program'=>$request->program,
          'semester'=>$request->semester,
          'room_no'=>$request->room_no,
          'building_id'=>$request->building_id,
          'floor_id'=>$request->floor_id,
          'slug'=>$request->student_name
        ]);

        Session::flash('success','Allocation created successfully.');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Allocation $allocation)
    {
        return view("allocations.show",compact('allocation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allocation = Allocation::find($id);
        $buildings = Building::get();
        $floors = Floor::get();

        return view('allocations.edit',compact('allocation','buildings','floors'));
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
        $this->validate($request, [
              
            'student_name'=>'required',
            'student_id'=>'required',
            'program'=>'required',
            'semester'=>'required',
            'room_no'=>'required',
            'building_id'=>'required',
            'floor_id'=>'required'
        ]);

          $allocation = Allocation::find($id);

          $allocation->student_name = $request->student_name;
          $allocation->student_id = $request->student_id;
          $allocation->program = $request->program;
          $allocation->semester = $request->semester;
          $allocation->room_no = $request->room_no;
          $allocation->building_id = $request->building_id;
          $allocation->floor_id = $request->floor_id;
          $allocation->slug = $request->student_name;

          $allocation->update();
          Session::flash('success','Allocation updated successfully.');
          return redirect()->route('allocations.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allocation = Allocation::find($id);
        $allocation->delete();

        Session::flash('success','The room became vacant.');

        return redirect()->back();
    }

    public function vacantindex()
    {
        $allocations = Allocation::onlyTrashed()->get();
        
        return view('allocations.vacant',compact('allocations'));
    }

    public function kill($id)
    {
        $allocation = Allocation::withTrashed()->where('id',$id)->first();

        $allocation->forceDelete();
        
         Session::flash('success','Allocation deleted permanently.');

        return redirect()->back();
    }

    public function allocate($id)
    {
        $allocation = Allocation::withTrashed()->where('id',$id)->first();

        $allocation->restore();
        
         Session::flash('success','Allocation created successfully.');

        return redirect()->route('allocations.index');
    }

}
