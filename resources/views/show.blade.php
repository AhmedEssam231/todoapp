@extends('layout.main')
@push('head')<!—we have created a stack and pushing this header information-->
<title>show</title>
@endpush
@section('main-section')

<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
      <div class="h2">View Todo</div>

  </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Task Name</th>
        <th scope="col">Description</th>
        <th scope="col">Due Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>{{$todo->name}}</td>
        <td>{{$todo->work}}</td>
        <td>{{$todo->duedate}}</td>
      </tr>
     
    </tbody>
  </table>
  <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
  @endsection