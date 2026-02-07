<?php
include '../../partials/header.php';

$qSocialMedia = "SELECT * FROM social_media";
$result = mysqli_query($connect, $qSocialMedia) or die(mysqli_error($connect));
?>

<div class="wrapper">

    <?php include '../../partials/sidebar.php'; ?>

    <div class="main">

        <?php include '../../partials/navbar.php'; ?>

        <main class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 py-5">
                        <div class="card mb-3">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5>Tabel Social Media</h5>
                                <a href="./create.php" class="btn btn-primary">Tambah</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered table-hover align-middle text-center w-100">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Icon</th>
                                                <th>Judul</th>
                                                <th>Link</th>
                                                <th>Selengkapnya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            while ($item = $result->fetch_object()):
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td>
                                                        <img src="../../../storages/social_media/<?= $item->icon ?>"
                                                            alt="icon"
                                                            width="60"
                                                            class="rounded shadow-sm">
                                                    </td>
                                                    <td><?= $item->judul ?></td>
                                                    <td>
                                                        <a href="<?= $item->link ?>" target="_blank">
                                                            <?= $item->link ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center gap-2">

                                                            <a href="./edit.php?id=<?= $item->id ?>"
                                                                class="btn btn-warning btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="../../actions/social_media/destroy.php?id=<?= $item->id ?>"
                                                                onclick="return confirm('Yakin hapus data ini?')"
                                                                class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-trash"></i>
                                                                Hapus
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
        </main>

        <?php include '../../partials/footer.php'; ?>
    </div>
</div>

<?php include '../../partials/script.php'; ?>
<style>
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .card {
        background: linear-gradient(120deg,
                #ecfdf5,
                #dbeafe,
                #e0f2fe,
                #f0fdfa);
        background-size: 300% 300%;
        animation: gradientMove 9s ease infinite;
        border: none;
        border-radius: 16px;
        box-shadow: 0 12px 28px rgba(16, 185, 129, 0.18);
    }

    .card-header {
        background: linear-gradient(90deg,
                #059669,
                #0ea5e9,
                #0284c7);
        background-size: 200% 200%;
        animation: gradientMove 6s ease infinite;
        color: #ffffff;
        border-radius: 16px 16px 0 0;
        padding: 16px 22px;
    }

    .card-header h5 {
        color: #ffffff;
        font-weight: 600;
    }
</style>