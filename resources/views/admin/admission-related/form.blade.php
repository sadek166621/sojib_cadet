@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($admission) Update @else Add New @endisset admission-related</h1>
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
          <form action="@isset($admission){{ route('admin.admission-related.update', $admission->id) }}@else{{ route('admin.admission-related.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">

                  {{-- <div style="float: left"> --}}

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" @isset($admission) value="{{ $admission->title }}" @endisset required>
                          </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Class</label>
                            <input type="text" name="class" class="form-control" id="exampleInputEmail1" placeholder="Enter Class" @isset($admission) value="{{ $admission->class }}" @endisset required>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputFile">
                              @isset($admission)
                                @if($admission->file)
                                  Change admission-related File (previous file: <a href="{{ asset('assets/files/uploads/admission-relateds') }}/{{ $admission->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                                @endif
                              @else
                                Import admission-related File
                              @endisset
                            </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="file" class="form-control @error('admission-related_file') is-invalid @enderror">
                              </div>
                              @error('admission-related_file')
                                  <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                    </div>
                </div>
                <div class="row">
                {{-- <div class="col-md-12">
                    <div  style="float: left">
                        <div class="form-check">
                          <input type="checkbox" name="vercity_routine" class="form-check-input" id="" @isset($admission) @if($admission->vercity_routine == 1) checked @endif @endisset>
                          <label class="form-check-label" for="exampleCheck1">graduate</label>
                        </div>
                      </div>
                </div> --}}
                <div class="col-md-12">
                    <div  style="float: left">
                        <div class="form-check" style="float: left">
                          <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($admission) @if($admission->status == 1) checked @endif @else checked @endisset>
                          <label class="form-check-label" for="exampleCheck1">Active</label>
                        </div>
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
