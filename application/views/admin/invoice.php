<div class="container-fluid">
    <h3>Data Pemesanan</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id Pemesanan</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($invoice as $inv) : ?>
                <tr>
                    <td><?= $inv->id_invoice ?></td>
                    <td><?= $inv->nama ?></td>
                    <td><?= $inv->alamat ?></td>
                    <td><?= $inv->tgl_pesan ?></td>
                    <td><?= $inv->batas_bayar ?></td>
                    <td>
                        <?= anchor('admin/invoice/detail/' . $inv->id_invoice, '<div class="btn btn-info btn-sm">Detail</div>') ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>