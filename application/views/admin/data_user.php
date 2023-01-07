<div class="container-fluid">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <?= $this->session->flashdata('pesan') ?>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($users as $user) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user->nama ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->password ?></td>
                <td>
                    <?= anchor('admin/data_user/delete/' . $user->id, '<div class="btn btn-danger btn-sm">Hapus
                    </div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>