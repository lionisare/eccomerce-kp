<div class="container-fluid">
    <h4>Edit Data Produk</h4>
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
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?= $pdk->kategori ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $pdk->harga ?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $pdk->stok ?>">
            </div>
            <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
        </form>
    <?php endforeach; ?>
</div>