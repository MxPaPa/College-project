@extends('admin.layouts.app')
@section('title')
    <title>All</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages /</span>Teacher Information</h4>

      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">All Teacher Information</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>name</th>
                <th>Department</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>1</td>
                <td>a</td>
                <td>c</td>
                <td>c@gmial.com</td>
                <td>01933</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection
