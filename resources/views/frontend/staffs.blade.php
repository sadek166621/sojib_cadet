@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<article id="post-10">
					<div class="entry">
						@if(count($staffs1st)>0)
						<table class="newspaper-n">
							<caption>প্রথম শ্রেণির (রাজস্ব) কর্মচারীদের তালিকা</caption>
							<tbody>
								<tr>
									<th align="center">ক্রমিক নং</th>
									<th align="left">নাম ও পদবী</th>
									<th align="center">মোবাইল নম্বর</th>
									<th align="center">সংযুক্ত</th>
								</tr>
								@foreach ($staffs1st as $key => $staff)
									<tr>
										<td align="center">{{ $key+1 }}</td>
										<td align="left">{{ $staff->name }}, {{ $staff->designation }}</td>
										<td align="center">{{ $staff->phone }}</td>
										<td align="center">{{ $staff->location->name }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@endif
						@if(count($staffs2nd)>0)
						<table class="newspaper-n">
							<caption>দ্বিতীয় শ্রেণির (রাজস্ব) কর্মচারীদের তালিকা</caption>
							<tbody>
								<tr>
									<th align="center">ক্রমিক নং</th>
									<th align="left">নাম ও পদবী</th>
									<th align="center">মোবাইল নম্বর</th>
									<th align="center">সংযুক্ত</th>
								</tr>
								@foreach ($staffs2nd as $key => $staff)
									<tr>
										<td align="center">{{ $key+1 }}</td>
										<td align="left">{{ $staff->name }}, {{ $staff->designation }}</td>
										<td align="center">{{ $staff->phone }}</td>
										<td align="center">{{ $staff->location->name }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@endif
						@if(count($staffs3rd)>0)
							<table class="newspaper-n">
								<caption>তৃতীয় শ্রেণির (রাজস্ব) কর্মচারীবৃন্দের তালিকা</caption>
								<tbody>
									<tr>
										<th align="center">ক্রমিক নং</th>
										<th align="left">নাম ও পদবী</th>
										<th align="center">মোবাইল নম্বর</th>
										<th align="center">সংযুক্ত</th>
										<th align="center">বিস্তারিত</th>
									</tr>
									@foreach ($staffs3rd as $key => $staff)
										<tr>
											<td align="center">{{ $key+1 }}</td>
											<td align="left">{{ $staff->name }}, {{ $staff->designation }}</td>
											<td align="center">{{ $staff->phone }}</td>
											<td align="center">{{ $staff->location->name }}</td>
											<td align="center">
												<a href="{{ route('staff.view', $staff->username) }}">
													বিস্তারিত দেখুন
												</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@endif
						@if(count($staffs4th)>0)
						<table class="newspaper-n">
							<caption>চতুর্থ শ্রেণির (রাজস্ব) কর্মচারীদের তালিকা</caption>
							<tbody>
								<tr>
									<th align="center">ক্রমিক নং</th>
									<th align="left">নাম ও পদবী</th>
									<th align="center">মোবাইল নম্বর</th>
									<th align="center">সংযুক্ত</th>
									<th align="center">বিস্তারিত</th>
								</tr>
								@foreach ($staffs4th as $key => $staff)
									<tr>
										<td align="center">{{ $key+1 }}</td>
										<td align="left">{{ $staff->name }}, {{ $staff->designation }}</td>
										<td align="center">{{ $staff->phone }}</td>
										<td align="center">{{ $staff->location->name }}</td>
										<td align="center">
											<a href="{{ route('staff.view', $staff->username) }}">
											বিস্তারিত দেখুন
										</a>
									</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						@endif
						<p>* এমএলএসএস (MLSS): Member of the Lowest Sub-ordinate Staff.</p>
						<hr>
					</div>
				</article>


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