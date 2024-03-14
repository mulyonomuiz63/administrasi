<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>


<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="<?php echo base_url('assets/img/user.png') ?>" alt="Profile" class="rounded-circle">
                    <h2><?= substr(session('nama'), 0, 30) ?> <?= strlen(session('nama')) > 30 ? '...' : '' ?></h2>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="true" role="tab">Edit Profil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" role="tab" tabindex="-1">Ubah Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">



                        <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit" role="tabpanel">

                            <!-- Profile Edit Form -->
                            <?php
                            $pesan = session()->getFlashdata('pesan');
                            if (!empty($pesan)) {
                                echo $pesan;
                            }
                            ?>
                            <form>
                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="country" type="text" class="form-control" id="Country" value="USA">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>



                        <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                            <!-- Change Password Form -->
                            <form action="<?php echo (site_url('pengaturan/ubah/password')) ?>" class="row g-3 form text-left needs-validation" novalidate="" method="post" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="password" name="password" class="form-control" id="password" required="" onkeyup='cek_password_new()'>
                                        <div class="invalid-feedback">Password wajib diisi...</div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ulangi Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="password" name="cpassword" class="form-control" id="cpassword" required="" onkeyup='cek_password()'>
                                        <span id='conf_pass'></span>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" id="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>


<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript">
    function cek_password() {
        var password = $("#password").val();
        console.log(password)
        var confirmPassword = $("#cpassword").val();
        if (password != confirmPassword) {
            $("#conf_pass").css("color", "#fc5d32");
            $('#conf_pass').html('Sandi tidak sama');
            $('#button').prop('disabled', true);
        } else {
            $('#conf_pass').html('');
            $('#button').prop('disabled', false);
        }
        return true;
    };

    function cek_password_new() {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        if (confirmPassword == "") {
            $('#button').prop('disabled', true);
        } else {
            if (password != confirmPassword) {
                $("#conf_pass").css("color", "#fc5d32");
                $('#conf_pass').html('Sandi tidak sama');
                $('#button').prop('disabled', true);
            } else {
                $('#conf_pass').html('');
                $('#button').prop('disabled', false);
            }
        }
        return true;
    };
</script>
<?= $this->endSection() ?>