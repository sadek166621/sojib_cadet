@extends('admin.layouts.master')
@section('content')
{{-- <style>
    .card-body{
        background-color: white;
    }
</style> --}}
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Student List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.student.add') }}" class="btn btn-info float-right">Add New</a>
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
                    <form action="{{ route('admin.student.list') }}" method="get" class="form-inline mb-2">
                        <div class="form-group mx-sm-3 mb-2">
                    <select name="class" class="form-control" required>
                        <option value="">--Select Class--</option>

                            <option value="1" @isset($student) @if($student->class == 1) selected @endif @endisset>One</option>
                            <option value="2" @isset($student) @if($student->class == 2) selected @endif @endisset>two</option>
                            <option value="3"@isset($student) @if($student->class == 3) selected @endif @endisset>three</option>
                            <option value="4"@isset($student) @if($student->class == 4) selected @endif @endisset>four</option>
                            <option value="5"@isset($student) @if($student->class == 5) selected @endif @endisset>five</option>
                            <option value="6"@isset($student) @if($student->class == 6) selected @endif @endisset>six</option>
                            <option value="7"@isset($student) @if($student->class == 7) selected @endif @endisset>seven</option>
                            <option value="8"@isset($student) @if($student->class == 8) selected @endif @endisset>eight</option>
                            <option value="9"@isset($student) @if($student->class == 9) selected @endif @endisset>nine</option>
                            <option value="10"@isset($student) @if($student->class == 10) selected @endif @endisset>ten</option>

                   </select>

                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <select class="form-control" name="group_id" id="group_id" required>
                                <option value="">--Select Group--</option>
                                @foreach ($groups as $group)
                                  @isset($student)
                                    <option value="{{ $group->id }}" @if($student->group_id == $group->id) selected @endif>{{ $group->name }}</option>
                                  @else
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                  @endisset
                                @endforeach
                              </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Search</button>

                      </form>
                </div>
                <div class="col-md-6">
                    <a id="invoice_download_btn" class="btn btn-success" style="float: right">
                        Download
                    </a>
                </div>
            </div>

            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Student Name</th>
                  {{-- <th>Last Name</th> --}}
                  <th>Father's name & Mother's name</th>
                  <th>Class</th>
                  <th>Roll</th>
                  <th>Section</th>
                  {{-- <th>Mother's name</th> --}}
                  <th>Guardian & Student Mobile Number</th>
                  {{-- <th>Which School Have Given SSC & Obtunded GPA </th> --}}
                  {{-- <th>Reg</th> --}}
                  <th>Full Address</th>
                  <th>Picture</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($students) > 0)
                  @foreach ($students as $key => $student)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $student->first_name }}</td>
                      <td>{{ $student->father_name }} <br> {{ $student->mother_name }}</td>
                      <td>{{ $student->class }}</td>
                      <td>{{ $student->roll_num }}</td>
                      <td>{{ $student->group->name }}</td>
                      {{-- <td>{{ $student->last_name }}</td> --}}

                      <td>{{ $student->guardian_number }} <br> {{ $student->phone }}</td>
                      {{-- <td>{{ $student->fwshgs }} <br> {{ $student->gpa }}</td> --}}
                      {{-- <td>{{ $student->reg_num }}</td> --}}
                      {{-- <td>
                        @if ($student->session == 1)
                        19-20
                        @elseif ($student->session == 2)
                        20-21
                        @elseif ($student->session == 3)
                        21-22
                        @elseif ($student->session == 4)
                        22-23
                        @elseif ($student->session == 5)
                        23-24
                        @elseif ($student->session == 6)
                        24-25
                        @elseif ($student->session == 7)
                        25-26
                        @elseif ($student->session == 8)
                        26-27
                        @elseif ($student->session == 9)
                        27-28
                        @elseif ($student->session == 10)
                        28-29
                        @elseif ($student->session == 11)
                        29-30
                        @elseif ($student->session == 12)
                        30-31
                        @elseif ($student->session == 13)
                        31-32
                        @elseif ($student->session == 14)
                        32-33
                        @elseif ($student->session == 15)
                        33-34
                        @elseif ($student->session == 16)
                        34-35
                        @elseif ($student->session == 17)
                        35-36

                      @endif</td> --}}
                      <td>{{ $student->address }}</td>
                      <td>
                        <img src="{{ asset('assets') }}/images/uploads/students/{{$student->image}}" alt="student image" width="100px" height="100px">
                      </td>
                      <td>
                        @if ($student->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.student.delete', $student->id) }}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="10" class="text-center">No student found</td>
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

@endpush
