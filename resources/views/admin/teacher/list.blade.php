@extends('admin.layouts.master')
@section('content')
<style>
    .mb-2:{
        color:white;
    }
</style>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Teacher List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.teacher.add') }}" class="btn btn-info float-right">Add New</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12" >
        <div class="card" id="invoice_wrapper">
          <!-- /.card-header -->
          <div class="card-body" >
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('admin.teacher.list') }}" method="get" class="form-inline mb-2">
                        <div class="form-group mx-sm-3 mb-2">
                          <select name="department" id="department" class="form-control">
                            <option value="">--Select Department--</option>
                            @foreach ($departments as $department)
                              @isset($_GET['department'])
                                <option value="{{ $department->id }}" @if($_GET['department'] == $department->id) selected @endif>{{ $department->name }}</option>
                              @else
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                              @endisset
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Search</button>

                      </form>
                </div>
                <div class="col-md-6">
                    <button onclick="printAnotherPage()" class="btn btn-success" style="float: right">
                        Print
                    </button>
                </div>
            </div>
            
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th> Desigantion & Department</th>
                  <th>Join Date</th>
                  <th>Phone & Email</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($teachers) > 0)
                  @foreach ($teachers as $key => $teacher)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $teacher->name }}</td>
                      <td>{{ $teacher->designation }} <br> {{ $teacher->department->name }} </td>
                      <td>{{ $teacher->join_date }}</td>
                      <td>{{ $teacher->phone }} <br> {{ $teacher->email }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/teachers/{{ $teacher->image }}" alt="Teacher image" width="50px" height="50px">
                      </td>
                      <td>
                        @if ($teacher->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.teacher.delete', $teacher->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="10" class="text-center">No teacher found</td>
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
@endsection

@push('js')
<script src="{{asset('assets-frontend/js/vendor/modernizr-3.6.0.min.js ') }}"></script>
<script src="{{asset('assets-frontend/js/vendor/jquery-3.6.0.min.js ') }}"></script>
   <!-- Invoice JS -->
   <script src="{{asset('assets-frontend')}}/js/invoice/jspdf.min.js"></script>
   <script src="{{asset('assets-frontend')}}/js/invoice/invoice.js"></script>

   <script>
    function printAnotherPage() {
        // Open a new window or tab with the URL of the page you want to print
        var newWindow = window.open('http://127.0.0.1:8000/admin/teacher/print-teacher');
    
        // Wait for the new window to finish loading (optional)
        newWindow.onload = function() {
            // Trigger the print functionality for the new window
            newWindow.print();
        };
    }
    </script>
@endpush
