@extends('admin')
@section('content')
@include('includes.errors')   
      
   <div class="card card-default">
    <div class="card-header">
      Update Building
    </div>
     <div class="card-body">
      <form action="{{route('buildings.update',
      ['id'=>$building->id])}}" method="POST">
      @csrf           
       <div class="text-center">
        <div class="form-group">
         <label for="category">Name</label>
          <input class="form-control" type="text" 
          id="name" name="name" value="{{$building->name}}">
        </div>
       </div>

           <div class="form-group-item">
            <div class="text-center">
             <button class="btn btn-success" type="submit">
                 Update Building
             </button>           
            </div>
           </div>
      </form>
     </div>

   </div>

@endsection