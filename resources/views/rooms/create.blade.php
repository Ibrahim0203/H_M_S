@extends('layouts.app')

@section('content')

   @include('includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Add new room.
      </div>
   <div class="card-body">
      <form method="POST" action="{{route('rooms.index')}}">
         @csrf
         
     <div class="text-center">
     <div class="form-group">
      <label for="room_no">Room No</label>
         <input type="text" name="room_no" class="form-control">
      </div>
     </div>

       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="POST" type="submit">
                 Add category
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@stop