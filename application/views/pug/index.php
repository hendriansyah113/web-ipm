<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Welcome Card -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Selamat Datang Kembali di halaman 
                        <?php if ($this->session->userdata('role') == '1') {
                            echo "Admin";
                        } elseif ($this->session->userdata('role') == '2') {
                            echo "Pengelola";
                        } ?>
                    </h6>
                </div>
                <div class="card-body text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url('assets/img/undraw_posting_photo.svg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Data Table -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Anggota yang Mendaftar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $nomor = 1; // inisialisasi nomor
                    foreach ($calon_kader as $calon): 
                    ?>
                    <tr>
                        <td><?= $nomor++; ?></td> <!-- menampilkan nomor dan kemudian menambahkan 1 setiap kali perulangan -->
                        <td><?= $calon['nama']; ?></td>
                        <td><?= $calon['tempat_lahir']; ?></td>
                        <td><?= $calon['tgl_lahir']; ?></td>
                        <td><?= $calon['jenis_kelamin']; ?></td>
                        <td><?= $calon['alamat']; ?></td>
                        <td><?= $calon['no_hp']; ?></td>
                        <td><?= $calon['email']; ?></td>
                        <td><img src="<?= base_url('assets/img/' . $calon['foto']); ?>" alt="Foto" width="50"></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
