@extends('admin')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Floors
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Floor name
                 </th>
                 <th>
                     Editing
                 </th>
                 <th>
                     Deleting
                 </th>
             </thead>

             <tbody>
             @if($floors->count()>0)
                @foreach($floors as $floor)
                     <tr>
                         <td>
                             {{$floor->floor}}
                         </td>
                         <td>
                             <a href="{{route('floors.edit',[$floor->id])}}" class="btn btn-xs btn-info">
                                Edit
                             </a>
                         </td>
                         <td>
                             <a href="{{route('floors.delete',[$floor->id])}}" class="btn btn-xs btn-danger">
                                Delete
                             </a>
                         </td>
                     </tr>
                 @endforeach
                @else
                       <tr>
                         <th colspan="5" class="text-center">
                             No Floors yet.
                         </th>
                      </tr>

                @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection