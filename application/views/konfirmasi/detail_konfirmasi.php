<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Detail konfirmasi Pembayaran</h4>
        </div>
        <div class="card-body">
            <thead class="thead-dark">
                <tr>
                    <th>ID Konfirmasi</th>
                    <!-- <th>ID Pesanan</th> -->
                    <th>Nama Konfirmasi</th>
                    <th>Asal Bank</th>
                    <th>Bank Tujuan</th>
                    <th>Jumlah</th>
                    <th>Bukti Transaksi</th>
                </tr>
                <?php foreach ($konfirmasi as $konf) : ?>
                    <tr>
                        <td><?= $konf->id_konfirmasi ?></td>
                        <td><?= $konf->nama_konfirmasi ?></td>
                        <td><?= $konf->dari_bank ?></td>
                        <td><?= $konf->ke_bank ?></td>
                        <td>Rp.<?= number_format($konf->jumlah, 0, ',', '.') ?></td>
                        <td><?= $konf->gambar ?></td>
                    </tr>
                <?php endforeach; ?>
            </thead>
            </d>
        </div>
    </div>