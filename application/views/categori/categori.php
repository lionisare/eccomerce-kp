<div class="container-fluid">
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Kategori <span></span>
                </h2>
            </div>
            <div class="row text-center mt-4">
                <?php foreach ($kategori as $pdk) : ?>
                    <div class="card ml-3 mb-3" style="width: 16rem;">
                        <img src="<?= base_url() . '/upload/' . $pdk->gambar ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pdk->nama_brg ?></h5>
                            <small><?= $pdk->keterangan ?></small><br>
                            <span class="badge badge-info mb-3">Rp. <?= number_format($pdk->harga, 0, ',', '.')  ?></span>
                            <?= anchor('dasboard/tambah_keranjang/' . $pdk->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke keranjang</div>') ?>
                            <?= anchor('dasboard/detail_produk/' . $pdk->id_brg, '<div class="btn btn-success btn-sm">Detail</div>') ?>
                            <!-- <a href="#" class="btn btn-sm btn-primary">Tambar Ke Keranjang</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-success">Detail</a> -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
</div>