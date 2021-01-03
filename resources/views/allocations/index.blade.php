@extends('layouts.app')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Published Allocation
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Student's Name
                 </th>
                 <th>
                     Room No
                 </th>
                 <th>
                     Edit
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
                         {{$allocation->name}}
                      </td>
                      <td>
                         {{$room->room_no}}
                      </td>
                      <td>
                         <a href="{{route('allocations.edit',['id'=>$allocation->id])}}" class="btn btn-xs btn-info">Edit</a>
                      </td>
                      <td>
                         <a href="{{route('allocations.delete',['id'=>$allocation->id])}}" class="btn btn-xs btn-danger">Delete</a>
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