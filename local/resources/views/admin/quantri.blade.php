
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <base href="{{ asset('local/storage/app/public/admin') }}/">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{asset('admin')}}">VNG-GROUP</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Top Navigation: Left Menu -->
            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="{{asset('admin')}}"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <!-- Top Navigation: Right Menu -->
            <ul class="nav navbar-right navbar-top-links">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> xin chào <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li class="divider"></li>
                        <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>


                        <li>
                            <a href="{{asset('quanlydichvu')}}">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Dịch vụ thẩm định
                                </div>
                            </a>
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Dự án tiêu biểu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('quanlyduantieubieu/bds')}}"> Thẩm định giá bất động sản</a>
                                </li>
                                <li>
                                    <a href="{{asset('quanlyduantieubieu/vt')}}"> Thẩm định phương tiện vận tải</a>
                                </li>
                                <li style="margin-top: unset;">
                                    <a href="{{asset('quanlyduantieubieu/ms')}}"> Thẩm định giá máy móc thiết bị</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>




                        <li>
                            <a href="{{asset('quanlylinhvuc')}}"><i class="fa fa-dashboard fa-fw"></i> Lĩnh vực</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlyvanban')}}"><i class="fa fa-dashboard fa-fw"></i> Văn bản</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlytailieu')}}"><i class="fa fa-dashboard fa-fw"></i> Tài liệu</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlydoitac')}}"><i class="fa fa-dashboard fa-fw"></i> Đối tác</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlytintuc')}}"><i class="fa fa-dashboard fa-fw"></i> Tin tức</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlynhansu')}}"><i class="fa fa-dashboard fa-fw"></i> Nhân sự</a>
                        </li>
                        <li>
                            <a href="{{asset('ykienkhachhang')}}"><i class="fa fa-dashboard fa-fw"></i> Ý kiến khách hàng</a>
                        </li>
                        <li>
                            <a href="{{asset('tuvankhachhang')}}"><i class="fa fa-dashboard fa-fw"></i> Tư vấn khách hàng</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlybanner')}}"><i class="fa fa-dashboard fa-fw"></i> Banner</a>
                        </li>
                        <li>
                            <a href="{{asset('quanlythanhvien')}}"><i class="fa fa-dashboard fa-fw"></i> Quản lý thành viên</a>
                        </li>

                        <li id="logout">
                            <a href="{{asset('logout')}}"><img src="../images/exit-512.png" width="20px" height="20px"> Đăng xuất</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        @yield('main')
                        {{-- <h1 class="page-header">Page Title</h1> --}}
                    </div>
                </div>

                <!-- ... Your content goes here ... -->

            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

    <script src="js/bootstrap-table.min.js"></script>

    <script src="js/xoa.js"></script>



    @yield('script')



</body>
</html>
