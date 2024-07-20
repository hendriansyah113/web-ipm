
    <style>
        .popular-course-thumb {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        .course-container {
            background-color: #f0f0f0; /* Light gray background */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Padding inside the container */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: add a slight shadow */
            margin-bottom: 20px; /* Optional: space between course containers */
        }
        .popular-course-thumb {
            border-radius: 10px; /* Match the container's rounded corners */
        }
    </style>
</head>
<body>

<!-- Breadcumb Area Start -->
<div class="breadcumb-area bg-img" style="background-image: url(<?= base_url('assets/img/slide/kegiatan.png') ?>); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 400px;"></div>
<br><br>

<!-- Bradcumb Content Start -->
<div class="bradcumbContent" style="display: flex; justify-content: center; align-items: center; height: 100%;">
    <h2 style="background-image: url('img/bg-img/title-bg.jpg'); background-size: cover; background-position: center; padding: 10px; display: inline-block;">
        <?= $kegiatan->judul; ?>
    </h2>
</div>
<br>

<!-- About Us Area Start -->
<section class="about-us-area section-padding-50">
    <div class="container">
        <div class="row text-justify">
            <?= $kegiatan->isi; ?>
        </div>
    </div>
</section>

<!-- Top Popular Courses Area Start -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>Berita Dan Artikel</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($artikel as $art) { ?>
            <!-- Single Top Popular Course -->
            <div class="col-12 col-lg-6">
                <div class="course-container">
                    <!-- Image -->
                    <div class="popular-course-thumb bg-img" style="background-image: url(<?= base_url('uis/img/bg-img/') . $art->pa_file; ?>);"></div>
                    <div class="popular-course-content p-3">
                        <h5><?= $art->pa_judul; ?></h5>
                        <span>By <?= $art->pa_penulis; ?> | <?= $art->pa_tgl; ?></span>
                        <p><?= substr($art->pa_isi, 0, 100); ?>...</p>
                        <a href="<?= base_url('artikel/detail/') . $art->pa_link; ?>" class="btn academy-btn btn-sm">Lihat lebih banyak</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Top Popular Courses Area End -->
