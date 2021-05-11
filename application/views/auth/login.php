<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #eff1f4;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="text-center mt-5">
                        <h3 id="title" class="h3">Login Si-CEO </h3>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="text" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="Enter Email Address..." name="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary  btn-user btn-block">
                                        Login
                                    </button>
                                    <hr>
                                    <!-- <a href="<?= base_url('auth/google'); ?>" class='btn btn-user btn-light btn-block'>
                                        <img class="img-fluid" alt="..." style="width: 18px;" src="<?= base_url('assets/img/google_logo.png'); ?>">&nbsp;&nbsp;
                                        Login Menggunakan Google
                                    </a> -->
                                </form>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> -->
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Buat Akun Baru</a>
                                </div>
                                <div class="text-center">
                                    <h6 class="h6 text-gray-900 mt-5">Powered by <img src="<?= base_url('assets/img/logo.svg') ?>" width="70" alt=""></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>