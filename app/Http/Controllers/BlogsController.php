<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Session;

class BlogsController extends Controller
{
    public function index()
    {
        return view('posts.index')->with('posts',Blog::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if($categories->count()==0){
            Session::flash('info','You must have some categories before attempting to create a post');
            return redirect()->back();
        }
        return view('posts.create')->with('categories', $categories);
                              
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
            'featured'=>'required|image',
            'content'=>'required',
            'category_id'=>'required'
        ]);

        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts',$featured_new_name);

        $post= Blog::create([
          'title'=>$request->title,
          'content'=>$request->content,
          'featured'=>'uploads/posts/'.$featured_new_name,
          'category_id'=>$request->category_id,
          'slug'=>$request->title
        ]);

        Session::flash('success','Post created successfully.');
        
        return redirect()->back()->with('message_sent','Your post has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('welcome',compact("post"));
    }

    public function singlePost($slug){
        $post = Blog::where('slug',$slug)->first();

        return view('news-details')
        ->with('post',$post)
        ->with('categories',Category::all());

    }

    public function category($id){

        $category = Category::find($id);

        return view('category')
        ->with('category',$category)
        ->with('categories',Category::all());
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::find($id);

        return view('posts.edit')->with('post',$post)->with('categories',Category::all());
                                                
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
            'category_id' => 'required'
        ]);

          $post = Blog::find($id);

          if($request->hasFile('featured'))
          {
              $featured = $request->featured;

              $featured_new_name = time().$featured->getClientOriginalName();

              $featured->move('uploads/posts',$featured_new_name);

              $post->featured = 'uploads/posts/'.$featured_new_name;
          }

              $post->title = $request->title;
              $post->content = $request->content;
              $post->category_id = $request->category_id;

              $post->save();

         

              Session::flash('success','Post updated successfully.');

              return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Blog::find($id);
        $post->delete();

        Session::flash('success','Your post is deleted.');

        return redirect()->back();
    }


    public function apply()
    {
       return view('apply');
    }
    
}
