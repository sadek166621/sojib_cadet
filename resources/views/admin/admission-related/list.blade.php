@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Regarding admission</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.admission-related.add') }}" class="btn btn-info float-right">Add New</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Class</th>
                  <th>File</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($admissions) > 0)
                  @foreach ($admissions as $key => $admission)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $admission->title }}</td>
                      <td>{{ $admission->class }}</td>

                      <td class="text-center">
                        @if($admission->file)
                          <a href="{{ asset('assets/files/uploads/admission-relateds') }}/{{ $admission->file }}" target="_blank"><i class="fas fa-download"></i></a>
                        @endif
                      </td>

                      <td>
                        @if ($admission->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.admission-related.edit', $admission->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.admission-related.delete', $admission->id) }}" onclick="if(!confirm('Are You Sure?')){return false}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No admission-related found</td>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
{{-- <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Graduate Class Routine</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Attachment</th>
                    <th>Syllabus</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($vercity_routine) > 0)
                    @foreach ($vercity_routine as $key => $examroutine)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $examroutine->title }}</td>

                        <td class="text-center">
                          @if($examroutine->file)
                            <a href="{{ asset('assets/files/uploads/admission-relateds') }}/{{ $examroutine->file }}" target="_blank"><i class="fas fa-download"></i></a>
                          @endif
                        </td>
                        <td class="text-center">
                          @if($examroutine->syllabus)
                            <a href="{{ asset('assets/files/uploads/admission-relateds') }}/{{ $examroutine->syllabus }}" target="_blank"><i class="fas fa-download"></i></a>
                          @endif
                        </td>
                        <td>
                          @if ($examroutine->status == 1)
                            <span class="badge bg-success">Active</span>
                          @else
                            <span class="badge bg-danger">Inactive</span>
                          @endif
                        </td>
                        <td>
                          <a href="{{ route('admin.admission-related.edit', $examroutine->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                          <a href="{{ route('admin.admission-related.delete', $examroutine->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                    @endforeach
                    @else
                    <td colspan="8" class="text-center">No examroutine found</td>
                @endif

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section> --}}
<!-- modal description -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scrollmodalLabel">admission-related Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="admission-relatedDetailsWrapper">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal description -->
@endsection
@push('js')
  <script>
    function descModalShow(id){
        this.event.preventDefault();
        var description = $('#description'+id).html();
        //alert(description);
        $("#admission-relatedDetailsWrapper").html(description);
        $("#scrollmodal").modal("show");
    }
  </script>
@endpush
