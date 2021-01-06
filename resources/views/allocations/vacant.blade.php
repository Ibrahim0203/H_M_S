@extends('admin')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Vacant Rooms
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Room No
                 </th>
                 <th>
                     Building
                 </th>
                 <th>
                     Floor
                 </th>
                 <th>
                     Allocate
                 </th>
                 <th>
                     Delete
                 </th>
             </thead>

             <tbody>
                 @if($allocations->count()>0)
                    
                 @foreach($allocations as $allocation)
                   <tr>
                      <td>
                         {{$allocation->room_no}}
                      </td>
                      <td>
                         {{$allocation->building->name}}
                      </td>
                      <td>
                         {{$allocation->floor->floor}}
                      </td>
                      <td>
                         <a href="{{route('allocations.allocate',[$allocation->id])}}" class="btn btn-xs btn-success">Allocate</a>
                      </td>
                      <td>
                         <a href="{{route('allocations.kill',[$allocation->id])}}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                   </tr>
                 @endforeach

                 @else
                      <tr>
                         <th colspan="5" class="text-center">
                             No Vacant Room.
                         </th>
                      </tr>

                 @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection