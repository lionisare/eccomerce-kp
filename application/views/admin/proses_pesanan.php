<div class="container-fluid">
    <div class="alert alert-success">
        <p class="text-center align-middle">Terimakasih sudah pesan produk kami. Silakan konfirmasi pembayaran anda pada link dibawah ini:</p>
        <a class="nav-link" href="<?= base_url('Konfirmasi/proses_konfirmasi') ?>">
            <p class="text-center align-middle">Konfirmasi Pembayaran & Jangan lupa masukan ID: <?= $invoice->id_invoice ?>
            </p>
        </a>
        <p class="text-center align-middle">Batas pembayaran anda selama 24 jam</p>
    </div>
</div>