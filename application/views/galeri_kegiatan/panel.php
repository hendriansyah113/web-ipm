<div class="container-fluid">

          <div class="row">

            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaturan Informasi Keterangan Kegiatan</h6>
                  </div>
                  <div class="card-body">
                    <?php if ($this->session->flashdata('message')): ?>
                        <?php echo $this->session->flashdata('message'); ?>
                        <?php $this->session->unset_userdata('message'); ?>
                    <?php endif; ?>
                    <form class="user" method="post" action="<?= base_url("galeri_kegiatan/edit");?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Judul Halaman</label>
                        <input type="hidden" name="id" value="<?= $galeri_kegiatan->id_galerik;?>">
                        <input type="text" class="form-control"  name="judul" value="<?= $galeri_kegiatan->judul; ?>">
                      </div>
                      <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" id="des" name="isi"><?= $galeri_kegiatan->isi; ?></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user">Simpan Data</button>
                    </form>
                  <div>
                         
            </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      