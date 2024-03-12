@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Teacher</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="@isset($teacher){{ route('admin.teacher.update', $teacher->id) }}@else{{ route('admin.teacher.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter title" @isset($teacher) value="{{ $teacher->name }}" @endisset required>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="department_id">Department</label>
                    <select class="form-control" name="department_id" id="department_id" required>
                      <option value="">--Select Department--</option>
                      @foreach ($departments as $department)
                        @isset($teacher)
                          <option value="{{ $department->id }}" @if($teacher->department_id == $department->id) selected @endif>{{ $department->name }}</option>
                        @else
                          <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endisset
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Desigantion</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter designation" @isset($teacher) value="{{ $teacher->designation }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Join Date</label>
                    <input type="date" name="join_date" class="form-control" id="exampleInputEmail1" placeholder="Enter join date" @isset($teacher) value="{{ $teacher->join_date }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone no" @isset($teacher) value="{{ $teacher->phone }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" @isset($teacher) value="{{ $teacher->email }}" @endisset required>
              </div>
              <div class="form-group">
                @isset($teacher) <img src="{{ asset('assets') }}/images/uploads/teachers/{{ $teacher->image }}" alt="Teacher image" width="100px" height="100px"><br/> @endisset
                <label for="exampleInputFile">@isset($teacher) Change Teacher Image @else Choose Teacher Image @endisset</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="form-control" @isset($teacher) @else required @endisset>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Full Address</label>
                {{-- <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" @isset($student) value="{{ $student->phone }}" @endisset required> --}}
                <textarea class="form-control" placeholder="Enter address" name="full_address" required>
                    @isset($teacher) {{ $teacher->full_address }} @endisset
                </textarea>
              </div>
              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($teacher) @if($teacher->status == 1) checked @endif @else checked @endisset>
                <label class="form-check-label" for="exampleCheck1">Active</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
