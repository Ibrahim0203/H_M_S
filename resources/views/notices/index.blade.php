@extends('admin')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     Published Notices
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Title
                 </th>
                 <th>
                     Edit
                 </th>
                 <th>
                     Delete
                 </th>
             </thead>

             <tbody>
               @if($notices->count()>0)
               @foreach($notices as $notice)
                   <tr>
                      <td>
                         {{$notice->title}}
                      </td>
                      <td>
                         <a href="{{route('notices.edit',[$notice->id])}}" class="btn btn-xs btn-info">Edit</a>
                      </td>
                      <td>
                         <a href="{{route('notices.delete',[$notice->id])}}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                   </tr>
                 @endforeach
                 @else
                 <tr>
                         <th colspan="5" class="text-center">
                             No Published Notices.
                         </th>
                      </tr>

                 @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection