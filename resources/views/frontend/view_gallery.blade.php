@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<article>
					<div class="entry">
						<div class="clearfix">
							<div class="row">
								@foreach ( $photogallery as $photogallery )
								<div class="col-sm-4">

									<div class="clearfix">
										<img src="{{ asset('assets') }}/images/uploads/photogallerys/{{ $photogallery->image }}" alt="" width="225" height="224" class="alignleft size-full wp-image-3521" />
									</div>


								</div>
								@endforeach

							</div>
						</div>
						<br/>
						<div></div>

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