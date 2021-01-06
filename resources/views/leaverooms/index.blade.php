@extends('admin')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     LeaveRoom Applictions
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
                     Student's Name
                 </th>
                 <th>
                     Student's Id
                 </th>

                 <th>
                     Delete
                 </th>
             </thead>

             <tbody>
               @if($leaverooms->count()>0)
               @foreach($leaverooms as $leaveroom)
                   <tr>
                      <td>
                      {{$leaveroom->room_no}}
                      </td>
                      <td>
                      {{$leaveroom->building->name}}
                      </td>
                      <td>
                      {{$leaveroom->floor->floor}}
                      </td>
                      <td>
                      {{$leaveroom->student_name}}
                      </td>
                      <td>
                      {{$leaveroom->student_id}
                      </td>
                      <td>
                         <a href="{{route('leaverooms.delete',[$leaveroom->id])}}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                   </tr>
                 @endforeach
                 @else
                 <tr>
                         <th colspan="5" class="text-center">
                             No Applications.
                         </th>
                      </tr>

                 @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection