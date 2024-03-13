@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($pdf) Update @else Add New @endisset Result-PDF</h1>
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
          <form action="@isset($pdf){{ route('admin.result-pdf.update', $pdf->id) }}@else{{ route('admin.result-pdf.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Class</label>
                <input type="text" name="class" class="form-control" id="exampleInputEmail1" placeholder="Enter notice title" @isset($pdf) value="{{ $pdf->title }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Exam Name</label>
                <input type="text" name="exam_name" class="form-control" id="exampleInputEmail1" placeholder="Enter notice title" @isset($pdf) value="{{ $pdf->title }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter notice title" @isset($pdf) value="{{ $pdf->title }}" @endisset required>
              </div>
              <div class="form-group">
                <label for="description">Date</label>
                <input type="date" name="date" class="form-control" id="exampleInputEmail1" placeholder="Enter notice title" @isset($pdf) value="{{ $pdf->date }}" @endisset required>
              </div>
              
              <div class="row">
                <div class="col-sm-12">
                  
                  <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                      <label for="exampleInputFile">
                        @isset($pdf)
                          @if($pdf->file)
                            Change PDF (previous file: <a href="{{ asset('assets/files/uploads/resultpdf') }}/{{ $pdf->file }}" target="_blank"><i class="fas fa-download"></i></a>)
                          @endif
                        @else
                          Import PDF
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
                 
                </div>
              </div>
              <div class="col-sm-4" style="float: left" >
                <div class="form-check mt-3" style="float: right;margin-right: 321px;">
                  <input  type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($pdf) @if($pdf->status == 1) checked @endif @else checked @endisset>
                  <label class="form-check-label" for="exampleCheck1">Active</label>
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