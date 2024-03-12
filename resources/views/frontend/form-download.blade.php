@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<article id="post-10">
					<div class="entry">
						@if(count($downloads)>0)
						<table class="newspaper-n">
							<tbody>
								<tr>
									<th align="center">ক্রমিক নং</th>
                                    <th align="center">টাইটেল</th>
									<th align="left">পিডিএফ</th>
									<th align="left">ডাউনলোড</th>

								</tr>
								@foreach ($downloads as $key => $download)
									<tr>
										<td align="center">{{ $key+1 }}</td>
                                        <td align="center">{{ $download->title }}</td>
										<td align="center">{{ $download->file }}</td>
										<td align="center">@if($download->file)
											<a href="{{ asset('assets/files/uploads/form-downloads') }}/{{ $download->file }}" target="_blank"><i class="fa fa-download"></i></a>
										  @endif</td>
									</tr>
								@endforeach
							</tbody>
						</table>

					</div>
					@endif
				</article>


			</div>
		<!-- End News section -->
		<!-- content-left -->
	<!-- End Column 8 -->


			@include('frontend.include.side-bar')
</div>
</div>
</section>


</div>
@endsection
