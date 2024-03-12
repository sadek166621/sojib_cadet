@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<article id="post-10">
					<div class="entry">
						<table class="newspaper-n">
							<tbody>
								<tr>
									<th align="center">SL</th>
									<th align="left">News Title</th>
									<th align="center">Publish Date</th>
									<th align="center">View Details</th>
                                    <th align="center">Attachment</th>
								</tr>
								@if(count($news) > 0)
									@foreach ($news as $key => $data)
										<tr>
											<td align="center">{{ $key+1 }}</td>
											<td align="left">{{ $data->title }}</td>
											<td align="center">{{ date('F j, Y', strtotime($data->created_at)) }}</td>
											<td align="center"><a href="{{ route('news.show', $data->id) }}">View Details</a></td>
                                            <td align="center" class="text-center">
												@if($data->file)
													<a href="{{ asset('assets/files/uploads/news') }}/{{ $data->file }}" target="_blank"><i class="fa fa-download"></i></a>
												@endif
											</td>
                                        </tr>

									@endforeach
								@else
									<tr><td colspan="4" class="text-center">No News found</td></tr>
								@endif
							</tbody>
						</table>
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
