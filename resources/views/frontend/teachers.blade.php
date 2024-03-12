@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<h1>Teachers</h1>
				<form action="{{ route('teacher.list') }}" method="get" class="form-inline mb-2">
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
					<div class="form-group mx-sm-3 mb-2">
						<button type="submit" class="btn btn-primary mb-2">Search</button>
					</div>
				</form>
				<table>
					<thead>
						<tr>
							<th>SL No</th>
							<th>Name</th>
							<th>Department</th>
							<th>Designation</th>
							<th>Details</th>
						</tr>
					</thead>
					<tbody>
					@if (count($teachers) > 0)
						  @foreach ($teachers as $key => $teacher)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $teacher->name }}</td>
								<td>{{ $teacher->department->name }}</td>
								<td>{{ $teacher->designation }}</td>
								<td><a href="{{ route('teacher.view', $teacher->username) }}">View details</a></td>
							</tr>
						@endforeach
					@else
						<tr><td colspan="5" class="text-center">No teacher found</td></tr>
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