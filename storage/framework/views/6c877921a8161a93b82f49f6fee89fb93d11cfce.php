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
      <title>EatSambel</title>
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
      <!-- inner page section -->
      <section class="inner_page_head" style="background-color: #E44126">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding" style="background-color: #E44126">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="index.html">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
      <!-- footer section -->
      <!-- footer start -->
      <footer class="main-footer" style="background-color: #FFDE17">
         <?php echo $__env->make("footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">?? 2021 All Rights Reserved By Trio Legends</a><br>
         
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
</html><?php /**PATH C:\BAP\UAS\UAS\resources\views/contact.blade.php ENDPATH**/ ?>