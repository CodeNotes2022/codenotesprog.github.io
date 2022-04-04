<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from script.viserlab.com/elab/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 19:52:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> E-Lab - Sign In</title>
  <meta name="title" Content="E-Lab - Sign In">
    <meta name="description" content="Online learning management platform">
    <meta name="keywords" content="lms,online platform">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="E-Lab - Sign In">
    
    <meta itemprop="name" content="E-Lab - Sign In">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/616191dd14e5e1633784285.jpg">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="lab - Online lerning  platfrm">
    <meta property="og:description" content="Online learning management platform">
    <meta property="og:image" content="assets/images/seo/616191dd14e5e1633784285.jpg"/>
    <meta property="og:image:type" content="image/jpg" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="login.php>
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 5  -->
  <link rel="stylesheet" href="assets/templates/basic/css/lib/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/global/css/all.min.css"> 
  <!-- lineawesome font -->
  <link rel="stylesheet" href="assets/global/css/line-awesome.min.css"> 
  <!--  -->

  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/templates/basic/css/lib/slick.css">

  <!-- main css -->
  <link rel="stylesheet" href="assets/templates/basic/css/main.css">
  <link rel="stylesheet" href="assets/templates/basic/css/colorbc94.css?color=2d54a8&amp;secondColor=14233c">
  
  </head>
  <body> 
        <div class="preloader">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div> 
    </div> 

    <div class="main-wrapper">
            <section class="account-section">
        <div class="left">
          <div class="top-el">
            <img src="assets/images/frontend/login/60b3677e407f81622370174.png" alt="image">
          </div>
          <div class="bottom-el">
            <img src="assets/images/frontend/login/60b3677e8c1071622370174.png" alt="image">
          </div>
          <div class="account-form-area">
            <div class="text-center">
              <a href="https://script.viserlab.com/elab" class="account-logo"><img src="assets/images/logoIcon/logo.png" alt="image"></a>
            </div>
             <?php
                                   // session_start();
                                    if(isset($_POST['submit']))
                                    {
                                        extract($_POST);
                                        include "inc/conn.php";
                                        $sql=mysqli_query($way,"SELECT * FROM signup where Email='$email' and Password='$password'");
                                        $row  = mysqli_fetch_array($sql);
                                        if(is_array($row))
                                        {
                                            
                                            $_SESSION["Email"]=$row['email'];
                                            $_SESSION["password"]=$row['password']; 
                                            ?>

                                           <script type="text/javascript">
                                            //alert("All Right");
                                           window.location = "index.php";</script> 
                                        <?php }
                                        else
                                        { ?>
                                            <script>
                                                alert("Invalid Email ID/Password");
                                            </script>
                                        <?php }
                                    }
                                    ?>
            <form class="account-form mt-5" method="POST" action="" onsubmit="return submitUserForm();">
                <input type="hidden" name="_token" value="MZmrDwb9xNEYAytcbe9AFlRlcldm9rHtg6eMFoV9">              <div class="form-group">
                <label> Email</label>
                <input type="email" name="email" placeholder="Email address" class="form--control" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" class="form--control" required>
              </div>

              <div class="form-group">
                                </div>

               
              <p class=""><a href="password/reset.php" class="text--dark">Forgot password?</a></p>
              <div class="form-group mt-4">
                <button type="submit" class="btn btn--base w-100" name="submit">Login Now</button>
              </div>
              <div class="row gy-1">
                
                <div class="col-sm-12">
                  <p>Haven't an account? <a href="register.php" class="text--base">Sign Up</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="right bg_img" style="background-image: url('assets/images/frontend/login/60b3677dac8841622370173.jpg');">
          <div class="content text-center">
            <h2 class="title text-white">Learn virtually from anywhere</h2>
            <p class="text-white mt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
        </div>
    </section> 
    </div>


    <script src="assets/global/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/templates/basic/js/lib/bootstrap.bundle.min.js"></script>
    <!-- slick slider js -->
    <script src="assets/templates/basic/js/lib/slick.min.js"></script>
    <!-- scroll animation -->
    <script src="assets/templates/basic/js/lib/wow.min.js"></script>
    <!-- lightcase js -->

    <!-- main js -->
    <script src="assets/templates/basic/js/app.js"></script>
    
        <script>
        "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">Captcha field is required.</span>';
                return false;
            }
            return true;
        }
    </script>

    
    <link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://script.viserlab.com/elab/change/"+$(this).val() ;
            });
        })(jQuery);
    </script>
    </body>

<!-- Mirrored from script.viserlab.com/elab/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 19:52:17 GMT -->
</html>