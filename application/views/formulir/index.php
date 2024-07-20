<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img"
    style="background-image: url(<?= base_url('assets/img/slide/formulir.png') ?>); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 400px;">
</div><br><br>
<div class="bradcumbContent"></div>
</div>
<!-- ##### Breadcumb Area End ##### -->
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-content">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-12 col-lg-12">
                            <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                <div class="section-heading text-center">
                                    <h2 class="text-center">Formulir Pendaftaran Calon Kader</h2>
                                </div>
                                <!-- Formulir Pendaftaran -->
                                <!-- Tampilkan pesan -->
                                <?php if (!empty($message)) : ?>
                                <?php echo $message; ?>
                                <?php endif; ?>

                                <?php
                                $tempat_lahir = isset($form_data['tempat_lahir']) ? $form_data['tempat_lahir'] : '';
                                $tgl_lahir = isset($form_data['tgl_lahir']) ? $form_data['tgl_lahir'] : '';
                                $jenis_kelamin = isset($form_data['jenis_kelamin']) ? $form_data['jenis_kelamin'] : '';
                                $alamat = isset($form_data['alamat']) ? $form_data['alamat'] : '';
                                $no_hp = isset($form_data['no_hp']) ? $form_data['no_hp'] : '';
                                $email = isset($form_data['email']) ? $form_data['email'] : '';
                                $foto = isset($form_data['foto']) ? $form_data['foto'] : '';
                                ?>

                                <form action="<?= base_url('formulir/submit'); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="<?= isset($anggota['nama']) ? $anggota['nama'] : ''; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                            value="<?= isset($anggota['tempat_lahir']) ? $anggota['tempat_lahir'] : ''; ?>"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                            value="<?= isset($anggota['tgl_lahir']) ? $anggota['tgl_lahir'] : ''; ?>"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki"
                                                <?= isset($anggota['jenis_kelamin']) == 'Laki-laki' ? 'selected' : ''; ?>>
                                                Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                <?= isset($anggota['jenis_kelamin']) == 'Perempuan' ? 'selected' : ''; ?>>
                                                Perempuan
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat Rumah</label>
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                            required><?= isset($anggota['alamat']) ? $anggota['alamat'] : ''; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">Nomor HP</label>
                                        <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                            value="<?= isset($anggota['no_hp']) ? $anggota['no_hp'] : ''; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?= isset($anggota['c_email']) ? $anggota['c_email'] : ''; ?>"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto"
                                            value="<?= base_url('assets/img/' . $anggota['foto']) ?>"
                                            <?= empty($anggota['foto']) ? 'required' : '' ?>
                                            <?php if (!empty($anggota['foto'])) : ?> <br>
                                        <img src="<?= base_url('assets/img/' . $anggota['foto']) ?>" alt="Foto"
                                            width="150">
                                        <?php endif; ?>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary"><?= !empty($anggota) ? 'Edit Formulir' : 'Kirim Formulir' ?></button>
                                </form>
                                <!-- End Formulir Pendaftaran -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->