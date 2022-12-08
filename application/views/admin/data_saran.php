<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <?= $this->session->flashdata('pesan') ?>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Saran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($saran as $srn) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $srn->nama ?></td>
                <td><?= $srn->saran ?></td>
                <td>
                    <?= anchor('admin/data_saran/delete/' . $srn->id, '<div class="btn btn-danger btn-sm"><i class="bx bxs-trash"></i>
                    </div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>