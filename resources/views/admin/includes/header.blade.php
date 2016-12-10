<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('protected')}}">
                    <img class="img-responsive2" src="{{url('public/images/admin/gemicid.jpg')}}" style="width:150px;height:37px;"></a>
            </div>
            <!-- /.navbar-header -->

            <!-- /.dropdown navbar-top-right -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->username }} <span class="caret"></span>
                            <i class="fa fa-user fa-fw"></i></i>
                        </a>
                        
                    <ul class="dropdown-menu dropdown-user">
                        <li><a class="knowmore-btn" href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                            LOGOUT
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form><i class="fa fa-sign-out fa-fw"></i> Logout</li>
                    </ul><!-- /.dropdown-user -->
                </li><!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!-- SIDE BAR -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <!--<form class="sidebar-nav navbar-collapse" role="form" method="GET" action="{{ url('amino_index')}}">-->
                    <ul class="nav" id="side-menu">
                        <li class=""></li>
                        <li><a href="{{ URL::to('homeAdmin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                        <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Configuration<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ URL::to('amino_index') }}">Amino Acids</a></li>
                                <li><a href="{{ URL::to('gene_index') }}">Genes Bank</a></li>
                                <!-- <li><a href="#{{ URL::to('user_index') }}">User</a></li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li><a href="#{{ URL::to('report_index') }}"><i class="fa fa-table fa-fw"></i>Report</a></li> -->
                    </ul>
                    <!--</form>-->
                </div><!-- /.sidebar-collapse -->

                <br><br>
                <!-- /.panel -->
                <div class="panel-heading">
                    <i class="fa fa-question-circle-o fa-fw"></i><strong>Help Desk</strong>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <p>Please contact us via call or email at anytime you require our assistance.</p>
                    <strong class="primary-font; fa fa-mobile"> Tel: 07-7777777</strong><br>
                    <strong class="primary-font; fa fa-envelope-square"> Email: ad.gemicid@gmail.com</strong>
                </div>

            </div><!-- /.navbar-static-side -->
        </nav>