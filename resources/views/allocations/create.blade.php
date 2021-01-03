@extends('layouts.app')

@section('content')
     
   @include('includes.errors')   
   
   
   
   <div class="card card-default">
   <div class="card-header">
         Create new allocation.
      </div>
   <div class="card-body">
      <form action="{{ route('allocations.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         
         <div class="form-group">
         <label for="name">Student's Name</label>
         <input type="text" name="name" class="form-control">
         </div>
         
         <div class="form-group">
           <label for="room_no">Select a room</label>
           <select name="room_no_id" id="room_no" class="form-control">

           @foreach($rooms as $room)
             <option value="{{$room->id}}"> {{$room->room_no}} </option>
           @endforeach

           </select>
         </div>

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post">
                 Store Allocation
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@endsection
