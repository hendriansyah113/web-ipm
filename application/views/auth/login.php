<body>

    <!-- Tulisan Kembali ke Halaman Beranda -->
    <div class="container" style="position: absolute; top: 0; left: 0; padding: 10px;">
        <a href="<?=base_url();?>" class="btn btn-link text-sm text-white">&larr; Kembali ke Halaman Beranda</a>
    </div>

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-4"> <!-- Mengurangi lebar kolom menjadi col-lg-4 -->
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login Admin</h1>
                                    <br>
                                    <p>Silahkan Masukan Username dan Password untuk Login!</p>
                                </div>

                                <?php if ($this->session->flashdata('message')): ?>
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <?php $this->session->unset_userdata('message'); ?>
                                <?php endif; ?>

                                <form class="user" method="post" action="<?=base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="username" placeholder="Enter Username">
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
