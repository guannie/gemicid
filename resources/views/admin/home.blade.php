@extends('layouts.admin')

@section('content')

        
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">GEMICID</h1>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->

        <div class="row">
            <!--panel visit Homepage-->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-home fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div><strong>Visit Homepage</strong></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('home') }}">
                        <div class="panel-footer">
                            <!-- <span class="pull-left"><a href="C:/Users/Masihta/Documents/Project/4 Bootstrap/Amirah_complete/homepage.html">Go To User Homepage
                            </a></span> -->
                            <span class="pull-left"><a href="{{ url('home') }}">Go To User Homepage
                            </a></span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <!--panel visit Configuration-->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">3</div>
                                <div><strong>Configurations</strong></div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <!--panel visit Report-->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bar-chart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                            <div><strong>Report</strong></div>
                        </div>
                    </div>
                </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
            </div>
        </div>
    </div>

</div><!--end of page-wrapper"-->

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default"> </div>
        </div><!-- /.panel -->

        <div class="col-lg-4">
            <div class="panel panel-default">

                

            </div><!-- /.panel .help desk-panel -->
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->    
    <!--</div> /#page-wrapper -->


@endsection
