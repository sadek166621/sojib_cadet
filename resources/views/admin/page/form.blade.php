@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pages</h1>
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
          <form action="{{ route('admin.page.update', $page->id) }}" method="post" enctype="multipart/form-data"> 
            @csrf
            <div class="card-body">
              
              <!-- ----------------For_Whom_Message-------------- -->
              <h3 class="text-center mt-5">আবাসিক তথ্য<u></u></h3>
              
              <div class="form-group">
                <label for="address">আবাসিক তথ্য</label>
                <textarea name="residential" id="For_Whom_Message" cols="30" rows="10" class="form-control">{{ $page->residential }}</textarea>
              </div>

              <!-- ----------------Some_Features_of_our_Program"-------------- -->
              <h3 class="text-center mt-5"><u>সেরা সাফল্য</u></h3>
              
              <div class="form-group">
                <label for="address">সেরা সাফল্য</label>
                <textarea name="success" id="Some_Features_of_our_Program" cols="30" rows="10" class="form-control">{{ $page->success }}</textarea>
              </div>

              {{-- --------------- Importance_of_Learning_Quran_message---------------- --}}

              <h3 class="text-center mt-5"><u>শাখা আবেদন</u></h3>
              
              <div class="form-group">
                <label for="address">শাখা আবেদন</label>
                <textarea name="section" id="Importance_of_Learning_Quran_message" cols="30" rows="10" class="form-control">{{ $page->section }}</textarea>
              </div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Save Changes</button>
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
        $('#address').summernote();

        $('#Importance_of_Learning_Quran_message').summernote();
        $('#Some_Features_of_our_Program').summernote();
        $('#For_Whom_Message').summernote();
     });
</script>
@endpush
