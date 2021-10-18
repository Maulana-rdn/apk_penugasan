
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

              <!-- Nav Item - Data Wakel -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_wakel/')?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Wakel</span></a>
            </li>


            <!-- Nav Item - Data Siswa -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_siswa/') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Siswa</span></a>
            </li>

             <!-- Nav Item - Data Tugas -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_tugas/') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Tugas</span></a>
            </li>

             <!-- Nav Item - Tentang -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/tentang/') ?>">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Tentang</span></a>
            </li>

           <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mt-3 mb-0 text-gray-800">Selamat Datang Admin Penugasan</h1>
          </div>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

         
            <ul class="na navbar-nav navbar-right">
              <div class="topbar-divider d-none d-sm-block"></div>
                <li class="ml-2"><?php echo anchor('auth/logout','Logout') ?></li>


</ul>
</nav>