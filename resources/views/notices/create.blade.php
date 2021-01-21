@extends('admin')

@section('content')
     
   @include('includes.errors')   
   
   
   
   <div class="card card-default">
   <div class="card-header">
         Create new Notice.
      </div>
   <div class="card-body">
      <form action="{{ route('notices.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         
         <div class="form-group">
         <label for="title">Title</label>
         <input type="text" name="title" class="form-control">
         </div>

         <div class="form-group">
         <label for="content">Content</label>
         <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
         </div>

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post">
                 Store notice
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@endsection
