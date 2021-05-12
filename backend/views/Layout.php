<!doctype html>
<html lang="en">

<head>
    <title>BẢNG ĐIỀU KHIỂN || FLASH_STORE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/backend/layout1/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/backend/layout1/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/backend/layout1/vendor/linearicons/style.css">
    <link rel="stylesheet" href="../assets/backend/layout1/vendor/chartist/css/chartist-custom.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/backend/layout1/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="../assets/backend/layout1/css/demo.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/backend/layout1/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/backend/layout1/img/favicon.png">
       <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="../assets/backend/layout1/img/logo.jpg" width="75px;" style="margin-top: -10px;" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Tìm kiếm..." style="border-color: green;">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary" style="background-color: green; border-color: green;">TÌM</button></span>
                    </div>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">Xem tất cả thông báo</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Trợ giúp</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sử dụng cơ bản</a></li>
                                <li><a href="#">Làm việc với dữ liệu</a></li>
                                <li><a href="#">Bảo vệ</a></li>
                                <li><a href="#">Xử lí sự cố</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo $_SESSION['name']; ?>(ID: <?php echo $_SESSION['id']; ?>)</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>Thông tin của tôi</span></a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Tin nhắn</span></a></li>
                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Cài đặt</span></a></li>
                                <li><a href="index.php?controller=login&action=logout"><i class="lnr lnr-exit"></i> <span>Đăng xuất</span></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar" style="margin-top: 10px;">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Bảng điều khiển</span></a></li>

                        
                        <li><a href="index.php?controller=news&action=checkOut" class=""><i class="lnr lnr-alarm"></i> <span>Tin tức</span></a></li>


                        <li class="click"><a href="index.php?controller=categories&action=checkOut" class=""><i class="lnr lnr-chart-bars"></i> <span>Danh mục sản phẩm</span></a></li>

                        <li class="click"><a href="index.php?controller=products&action=checkOut" class=""><i class="lnr lnr-chart-bars"></i> <span>Danh sách sản phẩm</span></a></li>
                         <li class="click"><a href="index.php?controller=promotions&action=checkOut" class=""><i class="lnr lnr-chart-bars"></i> <span>Banner quảng cáo</span></a></li>
                        <li>
                    <a href="index.php?controller=orders&action=checkOut">
                        <i class="lnr lnr-chart-bars"></i> <span>Đơn hàng</span>
                    </a>
                </li>

                         <li class="click"><a href="index.php?controller=users&action=checkOut" class=""><i class="lnr lnr-code"></i> <span>Quản lý người dùng</span></a></li>

                        <li>
                            <a href="#" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Trang</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Hồ sơ</a></li>
                                    <li><a href="index.php?controller=login&action=logout" class="">Login</a></li>
                                    <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <style type="text/css">
            .sidebar-scroll li:hover{background: black;}
        </style>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
              <?php echo $this->view; ?>
                                
        </div>
        <!-- END MAIN -->
        
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="../assets/backend/layout1/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/backend/layout1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/backend/layout1/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/backend/layout1/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="../assets/backend/layout1/vendor/chartist/js/chartist.min.js"></script>
    <script src="../assets/backend/layout1/scripts/klorofil-common.js"></script>
    
   
</body>

</html>
