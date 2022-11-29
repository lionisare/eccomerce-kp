<div class="container-fluid">
    <h3>Data Pemesanan</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id Konfirmasi</th>
                <th>Nama</th>
                <th>ID Pesanan</th>
                <th>Asal Bank</th>
                <th>Tujuan Bank</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($konfirmasi as $konf) : ?>
                <tr>
                    <td><?= $konf->id_konfirmasi ?></td>
                    <td><?= $konf->nama ?></td>
                    <td><?= $konf->id ?></td>
                    <td><?= $konf->dari_bank ?></td>
                    <td><?= $konf->ke_bank ?></td>
                    <td><?= $konf->jumlah ?></td>
                    <td>
                        <?= anchor('admin/konfirmasi/detail_konfirmasi/' . $konf->id_konfirmasi, '<div class="btn btn-info btn-sm">Detail</div>') ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>