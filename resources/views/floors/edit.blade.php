@extends('admin')

@section('content')
   
@include('includes.errors')   
   
   
   <div class="card card-default">
   <div class="card-header">
         Edit Floor:{{$floor->floor}}
      </div>
   <div class="card-body">
      <form action="{{ route('floors.update',$floor)}}" method="post">
         @csrf
         
     <div class="text-center">
     <div class="form-group">
      <label for="floor">Floor</label>
         <input type="text" name="floor" value="{{$floor->floor}}" class="form-control">
      </div>
     </div>

       
        

         <div class="form-group-item">
           <div class="text-center">
               <button class="btn btn-success" method="post" type="submit">
                 Update floor
               </button>           
              </div>
         </div>
      </form>
   </div>

   </div>

@endsection