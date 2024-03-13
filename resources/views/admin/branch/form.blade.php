@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($branch) Update @else Add New @endisset Branch</h1>
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
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <form action="@isset($branch){{ route('admin.branches.update', $branch->id) }}@else{{ route('admin.branches.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Devision</label>
                        <select name="devision" id="type" class="form-control" required>
                          @isset($branch)
                            <option value="1" @if($branch->devision == 1) selected @endif>Dhaka</option>
                            <option value="2" @if($branch->devision == 2) selected @endif>Chattogram</option>
                            <option value="3" @if($branch->devision == 3) selected @endif>Rajshahi</option>
                            <option value="4" @if($branch->devision == 4) selected @endif>Rangpur</option>
                            <option value="5" @if($branch->devision == 5) selected @endif>Khulna</option>
                            <option value="6" @if($branch->devision == 6) selected @endif>Barishal</option>
                            <option value="7" @if($branch->devision == 7) selected @endif>Sylhet</option>
                            <option value="8" @if($branch->devision == 8) selected @endif>Mymensingh </option>
                          @else
                          <option value="1" selected>Dhaka</option>
                          <option value="2">Chattogram</option>
                          <option value="3">Rajshahi</option>
                          <option value="4">Rangpur</option>
                          <option value="5">Khulna</option>
                          <option value="6">Barishal</option>
                          <option value="7">Sylhet</option>
                          <option value="8">Mymensingh </option>
                          @endisset
                        </select>
                      </div>
                </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Branch</label>
                <input type="text" name="section" class="form-control" id="exampleInputEmail1" required placeholder="Enter section " @isset($branch) value="{{ $branch->section }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="description">Branch Details</label>
                <textarea name="details" id="description" cols="30" rows="10" required class="form-control">@isset($branch) {{ $branch->details }} @endisset</textarea>
              </div>
              <div class="form-check" >
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($branch) @if($branch->status == 1) checked @endif @else checked @endisset>
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

@push('js')
<script>
     $(document).ready(function () {
        $('#description').summernote();
     });
</script>
@endpush
