<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Session;

class NoticeController extends Controller
{
    public function index()
    {
        return view('notices.index')->with('notices',Notice::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.create');
                              
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
              
            'title'=>'required',
            'content'=>'required'
        ]);

        $notice= Notice::create([
          'title'=>$request->title,
          'content'=>$request->content,
          'slug'=>$request->title
        ]);

        Session::flash('success','Notice created successfully.');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('welcome',compact("notice"));
    }

    public function singleNotice($slug){
        $notice = Notice::where('slug',$slug)->first();

        return view('notice-details')
        ->with('notice',$notice);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);

        return view('notices.edit')->with('notice',$notice);
                                                
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

            'title' => 'required',
            'content' => 'required',
        ]);

          $notice = Notice::find($id);

        
              $notice->title = $request->title;
              $notice->content = $request->content;

              $notice->save();
              Session::flash('success','Notice updated successfully.');

              return redirect()->route('notices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notice::destroy($id);
        Session::flash('success','Your notice is deleted.');

        return redirect()->back();
    }
}
