<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_metode"><i class='bx bxs-plus-square'></i> Tambah Data</button>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <?= $this->session->flashdata('pesan') ?>
            <tr>
                <th>NO</th>
                <th>Nama Bank</th>
                <th>No Rekening</th>
                <th>Nama Rekening</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($pembayaran as $bayar) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $bayar->nama_bank ?></td>
                <td><?= $bayar->no_rekening ?></td>
                <td><?= $bayar->nama_rekening ?></td>
                <td>
                    <?= anchor('admin/data_pembayaran/edit_metode/' . $bayar->id, '<div class="btn btn-warning btn-sm">Edit
                    </div>') ?>
                </td>
                <td>
                    <?= anchor('admin/data_pembayaran/delete_metode/' . $bayar->id, '<div class="btn btn-danger btn-sm">Hapus
                    </div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- tambah data -->
<div class="modal fade" id="tambah_metode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_pembayaran/tambah_metode'; ?>" method="post" enctype="multipart/form-data">
                    <div class="from-group">
                        <label for="">Nama Bank</label>
                        <input type="text" name="nama_bank" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">No Rekening</label>
                        <input type="text" name="no_rekening" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Nama Rekening</label>
                        <input type="text" name="nama_rekening" class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>