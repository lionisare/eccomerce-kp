<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/admin_dasboard') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class='bx bx-store'></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN TOKO WANGUNSARI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $this->uri->segment('2') == 'admin_dasboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/admin_dasboard') ?>">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= $this->uri->segment('2') == 'data_produk' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/data_produk') ?>">
                    <i class='bx bxs-data'></i>
                    <span>Data Produk</span></a>
            </li>
            <li class="nav-item  <?= $this->uri->segment('2') == 'invoice' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/invoice') ?>">
                    <i class='bx bxs-file'></i>
                    <span>Data Pemesanan</span></a>
            </li>
            <li class="nav-item  <?= $this->uri->segment('2') == 'data_kategori' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/data_kategori') ?>">
                    <i class='bx bxs-file'></i>
                    <span>Data Kategori</span></a>
            </li>
            <li class="nav-item <?= $this->uri->segment('2') == 'pengaturan' ? 'active' : '' ?>">
                <a class="nav-link " href="<?= base_url('admin/pengaturan') ?>">
                    <i class='bx bxs-chip'></i>
                    <span>Pengaturan</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class='bx bxs-wallet'></i>
                    <span>Konfirmasi Pembayaran</span>
                </a>
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class='bx bx-search'></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) {
                            ?>
                                <li>Selamat Datang <?= $this->session->userdata('username') ?></li>
                                <li class="ml-3"><?= anchor('auth/logout', 'Logout');  ?></li>
                            <?php  } else { ?>
                                <li><?= anchor('auth/login', 'Login'); ?></li>
                            <?php }  ?>
                        </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->