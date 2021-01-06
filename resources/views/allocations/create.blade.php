@extends('admin')
@section('content')
@include('includes.errors')   
  
   <div class="card card-default">
   <div class="card-header">
         Create New Allocation.
      </div>
   <div class="card-body">
      <form action="{{ route('allocations.store') }}" method="post" enctype="multipart/form-data">
         @csrf
         
         <div class="form-group">
         <label for="student_name">Student's Name</label>
         <input type="text" name="student_name" class="form-control">
         </div>

         <div class="form-group">
         <label for="student_id">Student's Id</label>
         <input type="text" name="student_id" class="form-control">
         </div>
         
         <div class="form-group">
         <label for="program">Program</label>
         <input type="text" name="program" class="form-control">
         </div>

         <div class="form-group">
         <label for="semester">Semester</label>
         <input type="text" name="semester" class="form-control">
         </div>

         <div class="form-group">
         <label for="room_no">Room No</label>
         <input type="text" name="room_no" class="form-control">
         </div>

         <div class="form-group">
           <label for="building_id">Select a Building</label>
           <select name="building_id" id="building_id" class="form-control">

           @foreach($buildings as $building)
             <option value="{{$building->id}}"> {{$building->name}} </option>
           @endforeach

           </select>
         </div>

         <div class="form-group">
           <label for="floor_id">Select a Floor</label>
           <select name="floor_id" id="floor_id" class="form-control">

           @foreach($floors as $floor)
             <option value="{{$floor->id}}"> {{$floor->floor}} </option>
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
