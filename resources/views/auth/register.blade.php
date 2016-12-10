@extends('layouts.master')

@section('content')

  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <p>Sign Up</p>
                  <br>
                  <br>
                <h2>Be part of us!</h2>

                <br><br><br>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}



                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-8" style="float:left;"><span class="pull-left">Username<a style="color: red;">*</a></span></label>
                        <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="e.g. amirah28" style="float:right;"></span>
                          <div class="input-group col-md-12 col-sm-6 col-xs-10 pull-right">
                              <input type="text" class="form-control" id="username" placeholder="Enter your username" value="{{ old('username') }}"" name="username"  required autofocus/>

                               @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                @endif
                          </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-8" style="float:left;"><span class="pull-left">Email<a style="color: red;">*</a></span></label>
                    <span class="glyphicon glyphicon-question-sign"data-toggle="tooltip" data-placement="right" title="e.g. amirah28@gmail.com" style="float:right;"></span>
                      <div class="input-group col-md-12 col-sm-6 col-xs-10 pull-right">
                          <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="{{ old('email') }}" required/>
                         @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>      
                      </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-8" style="float:left;"><span class="pull-left">Password<a style="color: red;">*</a></span></label>
                    <span class="glyphicon glyphicon-question-sign"data-toggle="tooltip" data-placement="right" title="e.g amirahbest123" style="float:right;"></span>
                      <div class="input-group col-md-12  col-sm-6 col-xs-10 pull-right">
                          <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required/>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                      </div>

                      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-8" style="float:left;"><span class="pull-left">Confirm Password<a style="color: red;">*</a></span></label>
                    <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="e.g. amirahbest123" style="float:right;"></span>
                      <div class="input-group col-md-12  col-sm-6  col-xs-10 pull-right">
                          <input type="password" class="form-control" id="password_confirmation" placeholder="Enter your confirm password" name="password_confirmation" required/>
                          @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label class="col-md-8" style="float:left;"><span class="pull-left">Phone</span></label>
                       <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="right" title="e.g. +60117564769" style="float:right;"></span>

                      <div class="input-group col-md-12  col-sm-6 col-xs-10 pull-right">
                          <input type="tel" class="form-control " id="phone" placeholder="Enter your phone" name="phone" value="{{ old('phone')}}"/>

                          @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                          @endif
                      </div> 
                 
                    </div>

                    <a style="color:red; float:left;" size="small">* is required</a>               
                    <br><br>
                    <div class="form-group">
                        {!! app('captcha')->display() !!}

                        @if ($errors->has('g-recaptcha-response'))
                          <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                          </span>
                        @endif
                    </div>


                <br><br>

                <button class="btn btn-success btn-lg" type="submit" style="float:center;" >Sign Up</button>
                </form>
                <!-- Modal -->
                 
                @if (Session::has('message'))
                <div id="login" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Successful!</h4>
                      </div>
                      <div class="modal-body">
                        <h3>Successfully regiestered.</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>-->

                  </div>
                </div>  
              
                @endif
                <!-- Close Modal -->

                <!-- <p>Sorry</p> -->
              </div>
            </div>
          </div>
          <!-- <div class="error-message">
            <h4>Woops! Something gone wrong</h4>
            <p>Sorry, the page you have requested has either been moved,or does not exist, Return to our <a href="index.html">homepage</a>.</p>
          </div> -->

        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

@endsection

@section('extraScript')
<script>
                      $("#phone").intlTelInput({
                        // allowDropdown: false,
                        // autoHideDialCode: false,
                        // autoPlaceholder: "off",
                        // dropdownContainer: "body",
                        // excludeCountries: ["us"],
                        // geoIpLookup: function(callback) {
                        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        //     var countryCode = (resp && resp.country) ? resp.country : "";
                        //     callback(countryCode);
                        //   });
                        // },
                        // initialCountry: "auto",
                         nationalMode: false,
                        // numberType: "MOBILE",
                        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                        // preferredCountries: ['cn', 'jp'],
                        // separateDialCode: true,
                        utilsScript: "public/build/js/utils.js"
                      });

                      $("form").submit(function() {
  $("#phone").val($("#phone").intlTelInput("getNumber"));
});

</script>
@endsection