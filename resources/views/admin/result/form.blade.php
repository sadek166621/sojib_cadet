@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Student result</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>
<form action="">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-2">
              <div class="form-group">
                  <label for="exampleInputEmail1">Class</label>
                  <select name="class" id="class" class="form-control" required>
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
            </div>
            {{-- <div class="col-sm-2">
              <div class="form-group">
                  <label for="exampleInputEmail1">Section</label>
                  <select class="form-control" name="section" id="group_id" required>
                      <option value="">--Select Section--</option>
                      @foreach ($groups as $key => $group)
                        @if(isset($_GET['section']) && $_GET['section'] > 0 && $_GET['section'] == $group->id)
                          <option value="{{ $group->id }}" selected>{{ $group->name }}</option>
                        @else
                          <option value="{{ $group->id }}" @if($key == 0) selected @endif>{{ $group->name }}</option>
                        @endif
                      @endforeach
                    </select>
                </div>
              </div> --}}
              <div class="col-sm-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Section</label>
                    <select class="form-control" name="section" id="section" required>
                        <option value="">--Select Section--</option>
                        @foreach ($groups as $group)
                          {{-- @isset($student)
                            <option value="{{ $group->id }}" @if($student->group_id == $group->id) selected @endif>{{ $group->name }}</option>
                          @else --}}
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                          {{-- @endisset --}}
                        @endforeach
                      </select>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Exam</label>
                    <select class="form-control" name="exam" id="exam" required>
                        <option value="">--Select Exam--</option>
                        @foreach ($exams as $exam)
                          {{-- @isset($student)
                            <option value="{{ $exam->id }}" @if($student->exam == $exam->id) selected @endif>{{ $exam->name }}</option>
                          @else --}}
                            <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                          {{-- @endisset --}}
                        @endforeach
                      </select>
                </div>
              </div>

                <div class="col-sm-1 mt-4">
                  <button type="submit" class="btn btn-primary float-right">Search</button>
              </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
