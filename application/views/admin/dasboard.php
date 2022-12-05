<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <?= $this->session->flashdata('pesan') ?>
        <a class="carousel-control-prev" role="button" href="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-prev" role="button" href="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row text-center mt-4">
        <?php foreach ($produk as $pdk) : ?>
            <div class="col-lg-4 col-md-6 col-xl-3">
                <div class="card ml-3 mb-3 ">
                    <div class="card-body p-0">
                        <img src="<?= base_url() . '/upload/' . $pdk->gambar ?>" class="card-img-top" alt="..." style="height: 300px; object-fit: cover;    object-position: center; border-radius: 8px;">
                        <div class="p-4">
                            <h5 class="card-title"><?= $pdk->nama_brg ?></h5>
                            <small><?= $pdk->keterangan ?></small><br>
                            <span class="badge badge-info mb-3">Rp. <?= number_format($pdk->harga, 0, ',', '.')  ?></span><br>
                            <?= anchor('dasboard/tambah_keranjang/' . $pdk->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke keranjang</div>') ?>
                            <?= anchor('dasboard/detail_produk/' . $pdk->id_brg, '<div class="btn btn-success btn-sm">Detail</div>') ?>
                            <!-- <a href="#" class="btn btn-sm btn-primary">Tambar Ke Keranjang</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-success">Detail</a> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>