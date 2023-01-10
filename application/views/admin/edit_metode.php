<div class="container-fluid">
    <h4>Edit Data Metode Pembayaran</h4>
    <?php foreach ($pembayaran as $bayar) : ?>
        <form method="post" action="<?= base_url() . 'admin/data_pembayaran/update_metode' ?>">
            <div class="from-group">
                <label for="">Nama Bank & No Rekening</label>
                <input type="hidden" name="id" class="form-control" value="<?= $bayar->id ?>" required>
                <input type="text" name="nama_bank" class="form-control" value="<?= $bayar->nama_bank ?>" required>
            </div>
            <div class="from-group">
                <label for="">No Rekening</label>
                <input type="text" name="no_rekening" class="form-control" value="<?= $bayar->no_rekening ?>" required>
            </div>
            <div class="from-group">
                <label for="">Nama Rekening</label>
                <input type="text" name="nama_rekening" class="form-control" value="<?= $bayar->nama_rekening ?>" required>
            </div>
            <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
        </form>
    <?php endforeach; ?>
</div>