@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Staff List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.staff.add') }}" class="btn btn-info float-right">Add New</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card" id="invoice_wrapper">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('admin.staff.list') }}" method="get" class="form-inline mb-2">
                        <div class="form-group mx-sm-3 mb-2">
                          <select name="location" id="location" class="form-control">
                            <option value="">--Select Location--</option>
                            @foreach ($locations as $location)
                              @isset($_GET['location'])
                                <option value="{{ $location->id }}" @if($_GET['location'] == $location->id) selected @endif>{{ $location->name }}</option>
                              @else
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
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

            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Staff Name</th>
                  <th>Desigantion <br> Staff Class & Location</th>
                  <th>Join Date</th>
                  <th>Phone & Email</th>
                  <th>Image</th>
                  <th>Full Address</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($staffs) > 0)
                  @foreach ($staffs as $key => $staff)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $staff->name }}</td>
                      <td>{{ $staff->designation }} <br> {{ $staff->location->name }} <br> @if($staff->class == 1)
                        <span class=" bg-info">প্রথম শ্রেণী</span>
                      @elseif($staff->class == 2)
                        <span class="badge bg-info">দ্বিতীয় শ্রেণী</span>
                      @elseif($staff->class == 3)
                        <span class="badge bg-info">তৃতীয় শ্রেণী</span>
                      @elseif($staff->class == 4)
                        <span class="badge bg-info">চতুর্থ শ্রেণী</span>
                      @endif</td>
                      <td>{{ $staff->join_date }}</td>
                      <td>{{ $staff->phone }} <br> {{ $staff->email }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/staffs/{{ $staff->image }}" alt="Staff image" width="100px" height="100px">
                      </td>
                     <td>
                      {{ $staff->address }}
                     </td>
                      <td>
                        @if ($staff->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.staff.edit', $staff->id) }}" ><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('admin.staff.delete', $staff->id) }}" ><i style="color: red" class="fas fa-trash"></i> </a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="10" class="text-center">No staff found</td>
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
        var newWindow = window.open('http://127.0.0.1:8000/admin/staff/print-staff');
    
        // Wait for the new window to finish loading (optional)
        newWindow.onload = function() {
            // Trigger the print functionality for the new window
            newWindow.print();
        };
    }
    </script>
@endpush
