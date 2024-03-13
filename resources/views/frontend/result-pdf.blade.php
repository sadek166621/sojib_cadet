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
									<th align="left">Class</th>
									<th align="center">Exam Name</th>
									<th align="center">Title</th>
									<th align="center">Date</th>
									<th align="center">Attachment</th>
								</tr>
								@if(count($pdfs) > 0)
									@foreach ($pdfs as $key => $pdf)
										<tr>
											<td align="center">{{ $key+1 }}</td>
											<td align="left">{{ $pdf->class }}</td>
											<td align="left">{{ $pdf->exam_name }}</td>
											<td align="left">{{ $pdf->title }}</td>
											<td align="left">{{ $pdf->date }}</td>
											<td align="center" class="text-center">
												@if($pdf->file)
                                                <a href="{{ asset('assets/files/uploads/resultpdf') }}/{{ $pdf->file }}" target="_blank"><i class="fa fa-download"></i></a>
												@endif
											</td>
										</tr>
									@endforeach
								@else
									<tr><td colspan="4" class="text-center">No Notice found</td></tr>
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
