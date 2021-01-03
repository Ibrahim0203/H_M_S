@extends('layouts.app')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Rooms
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Room Number
                 </th>
                 <th>
                     Editing
                 </th>
                 <th>
                     Deleting
                 </th>
             </thead>

             <tbody>
             @if($rooms->count()>0)
                @foreach($rooms as $room)
                     <tr>
                         <td>
                             {{$room->room_no}}
                         </td>
                         <td>
                         <a href="{{route('rooms.edit',[$room->id])}}" class="btn btn-xs btn-info">
                                Edit
                             </a>
                         </td>
                         <td>
                       
                             <a href="{{route('rooms.delete',[$room->id])}}" class="btn btn-xs btn-danger">
                                Delete
                                <form action="/rooms/{{$room->id}}" method="POST">
                             @csrf
                              @method('DELETE')
                              </form>
                             </a>
                             
                         </td>
                         
                     </tr>
                 @endforeach
                @else
                       <tr>
                         <th colspan="5" class="text-center">
                             No rooms yet.
                         </th>
                      </tr>

                @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection