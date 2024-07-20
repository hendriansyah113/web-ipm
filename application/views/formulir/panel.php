<!-- Data Table -->
<div class="container-fluid">
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
                          <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
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
                          <td><img src="<?= base_url('assets/img/' . $calon['foto']); ?>" alt="Foto" width="60"></td>
                          <td>
                              <a href="<?= base_url('panel/cetak_kta/'.$calon['id_calon']); ?>" class="btn btn-primary">Cetak KTA</a>
                          </td> <!-- Tambahkan tombol Cetak KTA -->
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
