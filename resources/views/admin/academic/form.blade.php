@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($academic) Update @else Add New @endisset Acamedic</h1>
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
          <form action="@isset($academic){{ route('admin.academic.update', $academic->id) }}@else{{ route('admin.academic.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter academic title" @isset($academic) value="{{ $academic->title }}" @endisset required>
              </div>


              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-4" style="float: left">
                    <div class="form-check">
                      <label for="description">Academic Type</label>
                      <select name="type" id="type" class="form-control">
                        @isset($academic)
                          <option value="7" @if($academic->type == 7) selected @endif>প্রথম শ্রেণী</option>
                          <option value="8" @if($academic->type == 8) selected @endif>দ্বিতীয় শ্রেণী</option>
                          <option value="9" @if($academic->type == 9) selected @endif>তৃতীয় শ্রেণী</option>
                          <option value="10" @if($academic->type == 10) selected @endif>চতুর্থ শ্রেণী</option>
                          <option value="11" @if($academic->type == 11) selected @endif>পঞ্চম শ্রেণী</option>
                          <option value="4" @if($academic->type == 4) selected @endif>ষষ্ঠ শ্রেণী</option>
                          <option value="5" @if($academic->type == 5) selected @endif>সপ্তম শ্রেণী</option>
                          <option value="6" @if($academic->type == 6) selected @endif>অষ্টম শ্রেণী</option>
                          <option value="1" @if($academic->type == 1) selected @endif>মানবিক বিভাগ</option>
                          <option value="2" @if($academic->type == 2) selected @endif>ব্যবসায়শিক্ষা বিভাগ</option>
                          <option value="3" @if($academic->type == 3) selected @endif>বিজ্ঞান বিভাগ</option>

                        @else
                        <option value="7">প্রথম শ্রেণী</option>
                        <option value="8">দ্বিতীয় শ্রেণী</option>
                        <option value="9">তৃতীয় শ্রেণী</option>
                        <option value="10" >চতুর্থ শ্রেণী</option>
                        <option value="11" >পঞ্চম শ্রেণী</option>
                        <option value="4">ষষ্ঠ শ্রেণী</option>
                        <option value="5">সপ্তম শ্রেণী</option>
                        <option value="6">অষ্টম শ্রেণী</option>
                        <option value="1">মানবিক বিভাগ</option>
                        <option value="2">ব্যবসায়শিক্ষা বিভাগ</option>
                        <option value="3">বিজ্ঞান বিভাগ</option>
                        @endisset
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                      <label for="exampleInputFile">
                        @isset($academic)
                          @if($academic->file)
                            Change academic File (previous file: <a href="{{ asset('assets/files/uploads/academics') }}/{{ $academic->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                          @endif
                        @else
                          Import Academic File
                        @endisset
                      </label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                        </div>
                        @error('file')
                            <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm-4" style="float: left">
                    <div class="form-check mt-3" style="float: left">
                      <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($academic) @if($academic->status == 1) checked @endif @else checked @endisset>
                      <label class="form-check-label" for="exampleCheck1">Active</label>
                    </div>
                  </div>
                </div>
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
