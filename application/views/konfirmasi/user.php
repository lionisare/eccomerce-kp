<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h4>Konfirmasi Pembayaran</h4>
            <form action="<?= base_url() . '/Konfirmasi/tambah_konfirmasi'; ?>" method="post">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama" id="" placeholder="Nama sesuai rekening" required>
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
                    <input class="form-control" type="text" name="jumlah" id="" placeholder="jumlah uang yang di transfer" required>
                </div>
                <div class="form-group">
                    <label for="">Foto Bukti Transaksi</label><br>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Konfirmasi</button>
            </form>
        </div>
    </div>
</div>