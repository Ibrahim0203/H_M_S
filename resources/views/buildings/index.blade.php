@extends('admin')
@section('content')
  
<div class="card card-default">
<div class="card-header">
     Buildings
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Building name
                 </th>
                 <th>
                     Editing
                 </th>
                 <th>
                     Deleting
                 </th>
             </thead>

             <tbody>
             @if($buildings->count()>0)
                @foreach($buildings as $building)
                     <tr>
                         <td>
                             {{$building->name}}
                         </td>
                         <td>
                         <a href="{{route('buildings.edit',[$building->id])}}" class="btn btn-xs btn-info">
                                Edit
                             </a>
                         </td>
                         <td>
                       
                             <a href="{{route('buildings.delete',[$building->id])}}" class="btn btn-xs btn-danger">
                                Delete
                                <form action="/buildings/{{$building->id}}" method="GET">
                               @csrf
                              
                              </form>
                             </a>
                             
                         </td>
                         
                     </tr>
                 @endforeach
                @else
                       <tr>
                         <th colspan="5" class="text-center">
                             No buildings yet.
                         </th>
                      </tr>

                @endif
             </tbody>
        </table>
     </div>
   </div>
@endsection