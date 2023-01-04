<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Detail konfirmasi Pembayaran</h4>
            <!-- <div class="btn btn-success btn-sm">No. Invoice: <?= $invoice->id_invoice ?></div> -->
        </div>
        <div class="card-body">
            <?php foreach ($konfirmasi as $konf) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/upload/konfirmasi/' . $konf->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama pengguna</td>
                                <td><strong><?= $konf->nama_pengguna ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nama Konfirmasi</td>
                                <td><strong><?= $konf->nama_konfirmasi ?></strong></td>
                            </tr>
                            <tr>
                                <td>Asal Bank</td>
                                <td><strong><?= $konf->dari_bank ?></strong></td>
                            </tr>
                            <tr>
                                <td>Tujuan Bank</td>
                                <td><strong><?= $konf->ke_bank ?></strong></td>
                            </tr>
                            <tr>
                                <td>Jumlah Uang</td>
                                <td><strong>
                                        <div class="btn btn-info btn-sm">Rp. <?= number_format($konf->jumlah, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <a href="<?= base_url('admin/konfirmasi/index') ?>">
                            <div class="btn btn-primary btn-sm">Kembali</div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>