<div class="container-fluid">
    <div class="container-fluid">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Keranjang <span>anda</span>
                </h2>
            </div>
            <br>
            <Table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($this->cart->contents() as $items) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $items['name'] ?></td>
                        <td><?= $items['qty'] ?></td>
                        <td align="right">Rp.<?= number_format($items['price'], 0, ',', '.') ?></td>
                        <td align="right">Rp.<?= number_format($items['subtotal'], 0, ',', '.')  ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
                </tr>
            </Table>
            <div align="right">
                <a href="<?= base_url('dasboard/hapus_keranjang') ?>">
                    <div class="btn btn-danger btn-sm">Hapus Keranjang</div>
                </a>
                <a href="<?= base_url('tampil_produk/tampil_produk') ?>">
                    <div class="btn btn-primary btn-sm">Tambah Produk Lain</div>
                </a>
                <a href="<?= base_url('dasboard/pembayaran') ?>">
                    <div class="btn btn-success btn-sm">Checkout</div>
                </a>
            </div><br>
        </div>
    </div>
</div>