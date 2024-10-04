@extends('layout.main') 

@push('head')<!—we have created a stack and pushing this header information-->
<title>Todo List App</title>
@endpush

@section('main-section')
    


<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> 
<!—flex-direction view with Margin 5-->
        <div class="h2">All Todos</div>

        <a href="{{route('create')}}" class="btn btn-primary btn-lg">Add Todo</a>
</div>
<!-- {{print_r($mytodo)}} -->
<table class="table table-stripped table-dark">
    <tr>
        <th>Task Name</th>
        <th>Description</th>
        <th>Due date</th>
        <th>Action</th>
    </tr>

@foreach($mytodo as $todo)
    <tr valign="middle">
        <td>{{$todo->name}}</td>
        <td>{{$todo->work}}</td>
        <td>{{$todo->duedate}}</td>
        <td>
            
            <a href="{{route('show',$todo->id)}}" class="btn btn-primary">View</a>
            <a href="{{route('edit',$todo->id)}}" class="btn btn-success btn-sm">Update</a>
            <a href="{{route('delete',$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>

        </td>
    </tr>
@endforeach        
</table>
</div>
@endsection