<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="<?php echo e(asset("assets/images/favicon.png")); ?>" type="">
      <title>Eatsambel</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?php echo e(asset("assets/css/bootstrap.css")); ?>" />
      <!-- font awesome style -->
      <link href="<?php echo e(asset("assets/css/font-awesome.min.css")); ?>" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo e(asset("assets/css/style.css")); ?>" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?php echo e(asset("assets/css/responsive.css")); ?>" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <header class="main-header">
            <?php echo $__env->make("header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </header>
         <!-- end header section -->
      </div>
      <!-- product section -->
      <section class="product_section layout_padding" style="background-color: #E44126">
         <div class="container">
            <div class="heading_container heading_center">
               <h2 style="color: #FFDE17">
                  Our <span style="color: #FFDE17">products</span>
               </h2>
            </div>
            <div class="row">
               <?php $__currentLoopData = $data_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="<?php echo e(url('beli/'.$produk->id_produk)); ?>" class="option2">
                              Buy Now
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="<?php echo e(asset($produk->image)); ?>" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              <?php echo e($produk->nama_produk); ?>

                           </h5>
                           <h6>
                              Rp <?php echo e(number_format($produk->harga)); ?>

                           </h6>
                        </div>
                     </div>
                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <!-- footer start -->
      <footer class="main-footer" style="background-color: #FFDE17">
         <?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By Trio Legends</a><br>
         
            Distributed By EatSambal</a>
         
         </p>
      </div>
      <!-- footer section -->
      <!-- jQery -->
      <script src="<?php echo e(asset("assets/js/jquery-3.4.1.min.js")); ?>"></script>
      <!-- popper js -->
      <script src="<?php echo e(asset("assets/js/popper.min.js")); ?>"></script>
      <!-- bootstrap js -->
      <script src="<?php echo e(asset("assets/js/bootstrap.js")); ?>"></script>
      <!-- custom js -->
      <script src="<?php echo e(asset("assets/js/custom.js")); ?>"></script>
   </body>
</html><?php /**PATH C:\BAP\UAS\UAS\resources\views/product.blade.php ENDPATH**/ ?>