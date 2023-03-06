
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login | One Sarumaha</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?= base_url('template/') ?>assets/images/favicon.ico" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/core/libs.min.css" />
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/hope-ui.min.css?v=1.2.0" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/custom.min.css?v=1.2.0" />
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/dark.min.css"/>
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/customizer.min.css" />
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="<?= base_url('template/') ?>assets/css/rtl.min.css"/>
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                        <div class="card-body">
                           <a href="<?= base_url('template/') ?>dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                  <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                  <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                  <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                              </svg>
                              <!--logo End-->                              
                              <h4 class="logo-title ms-3">Hope UI</h4>
                           </a>
                           <h2 class="mb-2 text-center">Sign In</h2>
                           <p class="text-center">Login to stay connected.</p>
                           <?php if(session()->getFlashdata('error')) : ?>
					            <div class="bd-example">
					              <div class="alert alert-solid alert-danger rounded-0 alert-dismissible fade show " role="alert">
					                  <span> Error !</span>
					                  <?= session()->getFlashdata('error'); ?>
					                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					              </div>
					          </div>
					      <?php endif; ?>
                           <form action="<?= base_url('login/loginproses')  ?>" method="POST">
                           	<?= csrf_field() ?>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" name="email_user" id="email" aria-describedby="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" aria-describedby="password" placeholder=" " name="password_password">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <a href="recoverpw.html">Forgot Password?</a>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                              <p class="text-center my-3">or sign in with other accounts?</p>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="<?= base_url('template/') ?>assets/images/brands/fb.svg" alt="fb"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="<?= base_url('template/') ?>assets/images/brands/gm.svg" alt="gm"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="<?= base_url('template/') ?>assets/images/brands/im.svg" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="<?= base_url('template/') ?>assets/images/brands/li.svg" alt="li"></a>
                                    </li>
                                 </ul>
                              </div>
                              <p class="mt-3 text-center">
                                 Don’t have an account? <a href="sign-up.html" class="text-underline">Click here to sign up.</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="<?= base_url('template/') ?>assets/images/auth/01.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
         </div>
      </section>
      </div>
    
    <!-- Library Bundle Script -->
    <script src="<?= base_url('template/') ?>assets/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="<?= base_url('template/') ?>assets/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="<?= base_url('template/') ?>assets/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="<?= base_url('template/') ?>assets/js/charts/vectore-chart.js"></script>
    <script src="<?= base_url('template/') ?>assets/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="<?= base_url('template/') ?>assets/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="<?= base_url('template/') ?>assets/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="<?= base_url('template/') ?>assets/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="<?= base_url('template/') ?>assets/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="<?= base_url('template/') ?>assets/js/hope-ui.js" defer></script>
  </body>
</html>