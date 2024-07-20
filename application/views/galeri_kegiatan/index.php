
<div class="breadcumb-area bg-img" style="background-image: url(<?= base_url('assets/img/slide/galeri.png')?>); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 400px;"></div><br><br>
    <div class="bradcumbContent bg-primary" style="display: flex; justify-content: center; align-items: center; height: 100%;">
        <h2 style="background-image: url('img/bg-img/title-bg.jpg'); background-size: cover; background-position: center; padding: 10px; display: inline-block;">
            <?= $galeri_kegiatan->judul; ?>
        </h2>
    </div><br>
    <section class="about-us-area section-padding-50">
        <div class="container">
            
            <div class="row">
               <?= $galeri_kegiatan->isi; ?>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?= base_url('uis/'); ?>img/bg-img/stmik.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <h3>Foto-foto Kegiatan IPM</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                    <?php 
                    foreach ($galeri as $gal) {
                     ?>
                    <div class="col-12 col-sm-3">
                        <div class="footer-widget mb-100">
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="<?= base_url('uis/').$gal->pf_file; ?>" class="gallery-img" title="<?= $gal->pf_judul;?>"><img src="<?= base_url('uis/').$gal->pf_file; ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->