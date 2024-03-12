@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Photos</h1>
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
          <form action="@isset($photogallery){{ route('admin.photogallery.update', $photogallery->id) }}@else{{ route('admin.photogallery.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- <div class="col-sm-12" style="float: left">
                    <div class="form-group">
                        @isset($photogallery) <img src="{{ asset('assets') }}/images/uploads/photogallerys/{{ $photogallery->image }}" alt="photogallery image" width="100px" height="100px"><br/> @endisset
                        <label for="exampleInputFile">@isset($photogallery) Change photogallery Image @else Choose photogallery Image @endisset</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="form-control" @isset($photogallery) @else required @endisset>
                          </div>
                        </div>
                      </div>
                </div> --}}
                <div class="form-group">
                    @isset($photogallery) <img src="{{ asset('assets') }}/images/uploads/photogallerys/{{ $photogallery->image }}" alt="photogallery image" width="100px" height="100px"><br/> @endisset
                    <label for="exampleInputFile">@isset($photogallery) Change photogallery Image @else Choose photogallery Image @endisset</label>
                <input type="file" name="image" class="form-control" @isset($photogallery) @else required @endisset>
                </div>

              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($photogallery) @if($photogallery->status == 1) checked @endif @else checked @endisset>
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
