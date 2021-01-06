@extends('admin')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Published Allocation
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Room 
                 </th>
                 <th>
                     Building
                 </th>
                 <th>
                     Floor
                 </th>
                 <th>
                     Student's Name
                 </th>
                 <th>
                     Student's Id
                 </th>
                 <th>
                     Edit
                 </th>
                 <th>
                     Vacant
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
                         {{$allocation->student_name}}
                      </td>
                      <td>
                         {{$allocation->student_id}}
                      </td>
                      <td>
                         <a href="{{route('allocations.edit',[$allocation->id])}}" class="btn btn-xs btn-info">Edit</a>
                      </td>
                      <td>
                         <a href="{{route('allocations.vacant',[$allocation->id])}}" class="btn btn-xs btn-danger">Vacant</a>
                      </td>
                   </tr>
                 @endforeach
                 @else
                 <tr>
                         <th colspan="5" class="text-center">
                             No Allocations Yet.
                         </th>
                      </tr>

                 @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection