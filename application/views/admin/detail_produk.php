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
                                <td><strong><?= $pdk->kategori ?></strong></td>
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
                        <?= anchor('dasboard/tambah_keranjang/' . $pdk->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke keranjang</div>') ?>
                        <!-- <?= anchor('dasboard/index/', '<div class="btn btn-danger btn-sm">Kembali</div>') ?> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>