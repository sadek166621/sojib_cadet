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
								@foreach ( $videos as $video )
								<div class="col-md-4">
									<div class="feature-item-area">
                                        <div class="post-item-img">
                                          <div class="brbanner-video">
                                            <div class="youtube-article"><iframe class="dt-youtube" width="100%" height="280"
                                                src="{{ $video->link }}" frameborder="0"
                                                allowfullscreen></iframe></div>
                                          </div>
                                        </div>
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