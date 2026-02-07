<?php
include '../../partials/header.php';
$qMessage = "SELECT * FROM message";
$result = mysqli_query($connect, $qMessage) or die(mysqli_error($connect));
?>

<div class="wrapper">

    <?php include '../../partials/sidebar.php'; ?>

    <div class="main">

        <?php include '../../partials/navbar.php'; ?>

        <main class="content">
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
                                    <table id="datatable" class="table table-bordered table-hover align-middle text-center w-100">
                                        <thead class="table-dark">
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
                                                    <td class="text-center"><?= $item->pesan ?></td>
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
        </main>
        <?php
        include '../../partials/footer.php';
        ?>
    </div>
</div>
<?php
include '../../partials/script.php';
?>
<style>
    /* ===== ANIMASI GRADIENT ===== */
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

    /* ===== CARD ===== */
    .card {
        background: linear-gradient(120deg,
                #ecfdf5,
                /* hijau muda */
                #dbeafe,
                /* biru muda */
                #e0f2fe,
                /* biru soft */
                #f0fdfa
                /* hijau lembut */
            );
        background-size: 300% 300%;
        animation:
            fadeSlideUp 0.8s ease forwards,
            gradientMove 9s ease infinite;

        border: none;
        border-radius: 16px;
        box-shadow: 0 12px 28px rgba(16, 185, 129, 0.18);
    }

    /* ===== HEADER CARD ===== */
    .card-header {
        background: linear-gradient(90deg,
                #059669,
                /* hijau */
                #0ea5e9,
                /* biru */
                #0284c7
                /* biru tua */
            );
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