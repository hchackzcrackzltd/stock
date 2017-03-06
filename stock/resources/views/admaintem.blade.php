<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Stock Stationery| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('Tool/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Tool/fontawesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('Tool/ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('Tool/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Tool/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('Tool/dist/css/skins/skin-green.min.css')}}">
  <link rel="stylesheet" href="{{asset('Tool/plugins/datatables/dataTables.bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('Tool/plugins/sweetalert/sweetalert2.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 2.2.3 -->
  <script src="{{asset('Tool/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="{{asset('Tool/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('Tool/plugins/fastclick/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('Tool/dist/js/app.min.js')}}"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="{{asset('Tool/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('Tool/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('Tool/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('Tool/plugins/sweetalert/sweetalert2.min.js')}}"></script>
</head>
<body class="hold-transition skin-green sidebar-collapse sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{route('index')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>TN</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Stock</b>Stationery</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag"></i>
                <span class="label label-danger">2</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 2 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{asset('Tool/dist/img/fam.gif')}}" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Alert!
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Folder is empty</p>
                      </a>
                    </li>
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{asset('Tool/dist/img/pen.jpg')}}" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          Warning!
                          <small><i class="fa fa-clock-o"></i> 8 mins</small>
                        </h4>
                        <p>Pen almost empty</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{asset('Tool/dist/img/avatar5.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">DoDayDream</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{asset('Tool/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">

                  <p>
                    DoDayDream - Web Developer
                    <small>Member since Nov. 2017</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('Tool/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>DoDayDream</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="{{route('index')}}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="treeview">
            <a>
              <i class="fa fa-archive"></i>
              <span>Inventory</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('itemmaster_view')}}"><i class="fa fa-circle-o"></i> Item Master</a></li>
              <li><a href="{{route('goodsreceipt_view')}}"><i class="fa fa-circle-o"></i> Goods Receipt</a></li>
              <li><a href="{{route('goodsissue_view')}}"><i class="fa fa-circle-o"></i> Goods Issue</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="../widgets.html">
              <i class="fa fa-file"></i> <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="top-nav.html"><i class="fa fa-circle-o"></i> Report1</a></li>
              <li><a href="boxed.html"><i class="fa fa-circle-o"></i> Report2</a></li>
              <li><a href="fixed.html"><i class="fa fa-circle-o"></i> Report3</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Develop By <a href="http://almsaeedstudio.com">DoDayDream</a>.</strong> All rights
      reserved.
    </footer>
    @yield('script')
</body>
</html>
