<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-6 col-sm-4">
                    <div class="footer-widget mb-50">
                        <div class="widget-title">
                            <h6><?= $setting->judul; ?></h6>
                            <p>Sosial Media</p>
                        </div>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Kontak</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p><?= $setting->alamat; ?></p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>Telepon : <?= $setting->telp; ?></p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>Email : <?= $setting->email; ?></p>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Lokasi</h6>
                        </div>
                        <div id="googleMapContainer" style="width:110%;height:10px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8261215586413!2d113.91777307425586!3d-2.2191335373557215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb2f0fc4ffce9%3A0xf0f7e3a4a41248e!2sDPD%20Ikatan%20Mahasiswa%20Muhammadiyah%20Kalteng!5e0!3m2!1sid!2sid!4v1716217634085!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <?= $setting->judul; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery-2.2.4 js -->
<script src="<?= base_url('uis/'); ?>js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?= base_url('uis/'); ?>js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?= base_url('uis/'); ?>js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="<?= base_url('uis/'); ?>js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="<?= base_url('uis/'); ?>js/active.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
<script src="<?= base_url('uis/'); ?>js/google-map/map-active.js"></script>
<script>
    function initMap() {
        var location = {lat: -34.397, lng: 150.644}; // Update with your coordinates
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 8,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initMap);
</script>
</body>
</html>
