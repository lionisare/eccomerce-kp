<div class="container-fluid">
    <h4>Edit Data Produk</h4>
    <a href="<?= base_url('admin/data_produk/index') ?>">
        <div class="btn btn-primary btn-sm">Kembali</div>
    </a>
    <?php foreach ($produk as $pdk) : ?>
        <form action="<?= base_url() . 'admin/data_produk/update' ?>" method="post">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_brg" class="form-control" value="<?= $pdk->nama_brg ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?= $pdk->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?= $pdk->keterangan ?>">
            </div>
            <div class="from-group">
                <label for="">Kategori</label>
                <select name="kategori_id" class="form-control" required>
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($kategoris as $kategori) : ?>
                        <option value="<?= $kategori->kategori_id ?>" <?= $pdk->kategori_id == $kategori->kategori_id ? 'selected' : '' ?>><?= $kategori->nama_kategori ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $pdk->harga ?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $pdk->stok ?>">
            </div>
            <div class="card col-md-4">
                <label>Gambar</label>
                <img src="<?= base_url() . '/upload/' . $pdk->gambar ?>" alt="gambar" class="w-100">
            </div>
            <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
        </form>
    <?php endforeach; ?>
</div>