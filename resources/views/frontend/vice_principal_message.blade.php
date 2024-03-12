@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
	<div class="container main-area-bg">
		<div class="row">
			<div class="col-md-9">
				<article>
					<div class="entry">
						<h1 class="heading">{{ $setting->message_from_2 }} Introduction</h1>
						<div class="clearfix">
							<div class="row">
								<div class="col-sm-4">
									<div class="clearfix">
										<img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->vice_principal_image }}" alt="" width="225" height="224" class="alignleft size-full wp-image-3521" />
									</div>
									<div class="text-center mt-2 clearfix">
										<p><strong>{{ $setting->vice_principal_name }}</strong></p>
									</div>
								</div>
								<div class="col-sm-8">
									{!! $setting->vice_principal_bio !!}
								</div>
							</div>
						</div>
						<br/>
						<div></div>
						<h1 class="heading mt-3">{{ $setting->message_from_2 }} Aphorism</h1>
						<div>
							{!! $setting->vice_principal_message !!}
							<p><strong>{{ $setting->vice_principal_name }}, {{ $setting->message_from_2 }}</strong></p>
						</div>
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
