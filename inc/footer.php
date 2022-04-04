<footer class="footer bg_img" style="background-image: url('assets/images/frontend/footer/60b38f496bf781622380361.jpg');">
  <div class="footer__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <a href="index.php" class="footer-logo"><img src="assets/images/logoIcon/Code1.png" alt="image"></a>
          <ul class="footer-menu d-flex flex-wrap justify-content-center mt-4">
            <li><a href="about-us.php">About</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="faq.php">Faq</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="social-links d-flex flex-wrap align-items-center mt-4 justify-content-center">
            <li><a target="_blank" href="https://www.facebook.com/" data-toggle="tooltip" title="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a></li>

            <li><a target="_blank" href="https://twitter.com/" data-toggle="tooltip" title="Twitter">
                <i class="lab la-twitter"></i>
              </a></li>

            <li><a target="_blank" href="https://linkedin.com/" data-toggle="tooltip" title="Linked In">
                <i class="fab fa-linkedin-in"></i>
              </a></li>

            <li><a target="_blank" href="https://pinterest.com/" data-toggle="tooltip" title="Pinterest">
                <i class="lab la-pinterest-p"></i>
              </a></li>


          </ul>
          <div class="col-lg-6 mx-auto mt-3">
            <p class="text-white">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-md-start text-center">
          <p class="text-white">2022 © CodeNotes Prog & Labs . All Right Reserved</p>
        </div>
        <div class="col-md-6">
          <ul class="footer-menu d-flex flex-wrap justify-content-end">
            <li><a href="links/privacy-policy/76.html">Privacy Policy</a></li>
            <li><a href="links/terms-of-service/77.html">Terms of Service</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/global/js/jquery-3.6.0.min.js"></script>
<!-- bootstrap js -->
<script src="assets/templates/basic/js/lib/bootstrap.bundle.min.js"></script>
<!-- slick slider js -->
<script src="assets/templates/basic/js/lib/slick.min.js"></script>
<!-- scroll animation -->
<script src="assets/templates/basic/js/lib/wow.min.js"></script>
<script src="assets/templates/basic/js/lib/lightcase.js"></script>
<!-- lightcase js -->
<script src="assets/templates/basic/js/app.js"></script>



<link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>

<script>
  "use strict";

  function notify(status, message) {
    iziToast[status]({
      message: message,
      position: "topRight"
    });
  }
</script>

<script>
  (function($) {
    "use strict";
    $(".langSel").on("change", function() {
      window.location.href = "https://script.viserlab.com/elab/change/" + $(this).val();
    });
  })(jQuery);
</script>


<script>
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>

<script>
  adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
  adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
  adroll_version = "2.0";
  (function(w, d, e, o, a) {
    w.__adroll_loaded = true;
    w.adroll = w.adroll || [];
    w.adroll.f = ['setProperties', 'identify', 'track'];
    var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id +
      "/roundtrip.js";
    for (a = 0; a < w.adroll.f.length; a++) {
      w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
        return function() {
          w.adroll.push([n, arguments])
        }
      })(w.adroll.f[a])
    }
    e = d.createElement('script');
    o = d.getElementsByTagName('script')[0];
    e.async = 1;
    e.src = roundtripUrl;
    o.parentNode.insertBefore(e, o);
  })(window, document);
  adroll.track("pageView");
</script>
</body>

<!-- Mirrored from script.viserlab.com/elab/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Mar 2022 19:51:32 GMT -->

</html>