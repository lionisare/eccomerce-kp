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
                <td><?= $pdk->nama_kategori ?></td>
                <td><?= $pdk->harga ?></td>
                <td><?= $pdk->stok ?></td>
                <td>
                    <?= anchor('admin/data_produk/detail/' . $pdk->id_brg, '<div class="btn btn-info btn-sm">Detail
                    </div>') ?>
                <td>
                    <?= anchor('admin/data_produk/edit/' . $pdk->id_brg, '<div class="btn btn-warning btn-sm">Edit
                    </div>') ?>
                </td>
                <td>
                    <?= anchor('admin/data_produk/delete/' . $pdk->id_brg, '<div class="btn btn-danger btn-sm">Hapus
                    </div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <?= $this->session->flashdata('pesan') ?>
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
                        <select name="kategori_id" class="form-control" required>
                            <?php foreach ($kategoris as $kategori) : ?>
                                <option value="<?= $kategori->kategori_id ?>"><?= $kategori->nama_kategori ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="from-group">
                        <label for="">Harga</label>
                        <input type="number" min="0" name="harga" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Stok</label>
                        <input type="number" min="0" name="stok" class="form-control" required>
                    </div>
                    <div class="from-group">
                        <label for="">Gambar Produk</label><br>
                        <input type="file" name="gambar" accept="image/*" class="form-control" required>
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