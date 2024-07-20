<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Login</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/custom.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- Tulisan Kembali ke Halaman Beranda -->
    <div class="container" style="position: absolute; top: 0; left: 0; padding: 10px;">
        <a href="<?=base_url();?>" class="btn btn-link text-sm text-white">&larr; Kembali ke Halaman Beranda</a>
    </div>
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login Anggota</h1>
                                </div>

                                <?php if ($this->session->flashdata('message')): ?>
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <?php $this->session->unset_userdata('message'); ?>
                                <?php endif; ?>

                                <form class="user" method="post" action="<?= base_url('UserAuth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i id="togglePassword" class="fas fa-eye-slash" onclick="togglePassword()"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="text-left">
                                    <p class="small">Belum mempunyai akun? <a href="<?= base_url('UserAuth/register'); ?>">Daftar</a></p>
                                </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const icon = document.getElementById('togglePassword');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    }
    </script>

</body>
</html>
