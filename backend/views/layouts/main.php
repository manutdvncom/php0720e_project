<?php
$year = '';
$username = '';
$jobs = '';
$avatar = '';
if (!isset($_SESSION['user'])) {
    $_SESSION['error'] = 'Bạn chưa đăng nhập';
    header('Location: index.php?controller=user&action=login');
    exit();
} else {
    $username = $_SESSION['user']['username'];
    $jobs = $_SESSION['user']['jobs'];
    $avatar = $_SESSION['user']['avatar'];
    $year = date('Y', strtotime($_SESSION['user']['created_at']));
}
//echo "<pre>";
//print_r($_SESSION['user']);
//echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->page_title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets/css/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>BF</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>BigFamily</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fa fa-bars"></i>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if (!empty($avatar)):?>
                                <img src="assets/uploads/<?php echo $avatar; ?>" class="img-circle" width="50" alt="User Image">
                            <?php else: ?>
                                <img src="assets/uploads/user.png" width="30" class="img-circle" alt="User Image">
                            <?php endif;?>
                            <span class="hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <?php if (!empty($avatar)):?>
                                    <img src="assets/uploads/<?php echo $avatar; ?>" class="img-circle" alt="User Image">
                                <?php else: ?>
                                    <img src="assets/uploads/user.png" width="50" class="img-circle" alt="User Image">
                                <?php endif;?>
                                <p>
                                    <?php echo $username . ' - ' . $jobs; ?>
                                    <!--Nguyễn Viết Mạnh - Web Developer-->
                                    <small>Thành viên từ năm <?php echo $year; ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="index.php?controller=user&action=profile" class="btn btn-default btn-flat">Hồ sơ</a>
                                </div>
                                <div class="pull-right">
                                    <a href="index.php?controller=user&action=logout" class="btn btn-default btn-flat">Đăng xuất</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel" style="overflow: inherit ">
                <div class="pull-left image">
                    <?php if (!empty($avatar)):?>
                        <img src="assets/uploads/<?php echo $avatar; ?>" class="img-circle" alt="User Image">
                    <?php else: ?>
                        <img src="assets/uploads/user.png" width="50" class="img-circle" alt="User Image">
                    <?php endif;?>
                </div>
                <div class="pull-right info" >
                    <p><?php echo $username; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
                </div>
            </div>
            <br>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LAOYOUT ADMIN</li>

                <li>
                    <a href="index.php?controller=category&action=index">
                        <i class="fa fa-th"></i> <span>Quản lý danh mục</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=product&action=index">
                        <i class="fa fa-code"></i> <span>Quản lý sản phẩm</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
                <li>
                    <a href="index.php?controller=user&action=index">
                        <i class="fa fa-user"></i> <span>Quản lý user</span>
                        <span class="pull-right-container">
              <!--<small class="label pull-right bg-green">new</small>-->
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Breadcrumd Wrapper. Contains breadcrumb -->
    <div class="breadcrumb-wrap content-wrap content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
    </div>

    <!-- Messaeg Wrapper. Contains messaege error and success -->
    <div class="message-wrap content-wrap content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php if(!empty($this->error)):?>
                <div class="alert alert-danger"><?php $this->error?></div>
            <?php endif;?>
            <?php if (isset($_SESSION['error'])):?>
                <div class="alert alert-danger">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif;?>
            <?php if (isset($_SESSION['success'])):?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif;?>
        </section>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php
            echo $this->content
            ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13-pre
        </div>
        <strong>©2020 Công ty cổ phần BigFamily .Địa chỉ tại: số 1 Hoàng Đạo Thúy - Thanh Xuân - Hà Nội. Email: cskh@bigfamily.com.</strong> All rights
        reserved.
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<!--CKeditor-->
<script src="assets/ckeditor/ckeditor.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
