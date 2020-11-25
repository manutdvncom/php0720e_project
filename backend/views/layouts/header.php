<?php

?>
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <i class="fa fa-bars"></i>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php?controller=user&action=register">Đăng Ký</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?controller=user&action=login">Đăng nhập</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
<!--        <div class="user-panel">-->
<!--            <div class="pull-left image">-->
<!--                <img src="" class="img-circle" alt="User Image">-->
<!--            </div>-->
<!--            <div class="pull-left info">-->
<!--                <p></p>-->
<!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
<!--            </div>-->
<!--        </div>-->
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
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($this->error)): ?>
            <div class="alert alert-danger">
                <?php
                echo $this->error;
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>
        <!--        <div class="alert alert-danger">Lỗi validate</div>-->
        <!--        <p class="alert alert-success">Thành công</p>-->
    </section>
</div>