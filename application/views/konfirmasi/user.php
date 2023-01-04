<div class="container-fluid">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Konfirmasi <span>Pembayaran</span>
            </h2>
        </div>
        <di class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <form action="<?= base_url() . '/Konfirmasi/tambah_konfirmasi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama Pemesan</label>
                        <input class="form-control" type="text" name="nama_pengguna" id="" placeholder="Nama pemesan">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Sesuai Rekening</label>
                        <input class="form-control" type="text" name="nama_konfirmasi" id="" placeholder="Nama sesuai rekening" required>
                    </div>
                    <div class="form-group">
                        <label for="">Asal Bank</label>
                        <input class="form-control" type="text" name="dari_bank" id="" placeholder="asal bank" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tujuan Bank</label>
                        <input class="form-control" type="text" name="ke_bank" id="" placeholder="tujuan bank" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input class="form-control" type="number" name="jumlah" id="" placeholder="jumlah uang yang di transfer" required>
                    </div>
                    <div class="form-group">
                        <label for="">Foto Bukti Transaksi</label><br>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Konfirmasi</button>
                </form>
            </div>
    </div><br>
</div>