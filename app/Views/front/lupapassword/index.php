<?= $this->extend('front/layout/template') ?>
<?= $this->section('content') ?>

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Administrasi</span>
                            </a>
                        </div><!-- End Logo -->
                        <?php
                        $pesan = session()->getFlashdata('pesan');
                        if (!empty($pesan)) {
                            echo $pesan;
                        }
                        ?>
                        <form action="<?php echo (site_url('reset-password')) ?>" class="row g-3 form text-left needs-validation" novalidate="" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="col-12">
                                <label for="Email" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="email">@</span>
                                    <input type="email" name="email" class="form-control" id="email" required="">
                                    <div class="invalid-feedback">Format email tidak sesua...</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Reset Password</button>
                            </div>
                            <div class="text-center">
                                <a href=" <?= base_url('login'); ?>">Sudah punya akun? Login disini</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<?= $this->endSection() ?>