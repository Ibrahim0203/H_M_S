@extends('admin')

@section('content')
     
   @include('includes.errors')   
   
   
   
   <div class="card card-default">
   <div class="card-header">
          Edit Post:{{$post->title}}
      </div>
   <div class="card-body">
      <form action="{{ route('posts.update',['id'=>$post->id]) }}" method="post">
         {{ csrf_field() }}
         
         <div class="form-group">
         <label for="title">Title</label>
         <input type="text" name="title" value="{{$post->title}}" class="form-control">
         </div>

         <div class="form-group">
         <label for="featured">Featured image</label>
         <input type="file" name="featured" value="{{$post->featured}}" class="form-control" >
         </div>
         
         <div class="form-group">
           <label for="category">Select a category</label>
           <select name="category_id" id="category" class="form-control">

           @foreach($categories as $category)
             <option value="{{$category->id}}"
                   
                   @if($post->category->id==$category->id)
                      selected
                    @endif
             
             > {{$category->name}} </option>
           @endforeach

           </select>
         </div>


         <div class="form-group">
         <label for="content">Content</label>
         <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$post->content}}</textarea>
         </div>

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post">
                 Update Post
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@endsection


