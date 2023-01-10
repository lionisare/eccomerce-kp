<div class="container-fluid">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Info <span>Pembayaran</span>
            </h2>
            <div class="alert alert-info" role="alert">
                Silakan cek rekening di bawah ini untuk melalukan pembayaran
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>NO</th>
                        <th>Nama Bank</th>
                        <th>No Rekening</th>
                        <th>Nama Rekening</th>
                    </tr>
                </thead>
                <?php $no = 1;
                foreach ($pembayaran as $bayar) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $bayar->nama_bank ?></td>
                        <td><?= $bayar->no_rekening ?></td>
                        <td><?= $bayar->nama_rekening ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <br>
        </div>
    </div>
</div>