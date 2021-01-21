<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
                        'name'=>'required',
                        'email'=>'required|email' 
                        ]);

         $user=User::create([
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>bcrypt('password')

         ]);

         Session::flash('success','Users created successfully.');
        return redirect()->route('users.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);

        $user->profile->delete;
        $user->delete();

        Session::flash('success','User deleted successfully.');
        return redirect()->route('users.index');
    }

     public function admin($id)
     {
         $user = User::find($id);
         $user->admin=1;

         $user->save();

         Session::flash('success','Permission changed successfully.');
         return redirect()->route('users.index');
     }
     public function not_admin($id)
     {
         $user = User::find($id);
         $user->admin= 0;

         $user->save();

         Session::flash('success','Permission changed successfully.');
         return redirect()->route('users.index');
     }

}
