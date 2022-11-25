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
        <?php foreach ($umkm as $pdk) : ?>
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