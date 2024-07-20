<style>
   .blog-area {
    padding-top: 50px;
    padding-bottom: 100px;
}

.single-blog-post {
    padding: 30px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.single-blog-post .blog-post-thumb img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.single-blog-post .post-title {
    font-size: 2rem; /* Increase the font size */
    margin-top: 20px;
    display: block;
    color: #333;
}

.single-blog-post .post-meta {
    font-size: 1rem;
    color: #666;
    margin-bottom: 20px;
}

.single-blog-post p {
    font-size: 1rem;
    line-height: 1.6;
    color: #444;
}

/* Container and responsive adjustments */
@media (min-width: 768px) {
    .container {
        max-width: 900px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

/* Adjusting the sidebar column width */
.academy-blog-sidebar {
    max-width: 300px;
    margin: 0 auto;
}

/* Styling for the search widget */
.blog-post-search-widget {
    display: flex;
    align-items: center;
}

.blog-post-search-widget form {
    display: flex;
    width: 100%;
}

.blog-post-search-widget input[type="search"] {
    flex: 1;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
    outline: none;
}

.blog-post-search-widget button {
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-left: none;
    background-color: #007bff;
    color: #fff;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}

/* Styling for the categories list */
.blog-post-categories ul {
    padding-left: 0;
    list-style: none;
}

.blog-post-categories ul li {
    margin-bottom: 5px;
}

.blog-post-categories ul li a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s;
}

.blog-post-categories ul li a:hover {
    color: #0056b3;
}


</style>

<div class="breadcumb-area bg-img" style="background-image: url(<?= base_url('uis/'); ?>img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Detail Berita</h2>
    </div>
</div>

    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-50 section-padding-100">
    <div class="container">
        <div class="col-12 col-md-10 offset-md-1">
            <div class="academy-blog-posts">
                <div class="row">
                    <!-- Single Blog Start -->
                    <div class="col-12">
                        <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Post Thumb -->
                            <div class="blog-post-thumb mb-50">
                                <img src="<?= base_url('uis/img/bg-img/').$detail->pa_file; ?>" alt="" class="img-fluid">
                            </div>
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?= $detail->pa_judul; ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p>By <a href="#"><?= $detail->pa_penulis ?></a> | <a href="#"><?= $detail->pa_tgl; ?></a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p><?= $detail->pa_isi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
