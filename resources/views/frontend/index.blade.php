@extends('frontend.master')
@section('content')
<section class="front-part">
    <div class="container main-area-bg">
      <div class="row">


        <!-- Left Side Start -->
        <div class="col-md-9">
          <div class="content-left">
            <article id="post-3390">
              <div class="entry">
              </div>
            </article>

            <!-- Banner Part Start -->
            <div id="banner" class="banner slider-header">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
              <ol class="carousel-indicators">
                  @foreach($sliders as $key => $slider)
                    <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" @if($key == 0) class="active" @endif></li>
                @endforeach
            </ol>

          <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="banner-bg"></div>
                <div class="carousel-caption">
                    {{-- <div class="banner-text">
                        <div class="site-branding">
                            <h1 class="site-title animated fadeInRight text-center" style="display:none;"><a class="text-white-50" href="{{ route('home') }}" rel="home">Govt. College Name</a></h1>
                            <h1 class="site-title text-center text-white-50"><a class="text-white-50" href="{{ route('home') }}" rel="home"><img src="{{ asset('assets') }}//images/uploads/settings/{{ $setting->site_logo }}" alt="" class=""></a></h1>
                        </div>
                    </div> --}}
                </div>
                @foreach($sliders as $key => $slider)
                    <div class="carousel-item  @if($key == 0) active @endif">
                        <img data-animation="animated zoomIn" src="{{ asset('assets') }}/images/uploads/sliders/{{ $slider->image }}" alt="" style="height: 392px" class="img-responsive"/>
                    </div>
                @endforeach
            </div>

          <!-- Controls -->
        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <script>
           // $('#carousel-example-generic').carousel({
         // interval: 3000,
         // pause: null
        //})
        /* Demo Scripts for Bootstrap Carousel and Animate.css article
        * on SitePoint by Maria Antonietta Perna
        *animation effects:https://mdbootstrap.com/docs/jquery/css/animations/
        */

        (function( $ ) {

            //Function to animate slider captions
            function doAnimations( elems ) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function () {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function () {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel
            $myCarousel.carousel();

            //Animate captions in first slide on page load
            doAnimations($firstAnimatingElems);

            //Pause carousel
            $myCarousel.carousel('pause');


            //Other slides to be animated on carousel slide event
            $myCarousel.on('slide.bs.carousel', function (e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });

        })(jQuery);
        </script>
            </div>
            <!-- Banner Part End -->

            <!-- Start Scroll section -->
            <div class="scroll"
              style="padding: 5px 0px;background: #E6E7E8;margin: 10px 0px;vertical-align: middle;display: inline-block;">
              <h4 style="margin-bottom:0px;">
                <marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                  করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন <a
                    href="https://bit.ly/coronatracerbd" target="_blank" style="color: blue;"
                    title="https://bit.ly/coronatracerbd">https://bit.ly/coronatracerbd</a>। নিজে সুরক্ষিত থাকুন
                  অন্যকেও নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর মাধ্যমে আর্থিক অনুদান পৌঁছে
                  দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন <a href="http://ekdesh.ekpay.gov.bd/"
                    target="_blank" style="color: blue;" title="ekdesh.ekpay.gov.bd">ekdesh.ekpay.gov.bd</a> অথবা <a
                    href="http://play.google.com/store/apps/details?id=com.synesis.donationapp" target="_blank"
                    style="color: blue;" title="“Ek Desh”">“Ek Desh”</a> অ্যাপ ডাউনলোড করুন। করোনার লক্ষণ দেখা দিলে
                  গোপন না করে ডাক্তারের পরামর্শের জন্য ফ্রি কল করুন ৩৩৩ ও ১৬২৬৩ নম্বরে। করোনাভাইরাস প্রতিরোধে নিয়ম
                  মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন <a href="http://corona.gov.bd/"
                    target="_blank" style="color: blue;" title="corona.gov.bd">corona.gov.bd</a></marquee>
              </h4>
            </div>
            <!-- End Scroll section -->

            <!-- Start Notices section -->
            <div class="front-notices-area">
                <div class="notices-front">
<div class="notices-front-board">
<div class="notices-items">
    <h2>Notice Board</h2>
    <ul class="notices_front_list">
        @foreach ($notices as $key => $notice)
        <li class="notice-item text-left">
            <div class="notice-title">
                <h5><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('notice.show', $notice->id) }}">{{ $notice->title }}</a></h5>
            </div>
        </li>
        @endforeach

                                    </ul>
    <h4 class="text-right"><a href="notices">View All</a></h4>
