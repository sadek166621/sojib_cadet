@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        @isset($student)
        <h1>Update New Student</h1>
          @else
          <h1>Add New Student</h1>
          @endisset

      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="@isset($student){{ route('admin.student.update', $student->id) }}@else{{ route('admin.student.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="col-sm-12">
                <div class="col-sm-12" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" @isset($student) value="{{ $student->first_name }}" @endisset required>
                  </div>
                </div>
                {{-- <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" @isset($student) value="{{$student->last_name}}" @endisset required>
                  </div>
                </div> --}}
              </div>

              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Father's Name</label>
            <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" placeholder="Enter father's Name" @isset($student) value="{{ $student->father_name }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mother's Name</label>
                    <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Mother's Name" @isset($student) value="{{ $student->mother_name }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Guardian Number</label>
                <input type="number" name="guardian_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Guardian Number" @isset($student) value="{{ $student->guardian_number }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Village</label>
                    <input type="text" name="village" class="form-control" id="exampleInputEmail1" placeholder="Enter village" @isset($student) value="{{ $student->village }}" @endisset required>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Upazila</label>
                <input type="text" name="upazila" class="form-control" id="exampleInputEmail1" placeholder="Enter Upazila" @isset($student) value="{{ $student->upazila }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">District</label>
                    <input type="text" name="district" class="form-control" id="exampleInputEmail1" placeholder="Enter District" @isset($student) value="{{ $student->district }}" @endisset required>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Office</label>
                <input type="text" name="post_office" class="form-control" id="exampleInputEmail1" placeholder="Enter Post Office" @isset($student) value="{{ $student->post_office }}" @endisset >
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Code</label>
                    <input type="number" name="post" class="form-control" id="exampleInputEmail1" placeholder="Enter post Code" @isset($student) value="{{ $student->post }}" @endisset >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="col-sm-4" style="float: left">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
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
                </div>
                {{-- <div class="col-sm-4" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Reg Number</label><span style="color:red"> (Must be unique*)</span>
                    <input type="number" name="reg_num" class="form-control" id="exampleInputEmail1" placeholder="Enter Reg Number" @isset($student) value="{{ $student->reg_num }}" @endisset required>
                  </div>
                </div> --}}
                {{-- <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Admission Year</label>
                    <input type="number" name="admission_year" class="form-control" id="exampleInputEmail1" placeholder="Enter admission year" @isset($student) value="{{ $student->admission_year }}" @endisset required>
                  </div>
                </div> --}}

                <div class="col-sm-4" style="float: left">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Section</label>
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


                </div>
                <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Roll Number</label>
                <input type="number" name="roll_num" class="form-control" id="exampleInputEmail1" placeholder="Enter Roll Number" @isset($student) value="{{ $student->roll_num }}" @endisset required>
                      </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Session</label> <span>(For Class 9-10)</span>
                        <select name="session" class="form-control" >
                            <option value="">--Select Session--</option>

                                <option value="1" @isset($student) @if($student->session == 1) selected @endif @endisset>19-20</option>
                                <option value="2" @isset($student) @if($student->session == 2) selected @endif @endisset>20-21</option>
                                <option value="3"@isset($student) @if($student->session == 3) selected @endif @endisset>21-22</option>
                                <option value="4"@isset($student) @if($student->session == 4) selected @endif @endisset>22-23</option>
                                <option value="5"@isset($student) @if($student->session == 5) selected @endif @endisset>23-24</option>
                                <option value="6"@isset($student) @if($student->session == 6) selected @endif @endisset>24-25</option>
                                <option value="7"@isset($student) @if($student->session == 7) selected @endif @endisset>25-26</option>
                                <option value="8"@isset($student) @if($student->session == 8) selected @endif @endisset>26-27</option>
                                <option value="9"@isset($student) @if($student->session == 9) selected @endif @endisset>27-28</option>
                                <option value="10"@isset($student) @if($student->session == 10) selected @endif @endisset>28-29</option>
                                <option value="11"@isset($student) @if($student->session == 11) selected @endif @endisset>29-30</option>
                                <option value="12"@isset($student) @if($student->session == 12) selected @endif @endisset>30-31</option>
                                <option value="13"@isset($student) @if($student->session == 13) selected @endif @endisset>31-32</option>
                                <option value="14"@isset($student) @if($student->session == 14) selected @endif @endisset>32-33</option>
                                <option value="15"@isset($student) @if($student->session == 15) selected @endif @endisset>33-34</option>
                                <option value="16"@isset($student) @if($student->session == 16) selected @endif @endisset>34-35</option>
                                <option value="17"@isset($student) @if($student->session == 17) selected @endif @endisset>35-36</option>
                                <option value="18"@isset($student) @if($student->session == 18) selected @endif @endisset>36-37</option>
                                <option value="19"@isset($student) @if($student->session == 19) selected @endif @endisset>37-38</option>
                                <option value="20"@isset($student) @if($student->session == 20) selected @endif @endisset>38-39</option>
                                <option value="21"@isset($student) @if($student->session == 21) selected @endif @endisset>40-41</option>

                       </select>
                      </div>
                </div>
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Group</label> <span>(For Class 9-10)</span>
                        <select name="devision" class="form-control" >
                          <option value="">--Select Group--</option>

                              <option value="1" @isset($student) @if($student->devision == 1) selected @endif @endisset>Science</option>
                              <option value="2" @isset($student) @if($student->devision == 2) selected @endif @endisset>Commnerce</option>
                              <option value="3"@isset($student) @if($student->devision == 3) selected @endif @endisset>Arts</option>
                              <option value="4"@isset($student) @if($student->devision == 4) selected @endif @endisset>Others</option>


                     </select>
                    </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6" style="float: left">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
            <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" @isset($student) value="{{ $student->phone }}" @endisset required>
                  </div>
                </div>
                <div class="col-sm-6" style="float: left">
                    <div class="form-group">
                        <label for="exampleInputFile">@isset($student) Change student Image @else Choose student Image @endisset</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="form-control" @isset($student) @else required @endisset>
                          </div>
                        </div>
                        @isset($student) <img src="{{ asset('assets') }}/images/uploads/students/{{ $student->image }}" alt="student image" width="100px" height="100px"><br/> @endisset
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Full Address</label>
                {{-- <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" @isset($student) value="{{ $student->phone }}" @endisset required> --}}
                <textarea class="form-control" placeholder="Enter address" name="address" required>
                    @isset($student) {{ $student->address }} @endisset
                </textarea>
              </div>


              <div class="form-check">
                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($student) @if($student->status == 1) checked @endif @else checked @endisset>
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
