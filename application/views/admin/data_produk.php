<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_produk"><i class='bx bxs-plus-square'></i> Tambah Produk</button>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($produk as $pdk) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $pdk->nama_brg ?></td>
                <td><?= $pdk->keterangan ?></td>
                <td><?= $pdk->kategori ?></td>
                <td><?= $pdk->harga ?></td>
                <td><?= $pdk->stok ?></td>
                <td>
                    <?= anchor('admin/data_produk/detail/' . $pdk->id_brg, '<div class="btn btn-success btn-sm"><i class="bx bx-detail"></i>
                    </div>') ?>
                </td>
                <td>
                    <?= anchor('admin/data_produk/edit/' . $pdk->id_brg, '<div class="btn btn-warning btn-sm"><i class="bx bxs-edit" ></i>
                    </div>') ?>
                </td>
                <td>
                    <?= anchor('admin/data_produk/delete/' . $pdk->id_brg, '<div class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i>
                    </div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- tambah data -->
<div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() . 'admin/data_produk/tambah_produk'; ?>" method="post" enctype="multipart/form-data">
                    <div class="from-group">
                        <label for="">Nama Produk</label>
                        <input type="text" name="nama_brg" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Kategori</label>
                        <input type="text" name="kategori" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control" required>
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