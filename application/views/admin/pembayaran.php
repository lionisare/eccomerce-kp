<div class="container-fluid">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Alamat pengiriman & <span>pembayaran</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="btn btn-info btn-sm">
                    <?php $sub_total = 0;
                    if ($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item) {
                            $sub_total = $sub_total + $item['subtotal'];
                        }
                        echo "Total Belanjaan Anda: Rp. " . number_format($sub_total, 0, ',', '.');
                    ?>
                </div><br><br>
                <h4>Silakan input almat pengiriman & pembayaran</h4>
                <form action="<?= base_url('dasboard/proses_pesanan') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" id="" placeholder="Nama lengkap" required>
                    </div>
                    <div>
                        <label for="">Alamat</label>
                        <input class="form-control" type="text" name="alamat" id="" placeholder="Alamat lengkap anda" required>
                    </div>
                    <div>
                        <label for="">No Telepon</label>
                        <input class="form-control" type="number" name="no_telp" id="" placeholder="No Telpon Aktif/WA" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">Pesan</button>
                    <a class="btn btn-success btn-sm" href="https://api.whatsapp.com/send?phone=<?= $whatsapp['nilai'] ?>&text=<?= $whatsapp_message['nilai'] ?>" target="_blank">Pesan Via WA</a>
                </form>
            <?php
                    } else {
                        echo "Tidak ada produk dalam keranjang anda";
                    }
            ?>
            <br>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>