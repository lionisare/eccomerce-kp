<div class="container-fluid">
    <h3>Data Konfirmasi Pembayaran</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>Nama Pemesan</th>
                <th>Nama Konfirmasi</th>
                <th>Asal Bank</th>
                <th>Tujuan Bank</th>
                <th>Jumlah</th>
                <th>Gambar</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($konfirmasi as $konf) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $konf->nama_pengguna ?></td>
                    <td><?= $konf->nama_konfirmasi ?></td>
                    <td><?= $konf->dari_bank ?></td>
                    <td><?= $konf->ke_bank ?></td>
                    <td>Rp.<?= number_format($konf->jumlah, 0, ',', '.') ?></td>
                    <td>
                        <img src="<?= base_url('upload/konfirmasi/' . $konf->gambar) ?>" height="70px" width="70px" alt="">
                    </td>
                    <td>
                        <?= anchor('admin/konfirmasi/detail_konfirmasi/' . $konf->id_konfirmasi, '<div class="btn btn-info btn-sm">Detail
                        </div>') ?>
                    </td>
                    <td>
                        <?= anchor('admin/konfirmasi/delete/' . $konf->id_konfirmasi, '<div class="btn btn-danger btn-sm">Hapus
                           </div>') ?>
                    </td>
                </tr>
            <?php endforeach ?>
            <?= $this->session->flashdata('pesan') ?>
        </thead>
    </table>
</div>