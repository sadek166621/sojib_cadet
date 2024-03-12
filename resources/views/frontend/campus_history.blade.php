@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
				<div class="row">
					<div class="col-md-9">
						<article>
							<div class="entry">
								<h1 class="heading">প্রতিষ্ঠানিক ইতিহাস</h1>
								<div class="clearfix">
									<div class="row">
										<div class="col-sm-4">
											<div class="clearfix">
												<img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->campus_image }}" alt="" width="225" height="224" class="alignleft size-full wp-image-3521" />
											</div>
										</div>
                                        <div class="col-sm-8">
                                            {!! $setting->campus_history !!}
                                        </div>

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


	</div>
	@endsection