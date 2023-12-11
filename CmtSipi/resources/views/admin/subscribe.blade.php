@extends('admin.layouts.app')
@section('title')
    <title> All Subscribe</title>
@endsection
@section('content')
<div class="content-wrapper">
    <p class="alert-success">
        <?php
        $message=Session::get('message');
        if($message)
        {
            echo $message;
            Session::put('message',null);
        }
        ?>
    </p>

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">All Subscribe</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>name</th>
                <th>Email</th>

                <th>Actions</th>
              </tr>
            </thead>
            @foreach($all_subscribe_info as $v_subscribe)
            <tbody class="table-border-bottom-0">
                <td style="text-align: center">{{ $v_subscribe->name }}</td>
                <td style="text-align: center">{{ $v_subscribe->email }}</td>

                <td>
                    <a href="{{url('deletesubscribe', $v_subscribe->email)}}" class="btn btn-danger">Delete</a>
                </td>


                {{-- @foreach ($subscribs as $subscrib)
                <td>{{$subscrib->name}}</td>
                <td>{{$subscrib->email}}</td>
                <td>
                    <a href="{{route('teachersedit', $teacher->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('deleteprofile', $teacher->id)}}" class="btn btn-danger">Delete</a>
                </td>
                @endforeach --}}
              <tr>

              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
@endsection
