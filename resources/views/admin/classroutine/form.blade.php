@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($classroutine) Update @else Add New @endisset classroutine</h1>
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
          <form action="@isset($classroutine){{ route('admin.classroutine.update', $classroutine->id) }}@else{{ route('admin.classroutine.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">


              <div class="row">
                <div class="col-md-12">

                  {{-- <div style="float: left"> --}}

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" @isset($classroutine) value="{{ $classroutine->title }}" @endisset required>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputFile">
                              @isset($classroutine)
                                @if($classroutine->file)
                                  Change classroutine File (previous file: <a href="{{ asset('assets/files/uploads/classroutines') }}/{{ $classroutine->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                                @endif
                              @else
                                Import classroutine File
                              @endisset
                            </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="classroutine_file" class="form-control @error('classroutine_file') is-invalid @enderror">
                              </div>
                              @error('classroutine_file')
                                  <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputFile">
                              @isset($classroutine)
                                @if($classroutine->file)
                                  Change Syllabus File (previous file: <a href="{{ asset('assets/files/uploads/classroutines') }}/{{ $classroutine->syllabus }}" target="_blank"><i class="fas fa-download"></i></a>)
                                @endif
                              @else
                                Import Syllabus File
                              @endisset
                            </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="syllabus" class="form-control @error('classroutine_file') is-invalid @enderror">
                              </div>
                              @error('classroutine_file')
                                  <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                    </div>


                  {{-- </div> --}}

                </div>
                <div class="row">
                {{-- <div class="col-md-12">
                    <div  style="float: left">
                        <div class="form-check">
                          <input type="checkbox" name="vercity_routine" class="form-check-input" id="" @isset($classroutine) @if($classroutine->vercity_routine == 1) checked @endif @endisset>
                          <label class="form-check-label" for="exampleCheck1">graduate</label>
                        </div>
                      </div>
                </div> --}}
                <div class="col-md-12">
                    <div  style="float: left">
                        <div class="form-check" style="float: right">
                          <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($classroutine) @if($classroutine->status == 1) checked @endif @else checked @endisset>
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
