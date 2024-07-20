<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Area</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header-area {
            background-color: #ffffff;
        }
        .top-header {
            background-color: #ffffff;
            color: #000000;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .top-header .container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header-content {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .academy-logo {
            display: flex;
            align-items: center;
            margin-right: auto;
        }
        .academy-logo img {
            margin-right: 10px;
        }
        .login-content {
            display: flex;
            align-items: center;
        }
        .classynav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .classynav ul li {
            position: relative;
            margin-right: 20px;
        }
        .classynav ul li a {
            color: #000000;
            text-decoration: none;
            padding: 10px;
            display: block;
        }
        .classynav ul li a.active {
            color: blue;
        }
        .classynav ul li:hover > ul.dropdown {
            display: block;
        }
        .classynav ul .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            list-style: none;
            padding: 0;
            margin: 0;
            min-width: 150px;
        }
        .classynav ul .dropdown li {
            width: 100%;
        }
        .classynav ul .dropdown li a {
            color: #000000;
            padding: 10px;
        }
        .login-link {
            color: #000000;
            text-decoration: none;
            padding: 10px;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #000000;
            margin: 5px;
            transition: 0.3s;
        }
        .classynav {
            display: flex;
        }
        @media (max-width: 768px) {
            .classynav {
                display: none;
                flex-direction: column;
                width: 100%;
            }
            .classynav ul {
                flex-direction: column;
                width: 100%;
            }
            .classynav ul li {
                width: 100%;
                text-align: center;
                margin: 0;
            }
            .classynav ul li a {
                padding: 15px;
                border-bottom: 1px solid #ddd;
            }
            .classynav ul li a.active {
                color: blue;
            }
            .hamburger {
                display: flex;
                cursor: pointer;
                flex-direction: column;
                justify-content: space-around;
                height: 25px;
            }
            .hamburger div {
                width: 35px;
                height: 4px;
                background-color: #333;
                margin: 4px 0;
            }
            .classynav.responsive {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>
    <header class="header-area">
        <div class="top-header">
            <div class="container h-100">
                <div class="header-content h-100 d-flex align-items-center justify-content-between">
                    <div class="academy-logo">
                        <a href="<?= base_url(); ?>">
                            <img src="<?= base_url('uis/img/core-img/') . $setting->logo; ?>" width="35" height="35" alt="Logo">
                        </a>
                        <h4 style="font-size: 15px;"><?= $setting->judul; ?><br>Kota Palangka Raya Kalimantan Tengah</h4>
                    </div>
                    <div class="login-content">
                        <div class="hamburger" onclick="toggleMenu()">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="classynav" id="classynav">
                            <ul>
                                <li><a href="<?= base_url(); ?>" <?= $this->uri->segment(1) == '' ? 'class="active"' : ''; ?>>Beranda</a></li>
                                <li><a href="<?= base_url('home/profil'); ?>" <?= $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'profil' ? 'class="active"' : ''; ?>>Profil</a></li>
                                <li><a href="<?= base_url('home/kegiatan'); ?>" <?= $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'kegiatan' ? 'class="active"' : ''; ?>>Kegiatan</a></li>
                                <li><a href="<?= base_url('home/galeri_kegiatan'); ?>" <?= $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'galeri_kegiatan' ? 'class="active"' : ''; ?>>Galeri</a></li>
                                <li><a href="<?= base_url('home/formulir'); ?>" <?= $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'formulir' ? 'class="active"' : ''; ?>>Formulir</a></li>
                                <li><a href="<?= base_url('home/kta'); ?>" <?= $this->uri->segment(1) == 'home' && $this->uri->segment(2) == 'kta' ? 'class="active"' : ''; ?>>KTA</a></li>
                                <?php if ($this->session->userdata('user_login') != 'user_logged_in'): ?>
                                    <li><a href="<?= base_url('UserAuth'); ?>" class="login-link">Register / Login</a></li>
                                <?php else: ?>
                                    <li><a href="<?= base_url('UserAuth/logout'); ?>" class="login-link">Logout</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        function toggleMenu() {
            const nav = document.getElementById('classynav');
            if (nav.classList.contains('responsive')) {
                nav.classList.remove('responsive');
            } else {
                nav.classList.add('responsive');
            }
        }

        document.querySelectorAll('.classynav ul li a').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.classynav ul li a').forEach(link => {
                    link.classList.remove('active');
                });
                item.classList.add('active');
            });
        });
    </script>
</body>
</html>
