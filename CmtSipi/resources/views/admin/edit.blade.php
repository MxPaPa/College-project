@extends('admin.layouts.app')
@section('title')
    <title>Update Teacher Profile</title>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content -->
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
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pages/</span>Update Teacher Profile</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Update</h5>
              <small class="text-muted float-end">Update</small>
            </div>
            <div class="card-body">
                <form action="{{ route('update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="teacher_id" value="{{$teacher->id}}" >
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" placeholder="Enter Name" />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Depertment</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      id="department" name="department"
                      placeholder="Enter Depertment" value="{{ $teacher->department }}" required
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Instructor</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      class="form-control"
                      id="instructor" name="instructor"
                      placeholder="Instructor" value="{{ $teacher->instructor }}" required
                    />
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <input
                        type="text"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="example@gmail.com"
                        value="{{ $teacher->email }}" required
                        aria-describedby="basic-default-email2"
                      />
                      <span class="input-group-text" id="basic-default-email2">@example.com</span>
                    </div>
                    <div class="form-text">You can use letters, numbers & periods</div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                  <div class="col-sm-10">
                    <input
                      type="text"
                      id="basic-default-phone"
                      class="form-control phone-mask"
                      placeholder="+880" name="phone" id="phone"
                      value="{{ $teacher->phone }}" required
                      aria-describedby="basic-default-phone"
                    />
                  </div>
                  <div class="row ">
                    <label class="col-sm-2 col-form-label mt-5" for="basic-default-email">Image</label>
                    <div class="col-sm-10">
                    <label for="formFile" class="form-label mt-2">Image</label>
                    <input class="form-control" type="file" name="image" id="image" required />
                  </div>
                </div>
                @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
@endsection
