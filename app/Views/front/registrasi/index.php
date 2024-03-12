   <?= $this->extend('front/layout/template') ?>
   <?= $this->section('content') ?>

   <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                   <div class="card mb-3">

                       <div class="card-body">

                           <div class="pt-4 pb-2 text-center">
                               <img src="assets/img/logo.png" alt="">
                               <p class="text-center small">Registrasi Akun</p>
                           </div>
                           <?php
                            $pesan = session()->getFlashdata('pesan');
                            if (!empty($pesan)) {
                                echo $pesan;
                            }
                            ?>
                           <form action="<?php echo (site_url('registrasi/simpan')) ?>" id="form" class="row g-3 form text-left needs-validation" novalidate="" method="post" enctype="multipart/form-data">
                               <?= csrf_field() ?>
                               <div class="col-12">
                                   <label for="" class="form-label">Pilih Pembuatan Akun</label>
                                   <select class="form-control" name="badan" required>
                                       <option value="">Pilih</option>
                                       <option value="3">Badan</option>
                                       <option value="4">Perorangan</option>
                                   </select>
                                   <div class="invalid-feedback">Pembuatan akun tidak boleh kosong...</div>
                               </div>

                               <div class="col-12">
                                   <label for="nama" class="form-label">Nama Lengkap</label>
                                   <input type="text" name="nama" class="form-control" id="nama" required="">
                                   <div class="invalid-feedback">Nama wajib diisi...</div>
                               </div>

                               <div class="col-12">
                                   <label for="hp" class="form-label">Nomor Hp</label>
                                   <input type="text" name="hp" class="form-control" id="hp" required="" onkeypress="return hanyaAngka(event)">
                                   <div class="invalid-feedback">Nomor Hp wajib diisi...</div>
                               </div>

                               <div class="col-12">
                                   <label for="Email" class="form-label">Email</label>
                                   <div class="input-group has-validation">
                                       <span class="input-group-text" id="email">@</span>
                                       <input type="email" name="email" class="form-control" id="email" required="">
                                       <div class="invalid-feedback">Format email tidak sesua...</div>
                                   </div>
                               </div>

                               <div class="col-12">
                                   <label for="password" class="form-label">Password</label>
                                   <input type="password" name="password" class="form-control" id="password" required="" onkeyup='cek_password_new()'>
                                   <div class="invalid-feedback">Password wajib diisi...</div>
                               </div>

                               <div class="col-12">
                                   <label for="cpassword" class="form-label">Ulangi Password</label>
                                   <input type="password" name="cpassword" class="form-control" id="cpassword" required="" onkeyup='cek_password()'>
                                   <span id='conf_pass'></span>
                               </div>


                               <div class="col-12">
                                   <div class="form-check">
                                       <input class="form-check-input" name="privasi" type="checkbox" value="" required="">
                                       <label>Syarat dan Ketentuan </label>
                                       <div class="invalid-feedback">Syarat dan ketentuan harus di pilih...</div>
                                   </div>
                               </div>
                               <div class="col-12">
                                   <button id="button" class="btn btn-primary w-100" type="submit">Simpan</button>
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