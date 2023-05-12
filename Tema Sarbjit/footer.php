<footer id="footer" class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>35,000+ ALREADY JOINED</h4>
            <h2 class="mx-auto">Stay up-to-date with what<br> we're doing</h2>
          </div>
          <div class="col-lg-6">
            <form class="row needs-validation" novalidate>
              <div>
                <input type="email" class="form-control" id="validationCustom01" placeholder="email" required>
                <button class="btn btn-two" type="submit">Contact Us</button>
                <div class="invalid-feedback">
                  <i>Whoops, make sure it`s an email</i>
                </div>
              </div>
              <div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid footer-button">
      <div class="container">
        <div class="row">
          <div class="d-flex flex-wrap justify-content-between align-items-center p-3">
            <div class="col-12 col-md-3">
              <div class="col-12 col-md-2  mx-auto w-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bookmark-white.svg">
              </div>

            </div>
            <div class="col-12 col-md-7">
                <ul>
                  <li><a class="nav-link scrollto" href="#hero">Features</a></li>
                  <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
            </div>
            <ul class="icon-social-ul col-12 col-md-2 nav justify-content-end list-unstyled d-flex">
              <li class="icon-social-li  text-center"><a class="text-body-secondary icon-social" href="#">              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-facebook.svg"></a></li><li class="icon-social-li text-center"><a class="text-body-secondary icon-social" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitter.svg"></a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

    <?php wp_footer(); ?>
  </body>
</html>