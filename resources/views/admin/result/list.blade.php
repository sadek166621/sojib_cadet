@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Result List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.result.add') }}" class="btn btn-info float-right">Add New</a>
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
            {{-- <form action="{{ route('admin.student.list') }}" method="get" class="form-inline mb-2">
              <div class="form-group mx-sm-3 mb-2">
                <select name="department" id="department" class="form-control">
                  <option value="">--Select Department--</option>
                  {{-- @foreach ($departments as $department)
                    @isset($_GET['department'])
                      <option value="{{ $department->id }}" @if($_GET['department'] == $department->id) selected @endif>{{ $department->name }}</option>
                    @else
                      <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endisset
                  @endforeach --}}
                {{-- </select> --}}
              {{-- </div>
              <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form> --}}
            <table id="myTable" class="table table-bordered table-striped display">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Student Name</th>
                  <th>Roll</th>
                  {{-- <th>Reg</th> --}}
                  <th>Class</th>
                  <th>Section</th>
                  <th>Exam</th>
                  <th>Point</th>
                  <th>Grade</th>
                  <th>Pass/Fail</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {{-- @if (count($results) > 0) --}}
                  @foreach ($results as $key => $result)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/students/{{ $result->student->image }}" alt="student image" width="100px" height="100px">
                      </td>
                      <td>{{ $result->student->first_name }}</td>
                      <td>{{ $result->student->roll_num }}</td>
                      <td>
                        {{ $result->student->class }}
                      </td>
                      <td>
                        {{ $result->group->name }}
                     </td>
                     <td>
                        {{ $result->examname->name }}
                     </td>
                          <td>
                            {{ $result->grade }}
                        </td>
                    <td>
                            @if($result->result_status == 1)
                            Pass
                            @else
                            Fail
                            @endif
                    </td>
                      <td>
                        {{ $result->gpa }}
                      </td>
                      <td>
                        @if ($result->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.result.delete', $result->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn "><i class="fas fa-trash" style="color: red;"></i> </a>
                      </td>
                    </tr>
                  @endforeach
                {{-- @else
                    <tr>
                        <td colspan="11" class="text-center">No student found</td>
                    </tr>
                @endif --}}
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

