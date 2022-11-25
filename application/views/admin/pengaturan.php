<div class="container-fluid">
    <?= $this->session->flashdata('pesan') ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Pengaturan Nomor Whatsapp</h5>
                </div>
                <div class="card-body">
                    <form id="whatsapp-form" method="POST" action="<?= base_url('admin/pengaturan/simpan_whatsapp') ?>">
                        <div class="form-group">
                            <label>Nomor Whatsapp <small>Contoh: 62859873210505</small></label>
                            <input type="number" name="no_whatsapp" class="form-control" value="<?= $whatsapp['nilai'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea type="number" name="message_whatsapp" class="form-control" required><?= $whatsapp_message['nilai'] ?></textarea>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" form="whatsapp-form">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>