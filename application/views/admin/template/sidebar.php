<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- End of Topbar -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <a class="navbar-brand" href="<?= base_url('welcome') ?>">TOKO WANGUNSARI</a>
                    <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('welcome') ?>">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('Konfirmasi/proses_konfirmasi') ?>">Konfirmasi Pembayaran</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Kategori
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?= base_url('categori/pertanian') ?>">Pertanian</a>
                                    <a class="dropdown-item" href="<?= base_url('categori/peternakan') ?>">Perternakan</a>
                                    <a class="dropdown-item" href="<?= base_url('categori/oleholeh') ?>">Makanan & Minuman</a>
                                    <a class="dropdown-item" href="<?= base_url('categori/umkm') ?>">UMKM</a>
                                </div>
                            </li>
                            <div class="navbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <?php
                                        $keranjang = '<i class= "bx bxs-cart" >: </i>' . $this->cart->total_items() .  ''
                                        ?>
                                        <?= anchor('dasboard/detail_keranjang', $keranjang) ?>
                                    </li>
                                </ul>
                                <!-- login -->
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <ul class="nav navbar-nav navbar-right">
                                    <?php if ($this->session->userdata('username')) {
                                    ?>
                                        <li>Selamat Datang <?= $this->session->userdata('username') ?></li>
                                        <li class="ml-3"><?= anchor('auth/logout', 'Logout');  ?></li>
                                    <?php  } else { ?>
                                        <li><?= anchor('auth/login', 'Login'); ?></li>
                                    <?php }  ?>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>