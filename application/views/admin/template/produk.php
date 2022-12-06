    <!-- product section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Produk <span>Kami</span>
                </h2>
            </div>
            <div class="row">
                <?php foreach ($produk as $pdk) : ?>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card ml-3 mb-3 ">
                            <div class="card-body p-0">
                                <img src="<?= base_url() . '/upload/' . $pdk->gambar ?>" class="card-img-top" alt="..." style="height: 150px; object-fit: cover; object-position: center; border-radius: 8px;">
                                <div class="p-4">
                                    <h5 class="card-title"><?= $pdk->nama_brg ?></h5>
                                    <small><?= $pdk->keterangan ?></small><br>
                                    <span class="badge badge-info mb-3">Rp. <?= number_format($pdk->harga, 0, ',', '.')  ?></span><br>
                                    <?= anchor('dasboard/tambah_keranjang/' . $pdk->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke keranjang</div>') ?>
                                    <?= anchor('dasboard/detail_produk/' . $pdk->id_brg, '<div class="btn btn-success btn-sm">Detail</div>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- end product section -->