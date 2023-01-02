<div class="container-fluid">
    <h3>Data Konfirmasi Pembayaran</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Konfirmasi</th>
                <!-- <th>ID Pesanan</th> -->
                <th>Nama</th>
                <th>Asal Bank</th>
                <th>Tujuan Bank</th>
                <th>Jumlah</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($konfirmasi as $konf) : ?>
                <tr>
                    <td><?= $konf->id_konfirmasi ?></td>
                    <!-- <td><?= $konf->id_invoice ?></td> -->
                    <td><?= $konf->nama_konfirmasi ?></td>
                    <td><?= $konf->dari_bank ?></td>
                    <td><?= $konf->ke_bank ?></td>
                    <td>Rp.<?= number_format($konf->jumlah, 0, ',', '.') ?></td>
                    <td><img src="<?= base_url('upload/konfirmasi/' . $konf->gambar) ?>" height="70px" width="70px" alt=""></td>
                    <td>
                        <?= anchor('admin/konfirmasi/detail/' . $konf->id_konfirmasi, '<div class="btn btn-success btn-sm">lihat bukti transaksi
                    </div>') ?>
                    </td>
                    <!-- <td>
                        <?= anchor('admin/konfirmasi/detail_konfirmasi/' . $konf->id_konfirmasi, '<div class="btn btn-info btn-sm">Detail</div>') ?>
                    </td> -->
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>