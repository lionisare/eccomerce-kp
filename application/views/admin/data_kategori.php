<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_kategori"><i class='bx bxs-plus-square'></i> Tambah Kategori</button>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($kategori as $ktr) : ?>
            <tbody>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ktr->nama_kategori ?></td>
                    <td>
                        <?= anchor('admin/data_kategori/edit_kategori/' . $ktr->kategori_id, '<div class="btn btn-warning btn-sm">Edit
                    </div>') ?>
                        <?= anchor('admin/data_kategori/delete_kategori/' . $ktr->kategori_id, '<div class="btn btn-danger btn-sm">Hapus
                    </div>') ?>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
        <?= $this->session->flashdata('pesan') ?>
    </table>
</div>

<!-- tambah data -->
<div class="modal fade" id="tambah_kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_kategori/tambah_kategori'; ?>" method="post" enctype="multipart/form-data">
                    <div class="from-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" required>
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