@extends('frontend.master')
@section('content')
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                <article>
                    <div class="entry">

                        <h1 class="heading mt-3"> শাখা সমূহ</h1>
                        <br>
                        <div>
                            <div class="tab-section mb-5">
                            <ul class="nav nav-pills justify-content-center lead">
                                <li class="nav-item"><a data-toggle="pill" class="nav-link active" href="#dhaka">ঢাকা</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#chattogram">চট্টগ্রাম</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#rajshahi">রাজশাহী</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#rangpur">রংপুর</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#khulna">খুলনা</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#barisal">বরিশাল</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#sylhet">সিলেট</a></li>
                                <li class="nav-item"><a data-toggle="pill" class="nav-link" href="#mymensingh">ময়মনসিংহ</a></li>
                                </ul>
                          </div>
                
                          <div class="tab-content">
                            <div id="dhaka" class="tab-pane active">
                              <h3 class="text-center mb-5">ঢাকা বিভাগের শাখাসমূহ</h3>
                                <div class="col-lg-12 mb-5 mb-lg-0">
                                  <table class="table table-bordered text-center table-striped">
                                    <thead>
                                      <tr class="table-warning">
                                        <th scope="col">শাখার নাম</th>
                                        <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                      </tr>
                                    </thead>
                
                                    <tbody>
                                @if (count($dhaka) > 0)
                                     @foreach ($dhaka as $dhaka )
                                        <tr>
                                            <td>{{ $dhaka->section }}</td>
                                            <td>{!! $dhaka->details !!}</td>
                                        </tr>
                                    @endforeach
                                @else
                                <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                @endif
                                      
                                    </tbody>
                                  </table>
                              </div> <!-- Table div end -->
                            </div> <!-- Dhaka div end -->
                
                            <div id="chattogram" class="tab-pane fade">
                              <h3 class="text-center mb-4">চট্টগ্রাম বিভাগের শাখাসমূহ</h3>
                                <div class="col-lg-12 mb-5 mb-lg-0">
                                  <table class="table table-bordered text-center table-striped">
                                    <thead>
                                      <tr class="table-warning">
                                        <th scope="col">শাখার নাম</th>
                                        <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                      </tr>
                                    </thead>
                
                                    <tbody>
                                        @if (count($chattogram) > 0)
                                     @foreach ($chattogram as $chattogram )
                                        <tr>
                                            <td>{{ $chattogram->section }}</td>
                                            <td>{!! $chattogram->details !!}</td>
                                        </tr>
                                    @endforeach
                                @else
                                <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                @endif
                                    </tbody>
                                  </table>
                              </div> <!-- Table div end -->
                            </div>  <!-- Chattogram div end -->
                  
                            <div id="rajshahi" class="tab-pane fade">
                              <h3 class="text-center mb-4">রাজশাহী বিভাগের শাখাসমূহ</h3>
                                <div class="col-lg-12 mb-5 mb-lg-0">
                                  <table class="table table-bordered text-center table-striped">
                                    <thead>
                                      <tr class="table-warning">
                                        <th scope="col">শাখার নাম</th>
                                        <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                      </tr>
                                    </thead>
                
                                    <tbody>
                                        @if (count($rajshahi) > 0)
                                        @foreach ($rajshahi as $rajshahi )
                                           <tr>
                                               <td>{{ $rajshahi->section }}</td>
                                               <td>{!! $rajshahi->details !!}</td>
                                           </tr>
                                       @endforeach
                                   @else
                                   <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                   @endif
                                    </tbody>
                                  </table>
                              </div> <!-- Table div end -->
                            </div> <!-- Rajshahi div end -->
                
                            <div id="rangpur" class="tab-pane fade">
                              <h3 class="text-center mb-4">রংপুর বিভাগের শাখাসমূহ</h3>
                                <div class="col-lg-12 mb-5 mb-lg-0">
                                  <table class="table table-bordered text-center table-striped">
                                    <thead>
                                      <tr class="table-warning">
                                        <th scope="col">শাখার নাম</th>
                                        <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($rangpur) > 0)
                                        @foreach ($rangpur as $rangpur )
                                           <tr>
                                               <td>{{ $rangpur->section }}</td>
                                               <td>{!! $rangpur->details !!}</td>
                                           </tr>
                                       @endforeach
                                   @else
                                   <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                   @endif
                                    </tbody>
                                  </table>
                              </div> <!-- Table div end -->
                            </div> <!-- Rangpur div end -->
                
                            <div id="khulna" class="tab-pane fade">
                              <h3 class="text-center mb-4">খুলনা বিভাগের শাখাসমূহ</h3>
                                <div class="col-lg-12 mb-5 mb-lg-0">
                                  <table class="table table-bordered text-center table-striped">
                                    <thead>
                                      <tr class="table-warning">
                                        <th scope="col">শাখার নাম</th>
                                        <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($khulna) > 0)
                                        @foreach ($khulna as $khulna )
                                           <tr>
                                               <td>{{ $khulna->section }}</td>
                                               <td>{!! $khulna->details !!}</td>
                                           </tr>
                                       @endforeach
                                   @else
                                   <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                   @endif
                
                                    </tbody>
                                  </table>
                              </div> <!-- Table div end -->
                            </div> <!-- Khulna div end -->
                
                            <div id="barisal" class="tab-pane fade">
                                <h3 class="text-center mb-4">বরিশাল বিভাগের শাখাসমূহ</h3>
                                  <div class="col-lg-12 mb-5 mb-lg-0">
                                    <table class="table table-bordered text-center">
                                      <thead>
                                        <tr class="table-warning">
                                          <th scope="col">শাখার নাম</th>
                                          <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @if (count($barishal) > 0)
                                        @foreach ($barishal as $barishal )
                                           <tr>
                                               <td>{{ $barishal->section }}</td>
                                               <td>{!! $barishal->details !!}</td>
                                           </tr>
                                       @endforeach
                                   @else
                                   <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                   @endif
                                      </tbody>
                                    </table>
                                </div> <!-- Table div end -->
                            </div> <!-- Barisal div end -->
                
                            <div id="sylhet" class="tab-pane fade">
                              <h3 class="text-center mb-4">সিলেট বিভাগের শাখাসমূহ</h3>
                                <div class="col-lg-12 mb-5 mb-lg-0">
                                  <table class="table table-bordered text-center table-striped">
                                    <thead>
                                      <tr class="table-warning">
                                        <th scope="col">শাখার নাম</th>
                                        <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($sylhet) > 0)
                                        @foreach ($sylhet as $sylhet )
                                           <tr>
                                               <td>{{ $sylhet->section }}</td>
                                               <td>{!! $sylhet->details !!}</td>
                                           </tr>
                                       @endforeach
                                   @else
                                   <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                   @endif
                                    </tbody>
                                  </table>
                              </div> <!-- Table div end -->
                            </div> <!-- Sylhet div end -->
                
                            <div id="mymensingh" class="tab-pane fade">
                                <h3 class="text-center mb-4">ময়মনসিংহ বিভাগের শাখাসমূহ</h3>
                                  <div class="col-lg-12 mb-5 mb-lg-0">
                                    <table class="table table-bordered text-center table-striped">
                                      <thead>
                                        <tr class="table-warning">
                                          <th scope="col">শাখার নাম</th>
                                          <th scope="col">শাখার বিস্তারিত ঠিকানা</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @if (count($mymensingh) > 0)
                                        @foreach ($mymensingh as $mymensingh )
                                           <tr>
                                               <td>{{ $mymensingh->section }}</td>
                                               <td>{!! $mymensingh->details !!}</td>
                                           </tr>
                                       @endforeach
                                   @else
                                   <td colspan="2" class="text-center">কোন শাখা পাওয়া যায়নি</td>
                                   @endif
                                      </tbody>
                                    </table>
                                </div> <!-- Table div end -->
                            </div> <!-- Mymensingh div end -->
                
                            
                
                          </div>
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
<div class="container" style="display:none;">
<div class="bottom-logos text-center">
    <div class="row">
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.ictd.gov.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/gov-logo.png" alt="" /></a>
                <h6>Information & Communication Technology Division</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.bcc.net.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/bcc-logo.png" alt="" /></a>
                <h6>Bangladesh Computer Council</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.jica.go.jp/english/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/jica-logo.png" alt="" /></a>
                <h6>Japan International Cooperation Agency</h6>
            </div>
        </div>
    </div>
</div>
</div>
<section class="bottom-area" style="background:#ddd;margin:60px 0px 0px 0px;padding:40px 0px;display:none;">
<div class="container">
<div class="bottom-part">
    <div class="bottom-part1">
        <div class="bottom-contact-part text-black">
                            </div>
    </div>
    <div class="bottom-part2">
        <div class="bottom-get-started-part">
                            </div>
    </div>
</div>
</div>
</section>
@endsection