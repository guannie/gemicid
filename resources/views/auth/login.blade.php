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
                <p>Log In</p>
                  <br>
                  <br>
                <h2>Welcome back!</h2>

                <br><br><br>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" role="form" method="POST" action="{{ url('/login') }}">
                      <label style="float:left;">Username</label>
                      <a href="#" data-toggle="tooltip" data-placement="right" title="e.g. amirah28" style="float:right;">
                      <span class="glyphicon glyphicon-question-sign"></span></a>
                      <div class="input-group col-md-12  col-sm-6 col-xs-10 pull-right">
                              <input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required/>
                              @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                              @endif
                      </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label style="float:left;">Password</label>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="e.g amirahbest123" style="float:right;">
                    <span class="glyphicon glyphicon-question-sign"></span></a>
                      <div class="input-group col-md-12  col-sm-6 col-xs-10 pull-right" >
                          <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required/>
                          @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                          @endif
                      </div>
                 </div>

              


                <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                </div>
                
                <br>

                <div class="form-group">
                      <button class="btn btn-success btn-lg" type="submit" value="submit" style="float:center;" data-toggle="modal" data-target="#login">Log In</button>
                      <a class="btn btn-link" href="{{ url('password/reset') }}">
                                          Forgot Your Password?
                      </a>
                </div>
      
                  </form>  
                 @if (Session::has('message'))  
                <!-- Modal -->
                <div id="login" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Successful!</h4>
                      </div>
                      <div class="modal-body">
                        <h3>Successfully logged in.</h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- Close Modal -->
                @endif
           </div>
           </div>
           </div>       
        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->
@endsection