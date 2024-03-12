@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($examroutine) Update @else Add New @endisset Academic Course Plan</h1>
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
          <form action="@isset($examroutine){{ route('admin.examroutine.update', $examroutine->id) }}@else{{ route('admin.examroutine.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">


              <div class="row">
                <div class="col-sm-12">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" @isset($examroutine) value="{{ $examroutine->title }}" @endisset required>
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputFile">
                              @isset($examroutine)
                                @if($examroutine->file)
                                  Change examroutine File (previous file: <a href="{{ asset('assets/files/uploads/examroutines') }}/{{ $examroutine->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                                @endif
                              @else
                                Import examroutine File
                              @endisset
                            </label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="examroutine_file" class="form-control @error('examroutine_file') is-invalid @enderror">
                              </div>
                              @error('examroutine_file')
                                  <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>
                    </div>


                </div>
              </div>
              <div class="row">
                {{-- <div class="col-md-12">
                    <div  style="float: left">
                        <div class="form-check">
                          <input type="checkbox" name="vercity_routine" class="form-check-input" id="" @isset($examroutine) @if($examroutine->vercity_routine == 1) checked @endif @endisset>
                          <label class="form-check-label" for="exampleCheck1">graduate</label>
                        </div>
                      </div>
                </div> --}}
                <div class="col-md-12">
                    <div  style="float: left">
                        <div class="form-check">
                          <input type="checkbox" name="status" class="form-check-input" id="" @isset($examroutine) @if($examroutine->status == 1) checked @endif @else checked @endisset>
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
