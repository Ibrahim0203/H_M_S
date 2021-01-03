@extends('layouts.app')

@section('content')
   
@include('includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Update Room
      </div>
   <div class="card-body">
      <form action="{{route('rooms.update',['id'=>$room->id])}}" method="POST">
         @csrf
             
        <div class="text-center">
         <div class="form-group">
           <label for="room_no">Room No</label>
             <input class="form-control" type="text" id="room_no" name="room_no" value="{{$room->room_no}}">
            </div>
         </div>

       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" type="submit">
                 Update Room
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@endsection