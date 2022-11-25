<div class="container-fluid">
    <h4>Detail Pemesanan <div class="btn btn-success btn-sm">No. Invoice: <?= $invoice->id ?></div>
    </h4>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Jumlah Pesan</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
            <?php
            $total = 0;
            foreach ($pesanan as $pesan) :
                $subtotal = $pesan->jumlah * $pesan->harga;
                $total += $subtotal;
            ?>
                <tr>
                    <td><?= $pesan->id_brg ?></td>
                    <td><?= $pesan->nama_brg ?></td>
                    <td><?= $pesan->jumlah ?></td>
                    <td><?= number_format($pesan->harga, 0, ',', '.') ?></td>
                    <td><?= number_format($subtotal, 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td colspan="4" align="right">Total Keseluruhan :</td>
                    <td align="right">Rp. <?= number_format($total, 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </thead>
    </table>
    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-primary btn-sm">Kembali</div>
    </a>
</div>