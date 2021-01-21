@extends('admin')

@section('content')
     
  @include('includes.errors')   
   
   
   
   <div class="card card-default">
   <div class="card-header">
          Edit Post:{{$notice->title}}
      </div>
   <div class="card-body">
      <form action="{{ route('notices.update',['id'=>$notice->id]) }}" method="post">
         @csrf
         
         <div class="form-group">
         <label for="title">Title</label>
         <input type="text" name="title" value="{{$notice->title}}" class="form-control">
         </div>

         
         <div class="form-group">
         <label for="content">Content</label>
         <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{$notice->content}}</textarea>
         </div>

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post">
                 Update Notice
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@endsection


