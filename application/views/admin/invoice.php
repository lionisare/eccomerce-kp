<div class="container-fluid">
    <h3>Data Pemesanan</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <?= $this->session->flashdata('pesan') ?>
            <tr>
                <th>NO</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($invoice as $inv) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $inv->nama ?></td>
                    <td><?= $inv->alamat ?></td>
                    <td><?= $inv->tgl_pesan ?></td>
                    <td><?= $inv->batas_bayar ?></td>
                    <td>
                        <?= anchor('admin/invoice/detail/' . $inv->id_invoice, '<div class="btn btn-info btn-sm">Detail</div>') ?>
                    </td>
                    <td>
                        <?= anchor('admin/invoice/hapus/' . $inv->id_invoice, '<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>
</div>