<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllocationController extends Controller
{
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if($categories->count()==0 || $tags->count()==0){
            Session::flash('info','You must have some categories and tags before attempting to create a post');
            return redirect()->back();
        }
        return view('admin.posts.create')->with('categories', $categories);
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
            'category_id'=>'required',

        ]);

        $post= Post::create([
          'title'=>$request->title,
          'category_id'=>$request->category_id,
          'slug'=>$request->title,
        ]);

        Session::flash('success','Post created successfully.');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("admin.posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('admin.posts.edit')->with('post',$post)->with('categories',Category::all());
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
            'category_id' => 'required'
        ]);

          $post = Post::find($id);

          $post->title = $request->title;
          $post->category_id = $request->category_id;

          $post->save();

          Session::flash('success','Post updated successfully.');

          return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success','Your post was just trashed.');

        return redirect()->back();
    }


}
