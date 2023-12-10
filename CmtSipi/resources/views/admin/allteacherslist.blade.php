@extends('admin.layouts.app')
@section('title')
    <title>All Teachers Information</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content -->
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span>Teachers Information</h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">All Teachers Information</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>name</th>
                <th>Department</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($teachers as $teacher)
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->department}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->phone}}</td>
                <td><img src="{{ asset('storage/' . $teacher->image)}}" height="70px" width="70px"></td>
                <td>
                    <a href="{{route('teachersedit', $teacher->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('deleteprofile', $teacher->id)}}" class="btn btn-danger">Delete</a>
                </td>
                @endforeach
              <tr>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection
