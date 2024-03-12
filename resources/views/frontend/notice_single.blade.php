@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<article id="post-10">
					<div class="entry">
						{!! $notice->description !!}
						@if($notice->file)
							Attachment: <a href="{{ asset('assets/files/uploads/notices') }}/{{ $notice->file }}" target="_blank"><i class="fa fa-download"></i></a>
						@endif
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