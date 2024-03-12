@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<h1>Student</h1>
				<form action="{{ route('student.list') }}" method="get" class="form-inline mb-2">

					<select name="session" id="session" class="form-control" required>
                        <option value="">--Select Session--</option>
                            <option value="1"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 1) selected @else selected @endif>19-20</option>
                            <option value="2"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 2) selected @endif>20-21</option>
                            <option value="3"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 3) selected @endif>21-22</option>
                            <option value="4"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 4) selected @endif>22-23</option>
                            <option value="5"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 5) selected @endif>23-24</option>
                            <option value="6"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 6) selected @endif>24-25</option>
                            <option value="7"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 7) selected @endif>25-26</option>
                            <option value="8"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 8) selected @endif>26-27</option>
                            <option value="9"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 9) selected @endif>27-28</option>
                            <option value="10"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 10) selected @endif>28-29</option>
                            <option value="11"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 11) selected @endif>29-30</option>
                            <option value="12"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 12) selected @endif>30-31</option>
                            <option value="12"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 13) selected @endif>31-32</option>
                            <option value="12"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 14) selected @endif>32-33</option>
                            <option value="12"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 15) selected @endif>33-34</option>
                            <option value="12"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 16) selected @endif>34-35</option>
                            <option value="12"@if(isset($_GET['session']) && $_GET['session'] > 0 && $_GET['session'] == 17) selected @endif>35-36</option>
                   </select>
					<div class="form-group mx-sm-3 ">
						<select class="form-control input-sm" name="devision" >
                            <option value="">--Please Select Group --</option>
                            <option value="1"@if(isset($_GET['devision']) && $_GET['devision'] > 0 && $_GET['devision'] == 1) selected @else selected @endif>Science</option>
                            <option value="2"@if(isset($_GET['devision']) && $_GET['devision'] > 0 && $_GET['devision'] == 2) selected @endif>Commerce</option>
                            <option value="3"@if(isset($_GET['devision']) && $_GET['devision'] > 0 && $_GET['devision'] == 3) selected @endif>Arts</option>
                            <option value="4"@if(isset($_GET['devision']) && $_GET['devision'] > 0 && $_GET['devision'] == 4) selected @endif>Others</option>
                        </select>
					</div>


					<div class="form-group mx-sm-3 mb-2 ">
						<button type="submit" class="btn btn-primary mb-2">Search</button>
					</div>
				</form>
				<table>
					<thead>
						<tr>
							<th>SL No</th>
							<th>Name</th>
							<th>Roll</th>
							<th>Session</th>
							{{-- <th>Group</th> --}}
							{{-- <th>Details</th> --}}
						</tr>
					</thead>
					<tbody>
					@if (count($students) > 0)
						  @foreach ($students as $key => $student)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $student->first_name }}</td>
								<td>{{ $student->roll_num }}</td>
								 <td>
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

                      @endif</td>
								{{-- <td>{{ $student->group->name}}</td> --}}
								{{-- <td><a href="{{ route('teacher.view', $student->username) }}">View details</a></td> --}}
							</tr>
						@endforeach
					@else
						<tr><td colspan="5" class="text-center">No Student found</td></tr>
					@endif
					</tbody>
				</table>
			</div>
		<!-- End News section -->
		<!-- content-left -->
	<!-- End Column 8 -->
			@include('frontend.include.side-bar')
</div>
</div>
</section>


</div><!-- #content -->
@endsection
