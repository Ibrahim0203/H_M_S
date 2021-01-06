@extends('admin')

@section('content')
  
<div class="card card-default">
<div class="card-header">
     AskRoom Applicants
</div>
     <div class="card-body">
        <table class="table table-hover">
             <thead>
                 <th>
                     Student's Name
                 </th>
                 <th>
                     Student's Id
                 </th>
                 <th>
                     Program
                 </th>
                 <th>
                     Semester
                 </th>
                 <th>
                     Section
                 </th>
                 <th>
                     Email
                 </th>
                 <th>
                     Delete
                 </th>
             </thead>

             <tbody>
               @if($askrooms->count()>0)
               @foreach($askrooms as $askroom)
                   <tr>
                      <td>
                      {{$askroom->name}}
                      </td>
                      <td>
                      {{$askroom->student_id}}
                      </td>
                      <td>
                      {{$askroom->program}}
                      </td>
                      <td>
                      {{$askroom->semester}}
                      </td>
                      <td>
                      {{$askroom->section}}
                      </td>
                      <td>
                      {{$askroom->email}}
                      </td>
                      <td>
                         <a href="{{route('askrooms.delete',[$askroom->id])}}" class="btn btn-xs btn-danger">Delete</a>
                      </td>
                   </tr>
                 @endforeach
                 @else
                 <tr>
                         <th colspan="5" class="text-center">
                             No Applicants.
                         </th>
                      </tr>

                 @endif
             </tbody>
        </table>
     </div>
   </div>
   @endsection