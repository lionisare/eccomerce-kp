<div class="container-fluid">
    <h4>Edit Data Kategori</h4>
    <?php foreach ($kategori as $ktr) : ?>
        <form method="post" action="<?= base_url() . 'admin/data_kategori/update' ?>">
            <div class="from-group">
                <label for="">Nama Kategori</label>
                <input type="hidden" name="kategori_id" class="form-control" value="<?= $ktr->kategori_id ?>" required>
                <input type="text" name="nama_kategori" class="form-control" value="<?= $ktr->nama_kategori ?>" required>
            </div>
            <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
        </form>
    <?php endforeach; ?>
</div>