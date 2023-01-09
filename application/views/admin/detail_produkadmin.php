<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Detail Produk</h4>
        </div>
        <div class="card-body">
            <?php foreach ($produk as $pdk) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/upload/' . $pdk->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $pdk->nama_brg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $pdk->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $pdk->nama_kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $pdk->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-info btn-sm">Rp. <?= number_format($pdk->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <a href="<?= base_url('admin/data_produk/index') ?>">
                    <div class="btn btn-primary btn-sm">Kembali</div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>