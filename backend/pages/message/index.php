<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qMessage = "SELECT * FROM message";
$result = mysqli_query($connect, $qMessage) or die(mysqli_error($connect));
?>


<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card mb-5">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel message</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-hover align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Pesan</th>
                                    <th class="text-center">No.telepon</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>

                                        <td class="text-center"><?= $item->name ?></td>
                                        <td class="text-center"><?= $item->email ?></td>
                                        <td class="text-center"><?= $item->message ?></td>
                                        <td class="text-center"><?= $item->phone ?></td>
                                        <td class="text-center">
                                            <a href="../../actions/message/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>