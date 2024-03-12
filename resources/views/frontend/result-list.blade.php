@extends('frontend.master')
@section('content')
<style>
    panel-primary {
    border-color: #609513;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.panel-primary>.panel-heading {
    color: #fff;
    background-color: #609513;
    border-color: #609513;
}
</style>
	<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
			<div class="container main-area-bg">
				<div class="row">
					<div class="col-md-9">
						<article id="post-10">
                            <div class="entry">
								<div class="panel-heading">
                                    <h2 class=" text-center" style=" background-color: #609513; color:#fff;">
                                      Student Result
                                    </h2>
                                  </div>
                                  <div class="card panel-body">
                                    <br>
                                    <form action="{{ route('search-result') }}" method="Get" role="form" class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                          <strong for="Class Roll" class="col-sm-4 control-label">Student Roll Number</strong>
                                          <div class="col-sm-12">
                                            <input class="form-control input-sm" placeholder="Enter Roll Number" name="roll" type="number" required>
                                            <div class="help-block"></div>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <strong for="level" class="col-sm-2 control-label">Class</strong>
                                          <div class="col-sm-12">
                                            <select name="class" class="form-control" required>
                                                <option value="">--Select Class--</option>

                                                    <option value="1" @isset($result) @if($result->class == 1) selected @endif @endisset>One</option>
                                                    <option value="2" @isset($result) @if($result->class == 2) selected @endif @endisset>two</option>
                                                    <option value="3"@isset($result) @if($result->class == 3) selected @endif @endisset>three</option>
                                                    <option value="4"@isset($result) @if($result->class == 4) selected @endif @endisset>four</option>
                                                    <option value="5"@isset($result) @if($result->class == 5) selected @endif @endisset>five</option>
                                                    <option value="6"@isset($result) @if($result->class == 6) selected @endif @endisset>six</option>
                                                    <option value="7"@isset($result) @if($result->class == 7) selected @endif @endisset>seven</option>
                                                    <option value="8"@isset($result) @if($result->class == 8) selected @endif @endisset>eight</option>
                                                    <option value="9"@isset($result) @if($result->class == 9) selected @endif @endisset>nine</option>
                                                    <option value="10"@isset($result) @if($result->class == 10) selected @endif @endisset>ten</option>

                                           </select>
                                            <div class="help-block"></div>
                                          </div>
                                        </div>
                                        {{-- <div class="form-group">
                                          <strong for="level" class="col-sm-2 control-label">Section</strong>
                                          <div class="col-sm-12">
                                            <select class="form-control" name="section" id="group_id" required>
                                                <option value="">--Select Group--</option>
                                                @foreach ($groups as $group)
                                                  @isset($result)
                                                    <option value="{{ $group->id }}" @if($result->section == $group->id) selected @endif>{{ $group->name }}</option>
                                                  @else
                                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                                  @endisset
                                                @endforeach
                                              </select>
                                            <div class="help-block"></div>
                                          </div>
                                        </div> --}}

                                        <div class="form-group">
                                          <strong for="exam" class="col-sm-2 control-label">Section</strong>
                                          <div class="col-sm-12">
                                            <select class="form-control" name="section" required>
                                                <option value="">--Select Section--</option>
                                                @foreach ($groups as $group)
                                                  @isset($result)
                                                    <option value="{{ $group->id }}" @if($result->section == $group->id) selected @endif>{{ $group->name }}</option>
                                                  @else
                                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                                  @endisset
                                                @endforeach
                                              </select>
                                            <div class="help-block"></div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <strong for="exam" class="col-sm-2 control-label">Exam</strong>
                                          <div class="col-sm-12">
                                            <select class="form-control" name="exam" id="group_id" required>
                                                <option value="">--Select Exam--</option>
                                                @foreach ($exams as $exam)
                                                  @isset($result)
                                                    <option value="{{ $exam->id }}" @if($result->exam == $exam->id) selected @endif>{{ $exam->name }}</option>
                                                  @else
                                                    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                                  @endisset
                                                @endforeach
                                              </select>
                                            <div class="help-block"></div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                          </div>
                                        </div>
                                      </form>

                                  </div>

							</div>
                            <br>
							@isset($result)
							<div class="entry" id="invoice_wrapper">
                                <div class="panel-heading">
                                    <div class="row"></div>
                                    <h2 class="panel-title text-center" style=" background-color: #609513;color:#fff;">
                                      Show Result
                                    </h2>

                                  </div>
                                  <div class="card  mb-3 card-outline card-primary">
                                    <div class="card-body">
                                        <a id="invoice_download_btn" class="btn btn-info" style="float: right; ">
                                            Download
                                        </a>
                                        <div class="row">

                                            <div class="col-md-3 col-sm-12 mb-sm-2 mb-2 mb-md-0 mb-lg-0 d-inline-flex flex-column align-items-left">
												<img class="img-thumbnail" src="{{asset('assets')}}/images/uploads/students/{{ $result->image }}" alt="image" width="200px" height="200px">
                                            </div>
                                            <div class="col-md-9 col-sm-12">
                                                <div class="intro_list">
                                                    <h4 class="">
                                                        {{ $result->first_name }}
                                                    </h4>
                                                    <div class="text-capitalize">
                                                        {{-- <b>{{ $result->designation }}</b> --}}
                                                    </div>


                                                    <div class="my-2">
                                                        <p class="mb-0"><strong class="">Father's Name :</strong> {{ $result->father_name }}</p>
                                                        <p class="mb-0"><strong class="">Mother's Name :</strong> {{ $result->mother_name }} </p>
                                                        <p class="mb-0"><strong class=""> Roll:</strong> {{ $result->roll }}</p>
                                                        {{-- <p class="mb-0"><strong class=""> Registration:</strong> {{ $result->reg }}</p> --}}
                                                    </div>
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

									<table class="newspaper-n" style="
                                    background-color: white;
                                ">
										<tbody>
											<tr style="background-color: #fff">
												<th style="text-align: center">Gpa</th>
												<th style="text-align: center">Grade</th>
												<th style="text-align: center">Pass/Fail</th>
												<th style="text-align: center">Comment</th>
											</tr>

												<tr>
													<td style="text-align: center">{{ $result->gpa }}</td>
													@if ($result->grade == "F")
													<td style="text-align: center; color:red;">{{ $result->grade }}</td>
													@else
													<td style="text-align: center;">{{ $result->grade }}</td>
													@endif

                                                    <td>

                                                            @if($result->result_status == 1)
                                                            Pass
                                                            @else
                                                            Fail
                                                            @endif

                                                    </td>
													<td style="text-align: center">{{ $result->comment }}</td>
												</tr>

										</tbody>
									</table>
								{{-- @if(count($staffs4th)>0) --}}

                            </div>
							@endisset


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

    @push('js')
<script src="{{asset('assets-frontend/js/vendor/modernizr-3.6.0.min.js ') }}"></script>
<script src="{{asset('assets-frontend/js/vendor/jquery-3.6.0.min.js ') }}"></script>
   <!-- Invoice JS -->
   <script src="{{asset('assets-frontend')}}/js/invoice/jspdf.min.js"></script>
   <script src="{{asset('assets-frontend')}}/js/invoice/invoice.js"></script>

@endpush


