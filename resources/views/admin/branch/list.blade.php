@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Branch List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.branches.add') }}" class="btn btn-info float-right">Add New</a>
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
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Devison</th>
                  <th>Branch Name</th>
                  <th>Branch Details</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($branches) > 0)
                  @foreach ($branches as $key => $branch)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                        @if ($branch->devision == 1)
                        Dhaka
                        @elseif ($branch->devision == 2)
                        Chattogram
                        @elseif ($branch->devision == 3)
                        Rajshahi
                        @elseif ($branch->devision == 4)
                        Rangpur
                        @elseif ($branch->devision == 5)
                        Khulna
                        @elseif ($branch->devision == 6)
                        Barishal
                        @elseif ($branch->devision == 7)
                        Sylhet
                        @elseif ($branch->devision == 8)
                        Mymensingh
                        @endif
                      </td>
                      <td>{{ $branch->section }}</td>
                      <td>{!! $branch->details !!}</td>
                      <td>
                        @if ($branch->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.branches.edit', $branch->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.branches.delete', $branch->id) }}" onclick="if(!confirm('Are You Sure?')){return false}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No branch found</td>
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
<!-- modal description -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="scrollmodalLabel">News Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="newsDetailsWrapper">
          
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
        $("#newsDetailsWrapper").html(description);
        $("#scrollmodal").modal("show");
    }
  </script>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
  </script>
@endpush