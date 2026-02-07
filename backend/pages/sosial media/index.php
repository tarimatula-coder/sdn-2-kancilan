<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qSocial_media = "SELECT * FROM social_media";
$result = mysqli_query($connect, $qSocial_media) or die(mysqli_error($connect));
?>

<!-- content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Tabel Social Media</h5>
                    <a href="./create.php" class="btn btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="text-center" id="datatable" class="table table-striped table-hover align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Icon</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Link</th>
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
                                        <td class="text-center">
                                            <img src="../../../storages/social_media/<?= $item->icon ?>" alt="icon" width="100" height="100">
                                        </td>
                                        <td class="text-center"><?= $item->title ?></td>
                                        <td class="text-center"><?= $item->link_url ?></td>
                                        <td class="text-center">
                                            <div class="d-flex gap-2">
                                                <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning rounded-circle p-2" title="Edit">
                                                    <i class='ti ti-edit'></i>
                                                </a>

                                                <a href="../../actions/social_media/destroy.php?id=<?= $item->id ?>" class="btn btn-danger rounded-circle p-2" onclick="return confirm('Apakah anda yakin?')" title="Hapus">
                                                    <i class="ti ti-trash"></i>
                                                </a>
                                            </div>
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