</div>
</div>
</div>					</div><!-- End Notices section -->
            <!-- End Notices section -->

            <!-- Start News section -->
            <div class="front-news-area">
                <div class="new-scroll" style="padding: 10px 0px 0px;background: #E6E7E8;margin: 10px 0px;vertical-align: middle;display: inline-block;">
<div class="row">
<div class="col-md-2">
    <h2 class="text-center">News:</h2>
</div>
<div class="col-md-8">

    <ul class="news-ticker" style="height: 56px;">
        @foreach ($news as $key => $data)
        <li>
            <h5 class="text-left">
                <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="{{ route('news.show', $data->id) }}">{{ $data->title }}</a>
            </h5>
        </li>
        @endforeach
    </ul>
</div>
<div class="col-md-2">
    <h4 class="text-center"><a href="news">All</a></h4>
</div>
</div>
</div>					</div><!-- End News section -->
            <!-- End News section -->

            <!-- Start Boxs section -->
            <div class="front-boxs-area">
              <div class="boxs-front">
                <div class="boxs-front-board">
                  <div class="row">

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>স্কুল প্রশাসন </h3>
                        </div>
                        <div class="box-img">
                          <img width="110" height="100" src="https://ngdc.ac.bd/wp-content/uploads/2021/03/01.png"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">পরিচালনা পর্ষদ</a></li>
                            <li style="font-size: large;"><a href="{{ route('principalMessage') }}">প্রধান শিক্ষক</a></li>
                            <li style="font-size: large;"><a href="{{ route('vicePrincipalMessage') }}">সহকারী প্রধান শিক্ষক</a></li>
                            <li style="font-size: large;"><a href="{{ route('teacher.list') }}">শিক্ষকবৃন্দ</a></li>
                            <li style="font-size: large;"><a href="{{ route('staff.list') }}">কর্মচারীবৃন্দ</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>একাডেমিক </h3>
                        </div>
                        <div class="box-img">
                          <img width="135" height="129" src="https://ngdc.ac.bd/wp-content/uploads/2021/03/academic.png"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="{{ route('Department-of-Science') }}">নবম ও দশম শ্রেণী</a>
                              {{-- <ul>
                                <li><a href="{{ route('Department-of-Science') }}">বিজ্ঞান বিভাগ</a></li>
                                <li><a href="{{ route('Department-of-bussiness') }}">ব্যবসায়শিক্ষা বিভাগ</a></li>
                                <li><a href="{{ route('Department-of-Humanities') }}">মানবিক বিভাগ</a></li>
                              </ul> --}}
                            </li>
                            <li style="font-size: large;"><a href="{{ route('classeight') }}">অষ্টম শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="{{ route('classseven') }}">সপ্তম শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="{{ route('classsix') }}">ষষ্ঠ শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="{{ route('classonetofive') }}"> প্রথম-পঞ্চম শ্রেণী </a></li>

                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>অফিস আদেশ/বিজ্ঞপ্তি </h3>
                        </div>
                        <div class="box-img">
                          <img width="512" height="512"
                            src="../ngdc.ac.bd/wp-content/uploads/2021/03/office-order.png"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order.png 512w, https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order-300x300.png 300w, https://ngdc.ac.bd/wp-content/uploads/2021/03/office-order-150x150.png 150w"
                            sizes="(max-width: 512px) 100vw, 512px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="{{ route('notice.list') }}">নোটিশ</a></li>
                            <li style="font-size: large;"><a href="">অফিস আদেশ</a></li>
                            <li style="font-size: large;"><a href="#">সরকারি আদেশ</a></li>
                            <li style="font-size: large;"><a href="#">অনাপত্তি পত্র (NOC)</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>সিলেবাস ও ক্লাসরুটিন </h3>
                        </div>
                        <div class="box-img">
                          <img width="110" height="100"
                            src="https://ngdc.ac.bd/wp-content/uploads/2021/03/Class-Routine_Syllabus.jpg"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="{{ route('academic-course-plan') }}">একাডেমিক কোর্স প্লান</a></li>
                            <li style="font-size: large;"><a href="{{ route('higher.syllabus') }}">মাধ্যমিক সিলেবাস</a></li>
                            <li style="font-size: large;"><a href="{{ route('classroutine.list') }}">ক্লাস রুটিন</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>ফলাফল </h3>
                        </div>
                        <div class="box-img">
                          <img width="256" height="256"
                            src="../ngdc.ac.bd/wp-content/uploads/2021/03/Result-Icon-2.png"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/03/Result-Icon-2.png 256w, https://ngdc.ac.bd/wp-content/uploads/2021/03/Result-Icon-2-150x150.png 150w"
                            sizes="(max-width: 256px) 100vw, 256px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">মাধ্যমিক ফলাফল</a></li>
                            <li style="font-size: large;"><a href="#">অভ্যন্তরীণ পরীক্ষার ফলাফল</a>
                              <ul>
                                <li><a href="#">৯ম - ১০ম শ্রেণী</a></li>
                                <li><a href="#">৬ষ্ঠ - ৮ম শ্রেণী</a></li>
                                <li><a href="#">১ম - ৫ম শ্রেণী</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>ভর্তি সম্পর্কিত </h3>
                        </div>
                        <div class="box-img">
                          <img width="300" height="300" src="../ngdc.ac.bd/wp-content/uploads/2021/03/admission.png"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/03/admission.png 300w, https://ngdc.ac.bd/wp-content/uploads/2021/03/admission-150x150.png 150w"
                            sizes="(max-width: 300px) 100vw, 300px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">ভর্তির অনলাইন আবেদন</a>
                              <ul>
                                <li><a href="{{ route('admission-related') }}">১ম - ৫ম শ্রেণী</a></li>
                                <li><a href="{{ route('admission-related') }}">৬ষ্ঠ - ৮ম শ্রেণী</a></li>
                                <li><a href="{{ route('admission-related') }}">৯ম শ্রেণী</a></li>
                              </ul>
                            </li>
                            <li style="font-size: large;"><a href="#">ভর্তির বিদ্যালয় আবেদন ফরম</a>
                              <ul>
                                <li><a href="{{ route('admission-related') }}">১ম - ৫ম শ্রেণী</a></li>
                                <li><a href="{{ route('admission-related') }}">৬ষ্ঠ - ৮ম শ্রেণী</a></li>
                                <li><a href="{{ route('admission-related') }}">৯ম শ্রেণী</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->
                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>অনলাইন শিক্ষা </h3>
                        </div>
                        <div class="box-img">
                          <img width="110" height="100"
                            src="https://ngdc.ac.bd/wp-content/uploads/2021/06/Online-Class.jpg"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">ষষ্ঠ শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="#">সপ্তম শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="#">অষ্টম শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="#">নবম শ্রেণী</a></li>
                            <li style="font-size: large;"><a href="#">দশম শ্রেণী</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>সহশিক্ষা কার্যক্রম </h3>
                        </div>
                        <div class="box-img">
                          <img width="110" height="100"
                            src="https://ngdc.ac.bd/wp-content/uploads/2021/06/Co-educational-activities.jpg"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">ডিবেটিং সোসাইটি</a></li>
                            <li style="font-size: large;"><a href="#">রোভার স্কাউটস্</a></li>
                            <li style="font-size: large;"><a href="#">রেড ক্রিসেন্ট</a></li>
                            <li style="font-size: large;"><a href="#">ক্লাবসমূহ</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>ডাটাবেজ </h3>
                        </div>
                        <div class="box-img">
                          <img width="225" height="225" src="../ngdc.ac.bd/wp-content/uploads/2021/03/datasymbol.png"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/03/datasymbol.png 225w, https://ngdc.ac.bd/wp-content/uploads/2021/03/datasymbol-150x150.png 150w"
                            sizes="(max-width: 225px) 100vw, 225px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">স্কুল ডাটাবেজ</a></li>
                            <li style="font-size: large;"><a href="{{ route('teacher.list') }}">শিক্ষক ডাটাবেজ</a></li>
                            <li style="font-size: large;"><a href="{{ route('staff.list') }}">স্টাফ ডাটাবেজ</a></li>
                            <li style="font-size: large;"><a href="#">স্টুডেন্ট ডাটাবেজ</a></li>
                            <li style="font-size: large;"><a href="#">ই-পেমেন্ট</a></li>
                            <li style="font-size: large;"><a href="#">ই-লাইব্রেরি</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->
                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>ফরম ডাউনলোড </h3>
                        </div>
                        <div class="box-img">
                          <img width="225" height="225" src="../ngdc.ac.bd/wp-content/uploads/2021/06/download-1.jpg"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/06/download-1.jpg 225w, https://ngdc.ac.bd/wp-content/uploads/2021/06/download-1-150x150.jpg 150w"
                            sizes="(max-width: 225px) 100vw, 225px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="{{ route('form-download') }}">সনদ ও নম্বরপত্র</a></li>
                            <li style="font-size: large;"><a href="{{ route('form-download') }}">ছুটির ফরম</a></li>
                            <li style="font-size: large;"><a href="{{ route('form-download') }}">শিক্ষার্থী বৃত্তি</a></li>
                            <li style="font-size: large;"><a href="{{ route('form-download') }}">ক্লাব সদস্য ফরম</a></li>
                            <li style="font-size: large;"><a href="{{ route('form-download') }}">অনাপত্তি পত্র (NOC) ফরম</a></li>
                            <li style="font-size: large;"><a href="{{ route('form-download') }}">অন্যান্য</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>বার্ষিক কর্মসম্পাদন চুক্তি </h3>
                        </div>
                        <div class="box-img">
                          <img width="130" height="133" src="https://ngdc.ac.bd/wp-content/uploads/2021/03/apa_cab.png"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">প্রজ্ঞাপন/কর্মপদ্ধতি/কাঠামো</a></li>
                            <li style="font-size: large;"><a href="#">নীতিমালা/চুক্তি/অগ্রগতি</a></li>
                            <li style="font-size: large;"><a href="#">সেবা প্রদান প্রতিশ্রুতি</a></li>
                            <li style="font-size: large;"><a href="#">বার্ষিক প্রতিবেদন</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- <div class="text-left col-md-6 d-none">
                    <div class="box-item">
                      <div class="box-title">
                        <h3>শুদ্ধাচার পরিকল্পনা </h3>
                      </div>
                      <div class="box-img">
                        <img width="236" height="260" src="../ngdc.ac.bd/wp-content/uploads/2021/06/nis_logo3.png"
                          class="thumbs wp-post-image" alt="" loading="lazy" />
                      </div>
                      <div class="box-text">
                        <ul>
                          <li style="font-size: large;"><a href="#">শুদ্ধাচার কর্মকৌশল</a></li>
                          <li style="font-size: large;"><a href="#">আদেশ/বিজ্ঞপ্তি</a></li>
                          <li style="font-size: large;"><a href="#">শুদ্ধাচার কর্মপরিকল্পণার  </a></li>
                          <li style="font-size: large;"><a href="#">প্রতিবেদন</a></li>
                          <li style="font-size: large;"><a href="#">শুদ্ধাচার পুরস্কার</a></li>
                        </ul>
                      </div>
                    </div>
                  </div> -->


                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>বিবিধ </h3>
                        </div>
                        <div class="box-img">
                          <img width="110" height="100" src="https://ngdc.ac.bd/wp-content/uploads/2021/06/0-1.png"
                            class="thumbs wp-post-image" alt="" loading="lazy" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">সরকারি ছুটির তালিকা</a></li>
                            <li style="font-size: large;"><a href="#">হলিডে লিস্ট শিক্ষা প্রতিষ্ঠান</a></li>
                            <li style="font-size: large;"><a href="#">উদ্ভাবন কর্ণার</a></li>
                            <li style="font-size: large;"><a href="#">ইন-হাউজ ট্রেনিং</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>অ্যালামনাই কর্নার </h3>
                        </div>
                        <div class="box-img">
                          <img width="290" height="290"
                            src="../ngdc.ac.bd/wp-content/uploads/2021/07/Alumnai-Corner.jpg"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/07/Alumnai-Corner.jpg 290w, https://ngdc.ac.bd/wp-content/uploads/2021/07/Alumnai-Corner-150x150.jpg 150w"
                            sizes="(max-width: 290px) 100vw, 290px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">সদস্য আবেদন সংক্রান্ত</a></li>
                            <li style="font-size: large;"><a href="#">সদস্য আবেদন ফরম</a></li>
                            <li style="font-size: large;"><a href="#">যোগাযোগ</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="text-left col-md-6">
                      <div class="box-item">
                        <div class="box-title">
                          <h3>জরুরি কল ও সেবা </h3>
                        </div>
                        <div class="box-img">
                          <img width="800" height="675"
                            src="../ngdc.ac.bd/wp-content/uploads/2021/07/Emergency-call-Services.jpg"
                            class="thumbs wp-post-image" alt="" loading="lazy"
                            srcset="https://ngdc.ac.bd/wp-content/uploads/2021/07/Emergency-call-Services.jpg 800w, https://ngdc.ac.bd/wp-content/uploads/2021/07/Emergency-call-Services-300x253.jpg 300w, https://ngdc.ac.bd/wp-content/uploads/2021/07/Emergency-call-Services-768x648.jpg 768w"
                            sizes="(max-width: 800px) 100vw, 800px" />
                        </div>
                        <div class="box-text">
                          <ul>
                            <li style="font-size: large;"><a href="#">হেল্পডেস্ক</a></li>
                            <li style="font-size: large;"><a href="#">কল সেন্টারসমূহ</a></li>
                            <li style="font-size: large;"><a href="#">ফোনে ডাক্তারের সেবা</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                  </div>
                </div>
              </div>
            </div>
            <!-- End Boxs section -->

            <div class="front-gallerys-area">
              <div id="bwp_gallery-2" class="front-page-gallery-widget widget bwp_gallery">
                <div class="section-heading">
                  <h2 class="section-title">Photo Gallery</h2>
                </div>
                <style id="bwg-style-0">
                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails {
                    width: 884px;
                    justify-content: center;
                    margin: 0 auto !important;
                    background-color: rgba(255, 255, 255, 0.00);
                    padding-left: 4px;
                    padding-top: 4px;
                    max-width: 100%;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item {
                    justify-content: flex-start;
                    max-width: 220px;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item>a {
                    margin-right: 4px;
                    margin-bottom: 4px;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item0 {
                    padding: 0px;
                    background-color: rgba(0, 0, 0, 0.30);
                    border: 0px none #CCCCCC;
                    opacity: 1.00;
                    border-radius: 0;
                    box-shadow: 0px;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item1 img {
                    max-height: none;
                    max-width: none;
                    padding: 0 !important;
                  }

                  @media only screen and (min-width: 480px) {
                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item1 img {
                      -webkit-transition: all .3s;
                      transition: all .3s;
                    }

                    #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item1 img:hover {
                      -ms-transform: scale(1.08);
                      -webkit-transform: scale(1.08);
                      transform: scale(1.08);
                    }

                    .bwg-standard-thumbnails .bwg-zoom-effect .bwg-zoom-effect-overlay {
                      background-color: rgba(0, 0, 0, 0.3);
                    }

                    .bwg-standard-thumbnails .bwg-zoom-effect:hover img {
                      -ms-transform: scale(1.08);
                      -webkit-transform: scale(1.08);
                      transform: scale(1.08);
                    }
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-item1 {
                    padding-top: 81.818181818182%;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-title1 {
                    position: absolute;
                    top: 0;
                    z-index: 100;
                    width: 100%;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-content: center;
                    flex-direction: column;
                    opacity: 0;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-title2,
                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-ecommerce2 {
                    color: #FFFFFF;
                    font-family: Ubuntu;
                    font-size: 16px;
                    font-weight: bold;
                    padding: 2px;
                    text-shadow: 0px;
                    max-height: 100%;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-thumb-description span {
                    color: #323A45;
                    font-family: Ubuntu;
                    font-size: 12px;
                    max-height: 100%;
                    word-wrap: break-word;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-play-icon2 {
                    font-size: 32px;
                  }

                  #bwg_container1_0 #bwg_container2_0 .bwg-container-0.bwg-standard-thumbnails .bwg-ecommerce2 {
                    font-size: 19.2px;
                    color: #323A45;
                  }
                </style>


                <div id="bwg_container1_0" class="bwg_container bwg_thumbnail bwg_thumbnails"
                   data-bwg="0" data-gallery-type="thumbnails"
                  data-popup-width="800" data-popup-height="500" data-is-album="gallery"
                  data-buttons-position="bottom">
                  <div id="bwg_container2_0">
                    <div id="ajax_loading_0" class="bwg_loading_div_1">
                      <div class="bwg_loading_div_2">
                        <div class="bwg_loading_div_3">
                          <div id="loading_div_0" class="bwg_spider_ajax_loading">
                          </div>
                        </div>
                      </div>
                    </div>
                    <form id="gal_front_form_0" class="bwg-hidden" method="post" action="#" data-current="0"
                      data-shortcode-id="0" data-gallery-type="thumbnails" data-gallery-id="1" data-tag="0"
                      data-album-id="0" data-theme-id="1">
                      <div id="bwg_container3_0" class="bwg-background bwg-background-0">
                        <div data-max-count="4" data-thumbnail-width="220" data-bwg="0" data-gallery-id="1"
                          id="bwg_thumbnails_0"
                          class="bwg-container-0 bwg-thumbnails bwg-standard-thumbnails bwg-container bwg-border-box">
                          @foreach ($photogallery as $photogallery )
                          <div class="bwg-item">
                            <a class="bwg-a bwg_lightbox">
                              <div class="bwg-item0 ">
                                <div class="bwg-item1">
                                  <div class="bwg-item2">
                                    <img class="skip-lazy bwg_standart_thumb_img_0 "
                                      src="{{ asset('assets') }}/images/uploads/photogallerys/{{ $photogallery->image }}" />
                                  </div>
                                  <div class="bwg-zoom-effect-overlay">
                                    <div class="bwg-title1">
                                      <div class="bwg-title2"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          @endforeach

                        </div>
                      </div>

                    </form>
                    <p><a class="" href="{{ route('view-gallery') }}">View Details →</a></p>
                    <style>
                      #bwg_container1_0 #bwg_container2_0 #spider_popup_overlay_0 {
                        background-color: #EEEEEE;
                        opacity: 0.60;
                      }
                    </style>
                    <div id="bwg_spider_popup_loading_0" class="bwg_spider_popup_loading"></div>
                    <div id="" class="spider_popup_overlay" onclick="spider_destroypopup(1000)">
                    </div>
                    <input type="hidden" id="bwg_random_seed_0" value="1169895061">
                  </div>
                </div>
                <script>
                  if (document.readyState === 'complete') {
                    if (typeof bwg_main_ready == 'function') {
                      if (jQuery("#bwg_container1_0").height()) {
                        bwg_main_ready(jQuery("#bwg_container1_0"));
                      }
                    }
                  } else {
                    document.addEventListener('DOMContentLoaded', function () {
                      if (typeof bwg_main_ready == 'function') {
                        if (jQuery("#bwg_container1_0").height()) {
                          bwg_main_ready(jQuery("#bwg_container1_0"));
                        }
                      }
                    });
                  }
                </script>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="front-videogallerys-area">
              <h2 class="section-title">Recent Video</h2>

              <div class="feature-item post-item">
                <div class="row">
                  <div class="col-md-6 feature-video-item">
                    <div class="feature-item-area">
                      <div class="post-item-img">
                        <div class="brbanner-video">
                          <div class="youtube-article"><iframe class="dt-youtube" width="100%" height="280"
                              src="{{ $setting->youtube_video_left_link }}" frameborder="0"
                              allowfullscreen></iframe></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 feature-video-item">
                    <div class="feature-item-area">
                      <div class="post-item-img">
                        <div class="brbanner-video">
                          <div class="youtube-article"><iframe class="dt-youtube" width="100%" height="280"
                              src="{{ $setting->youtube_video_right_link }}" frameborder="0"
                              allowfullscreen></iframe></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="front-maps-area">
              <div id="text-8" class="front-page-map-widget widget widget_text">
                <div class="section-heading">
                  <h2 class="section-title">Our Location</h2>
                </div>
                <div class="textwidget">
                  <p><iframe loading="lazy" style="border: 0;"
                      src="{{ $setting->google_map_link }}"
                      width="100%" allowfullscreen=""></iframe></p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div><!-- End News section -->
          </div><!-- content-left -->
        </div>
        <!-- Left Side End -->



        <!-- Right Side Start -->
        @include('frontend.include.side-bar')
        <!-- Right Side End -->
      </div>
    </div>
  </section>
@endsection