</form>

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
          <form action="@isset($result){{ route('admin.result.update', $result->id) }}@else{{ route('admin.result.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            {{-- <div class="card-body">
              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter title" @isset($result) value="{{ $result->name }}" @endisset required>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Roll</label>
                <input type="number" name="roll" class="form-control" id="exampleInputEmail1" placeholder="Enter Roll" @isset($result) value="{{ $result->roll }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Registration Number</label>
                <input type="number" name="reg" class="form-control" id="exampleInputEmail1" placeholder="Enter Registration" @isset($result) value="{{ $result->reg }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-4" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <select name="class" class="form-control" required>
                        <option value="">--Select Class--</option>

                            <option value="1" @isset($result) @if($result->class == 1) selected @endif @endisset>One</option>
                            <option value="2" @isset($result) @if($result->class == 2) selected @endif @endisset>two</option>
                            <option value="3"@isset($result) @if($result->class == 3) selected @endif @endisset>three</option>
                            <option value="4"@isset($result) @if($result->class == 4) selected @endif @endisset>four</option>
                            <option value="5"@isset($result) @if($result->class == 5) selected @endif @endisset>five</option>
                            <option value="6"@isset($result) @if($result->class == 6) selected @endif @endisset>six</option>
                            <option value="7"@isset($result) @if($result->class == 7) selected @endif @endisset>seven</option>
                            <option value="8"@isset($result) @if($result->class == 8) selected @endif @endisset>eight</option>
                            <option value="9"@isset($result) @if($result->class == 9) selected @endif @endisset>nine</option>
                            <option value="10"@isset($result) @if($result->class == 10) selected @endif @endisset>ten</option>
                            <option value="11"@isset($result) @if($result->class == 11) selected @endif @endisset>eleven</option>
                            <option value="12"@isset($result) @if($result->class == 12) selected @endif @endisset>twelve</option>

                   </select>
                  </div>
                </div>
                <div class="col-sm-4" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Group</label>
                    <select class="form-control" name="section" id="group_id" required>
                        <option value="">--Select Group--</option>
                        @foreach ($groups as $group)
                          @isset($result)
                            <option value="{{ $group->id }}" @if($result->section == $group->id) selected @endif>{{ $group->name }}</option>
                          @else
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                          @endisset
                        @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-sm-4" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Exam</label>
                    <select class="form-control input-sm" name="exam">
                        <option value="" selected="selected">--Please Select Exam --</option>
                        <option value="1"@isset($result) @if($result->exam == 1) selected @endif @endisset>1st Term Examination</option>
                        <option value="2"@isset($result) @if($result->exam == 2) selected @endif @endisset>2nd Term Exam</option>
                        <option value="3"@isset($result) @if($result->exam == 3) selected @endif @endisset>1nd Year First Class Test</option>
                        <option value="4"@isset($result) @if($result->exam == 4) selected @endif @endisset>1nd Year 2nd Class Test</option>
                        <option value="5"@isset($result) @if($result->exam == 5) selected @endif @endisset>2nd Year First Class Test</option>
                        <option value="6"@isset($result) @if($result->exam == 6) selected @endif @endisset>2nd Year 2nd Class Test</option>
                        <option value="7"@isset($result) @if($result->exam == 7) selected @endif @endisset>Annual Examination</option>
                        <option value="8"@isset($result) @if($result->exam == 8) selected @endif @endisset>Half Yearly Exam</option>
                        <option value="9"@isset($result) @if($result->exam == 9) selected @endif @endisset>Pre-test Examination</option>
                        <option value="10"@isset($result) @if($result->exam == 10) selected @endif @endisset>Preparatory Examination</option>
                        <option value="11"@isset($result) @if($result->exam == 11) selected @endif @endisset>Test Examination</option>
                    </select>
                </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gpa</label>
                <input type="text" name="gpa" class="form-control" id="exampleInputEmail1" placeholder="Enter Gpa" @isset($result) value="{{ $result->gpa }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Grade</label>
                <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="Enter Grade" @isset($result) value="{{ $result->grade }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                @isset($result) <img src="{{ asset('assets') }}/images/uploads/results/{{ $result->image }}" alt="result image" width="100px" height="100px"><br/> @endisset
                <label for="exampleInputFile">@isset($result) Change result Image @else Choose result Image @endisset</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" class="form-control" @isset($result) @else required @endisset>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Comment</label>
                <textarea type="text" name="comment" class="form-control" id="comments" placeholder="Enter Comment">
                    @isset($result){{ $result->comment }} @endisset
                </textarea>
              </div>
              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input"  @isset($result) @if($result->status == 1) checked @endif @else checked @endisset>
                <label class="form-check-label" for="exampleCheck1">Active</label>
              </div>
            </div> --}}
            <!-- /.card-body -->
            <input type="hidden" name="exam" value="@isset($_GET['exam']) {{ $_GET['exam'] }} @endisset">
            <input type="hidden" name="class" value="@isset($_GET['class']) {{ $_GET['class'] }} @endisset">
            <input type="hidden" name="section" value="@isset($_GET['section']) {{ $_GET['section'] }} @endisset">
            <table class="table table-bordered table-striped display">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Student Name</th>
                    <th>Roll</th>
                    <th>Exam</th>
                    <th>Point</th>
                    <th>Grade</th>
                    <th>Comment</th>

                  </tr>
                </thead>
                <tbody>
                  @if (count($results) > 0)
                    @foreach ($results as $key => $result)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                          <img src="{{ asset('assets') }}/images/uploads/students/{{ $result->student->image }}" alt="student image" width="50px" height="50px">
                        </td>
                        <td>{{ $result->student->first_name }} {{ $result->student->last_name }}</td>
                        <td>
                            <input type="text" name="roll" class="form-control" value="{{ $result->student->roll_num }}" id="exampleInputEmail1" placeholder="Enter Roll" readonly>
                            <input type="hidden" name="student_id[]" value="{{ $result->student_id }}">
                            <input type="hidden" name="result_id[]" value="{{ $result->id }}">
                            {{-- <input type="hidden" name="section_id[]" value="{{ $result->section }}"> --}}
                        </td>
                        {{-- <td>{{ numberToText($result->class) }}</td> --}}
                        {{-- <td>{{ $result->section }}</td> --}}
                        <td>
                            <select class="form-control input-sm" name="result_status[]">
                                <option value="" selected="selected">--Please Select Status --</option>
                                <option value="1" @if($result->result_status == 1) selected @endif>Pass</option>
                                <option value="0" @if($result->result_status == 0) selected @endif>Fail</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="gpa[]" class="form-control" id="exampleInputEmail1" placeholder="Enter Gpa" value="{{ $result->gpa }}" required>
                        </td>
                        <td>
                            <input type="text" name="grade[]" class="form-control" id="exampleInputEmail1" placeholder="Enter Grade" value="{{ $result->grade }}" required>
                        </td>
                        <td>
                            <input type="text" name="comment[]" class="form-control" id="exampleInputEmail1" placeholder="Enter Grade" value="{{ $result->comment }}" required>
                        </td>

                        {{-- <td>
                          @if ($result->status == 1)
                            <span class="badge bg-success">Active</span>
                          @else
                            <span class="badge bg-danger">Inactive</span>
                          @endif
                        </td> --}}
                        {{-- <td>
                          <a href="{{ route('admin.result.edit', $result->id) }}" class="btn "><i class="fas fa-edit"></i> </a>
                          <a href="{{ route('admin.result.delete', $result->id) }}" class="btn "><i class="fas fa-trash" style="color: red;"></i> </a>
                        </td> --}}
                      </tr>
                    @endforeach
                  @else
                      <td colspan="10" class="text-center">No student found</td>
                  @endif
                </tbody>
              </table>
            <div class="card-footer">
              <a href="{{ route('admin.result.list') }}" class="btn btn-warning float-left"><i class="fas fa-arrow-left"></i> View List</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>

            @if (count($results) == 0 && isset($_GET['class']))
            <form action="{{ route('admin.result.createResult') }}" method="POST">
                @csrf
                <div class="row pb-3">
                    <div class="col-4"></div>
                    <div class="col-3">
                        <div class="d-flex content-justify-center">
                            <input type="hidden" name="result_class" value="{{ $_GET['class'] }}">
                            <input type="hidden" name="result_exam" value="{{ $_GET['exam'] }}">
                            <input type="hidden" name="result_section"  value="{{ $_GET['section'] }}">
                            {{-- <input type="hidden" name="result_section" id="result_section"> --}}
                            <button type="submit" class="form-control btn btn-success">Create Result</button>
                        </div>
                    </div>
                </div>
            </form>
            @endif
        </div>
        <!-- /.card -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
{{-- @push('js')
<script>
     $(document).ready(function () {
        $('#comments').summernote();

        $('#result_class').val($('#class').val());
        $('#result_exam').val($('#exam').val());
        $('#result_section').val($('#section').val());
     });
</script>
@endpush --}}
