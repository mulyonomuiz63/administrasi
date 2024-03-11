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

                           <form class="row g-3 needs-validation" novalidate="">
                               <div class="col-12">
                                   <label for="" class="form-label">Pilih Pembuatan Akun</label>
                                   <select class="form-control">
                                       <option value="">Pilih</option>
                                       <option value="Badan">Badan</option>
                                       <option value="Perorangan">Perorangan</option>
                                   </select>
                                   <div class="invalid-feedback">Please, enter your name!</div>
                               </div>

                               <div class="col-12">
                                   <label for="yourEmail" class="form-label">Your Email</label>
                                   <input type="email" name="email" class="form-control" id="yourEmail" required="">
                                   <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                               </div>

                               <div class="col-12">
                                   <label for="yourUsername" class="form-label">Username</label>
                                   <div class="input-group has-validation">
                                       <span class="input-group-text" id="inputGroupPrepend">@</span>
                                       <input type="text" name="username" class="form-control" id="yourUsername" required="">
                                       <div class="invalid-feedback">Please choose a username.</div>
                                   </div>
                               </div>

                               <div class="col-12">
                                   <label for="yourPassword" class="form-label">Password</label>
                                   <input type="password" name="password" class="form-control" id="yourPassword" required="">
                                   <div class="invalid-feedback">Please enter your password!</div>
                               </div>

                               <div class="col-12">
                                   <div class="form-check">
                                       <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required="">
                                       <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                       <div class="invalid-feedback">You must agree before submitting.</div>
                                   </div>
                               </div>
                               <div class="col-12">
                                   <button class="btn btn-primary w-100" type="submit">Create Account</button>
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