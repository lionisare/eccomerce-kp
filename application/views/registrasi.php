<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="text-gray-900 mb-4">Selamat Datang Di Toko Wangunsari</h1>
                                <h5 class="text-gray-900 mb-4">Silakan Daftar Akun Anda</h5>
                            </div>
                            <form class="user" method="post" action="<?= base_url('registrasi/index') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama pengguna">
                                    <?= form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                    <?= form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password_1" name="password_1" placeholder="Password">
                                        <?= form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password_2" name="password_2" placeholder="Konfirmasi Password">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">Daftar</button>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/login') ?>">Sudah punya akun? Silakan login!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>