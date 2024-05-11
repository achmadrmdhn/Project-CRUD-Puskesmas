<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Menu Periksa</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Periksa</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <h2 class="text-center">Data Periksa</h2>
                            <a href="add.php"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Berat</th>
                                        <th>Tinggi</th>
                                        <th>Tensi</th>
                                        <th>Keterangan</th>
                                        <th>Pasien</th>
                                        <th>Dokter</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                // Memanggil DB
                                require '../koneksi.php';
                                // Membuat Query dengan JOIN antara tabel periksa, pasien, dan dokter
                                $query = $dbh->query("
                                    SELECT periksa.*, pasien.nama AS nama_pasien, dokter.nama AS nama_dokter
                                    FROM periksa
                                    INNER JOIN pasien ON periksa.pasien_id = pasien.id
                                    INNER JOIN dokter ON periksa.dokter_id = dokter.id
                                ");
                                // Menampilkan Data
                                foreach ($query as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['tanggal'] . "</td>";
                                    echo "<td>" . $row['berat'] . "</td>";
                                    echo "<td>" . $row['tinggi'] . "</td>";
                                    echo "<td>" . $row['tensi'] . "</td>";
                                    echo "<td>" . $row['keterangan'] . "</td>";
                                    echo "<td>" . $row['nama_pasien'] . "</td>"; // Menampilkan nama pasien berdasarkan relasi
                                    echo "<td>" . $row['nama_dokter'] . "</td>"; // Menampilkan nama dokter berdasarkan relasi
                                    echo "<td>";
                                    echo "<a href='edit.php?id=" . $row['id'] . "'><button class='btn btn-primary'>Edit</button></a>";
                                    echo "<span class='mx-1'></span>"; 
                                    echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin Hapus Data?\")'><button class='btn btn-danger'>Delete</button></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- card-body end -->
                        <div class="card-footer">
                            <!-- Buat Footer -->
                        </div>
                        <!-- card-footer end-->
                    </div>
                    <!-- card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- content end -->
</div>
<!-- content-wrapper end -->

<?php
require_once 'footer.php';
?>
