<?php get_header(); ?>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bookmark.svg">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          
          <li><a class="nav-link scrollto" href="#hero">Features</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="login scrollto" href="#Login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row row flex-lg-row-reverse">
        <div class="col-lg-6 hero-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-hero.svg">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center">

          <h1>A Simple Bookmark Manager</h1>
          <h2>A clean and simple interface to organize your favourite websites.
            Open a new browser tab and see your sites load instantly. Try it for free.</h2>
          <div>
            <div class="text-center text-lg-start">
              <a href="#about"
                class="btn-one scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get it on Chrome</span>
              </a>
              <a href="#about"
                class="btn-two scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get it on Firefox</span>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="circle-right"></div>
    </div>

  </section><!-- End Hero -->
<main id="main">
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container">
        <div class="section-header">
          <h2>Features</h2>
          <p class="mx-auto">Our aim is to make it quick and easy for you to access your favourite websites. Your
            bookmarks sync between your devices so you can access them on the go.</p>
        </div>
        <!-- Feature Tabs -->
        <div class="row feture-tabs">
          <div class="col-lg-12">
            <!-- Tabs -->
            <ul class="nav nav-pills mb-3 nav-fill justify-content-center" role="tablist">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Simple Bookmarking</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Speedy Searching</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Easy Sharing</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content p-0 p-sm-5">
              <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                <div class="row">
                  <div class="col-lg-6 hero-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-features-tab-1.svg">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h2>Bookmark in one click</h2>
                    <p>Organize your bookmarks however you like. Our simple
                      drag-and-drop interface gives you complete control over how you manage your favourite sites.</p>
                    <div>
                      <div class="text-center text-lg-start">
                        <a href="#about"
                          class="btn-one scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                          <span>More Info</span>

                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <div class="row">
                  <div class="col-lg-6 hero-img">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-features-tab-2.svg">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h2>Bookmark in one click</h2>
                    <p>Organize your bookmarks however you like. Our simple
                      drag-and-drop interface gives you complete control over how you manage your favourite sites.</p>
                    <div>
                      <div class="text-center text-lg-start">
                        <a href="#about"
                          class="btn-one scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                          <span>More Info</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <div class="row">
                  <div class="col-lg-6 hero-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/illustration-features-tab-3.svg">
                  </div>
                  <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h2>Bookmark in one click</h2>
                    <p>Organize your bookmarks however you like. Our simple
                      drag-and-drop interface gives you complete control over how you manage your favourite sites.</p>
                    <div>
                      <div class="text-center text-lg-start">
                        <a href="#about"
                          class="btn-one scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                          <span>More Info</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tab 3 Content -->
            </div>
          </div>
        </div><!-- End Feature Tabs -->
        <div class="circle-left"></div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-header">
          <h2>Download the extension
          </h2>
          <p class="mx-auto">We've got more browsers in the pipeline. Please do let us know if you've got a
            favourite you'd like us to prioritize.</p>
        </div>
        <div class="row gy-4 mb-5">
          <div class="col-lg-3 col-md-6 offset-lg-1">
            <div class="service-box one mx-auto d-flex align-content-between flex-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-chrome.svg">
              <h3>Add to Chrome</h3>
              <p>Minimum version 62</p>
              <div class="deco-dots">
                <a href="#" class="read-more"><span>Add & Install Extension</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-box two mx-auto d-flex align-content-between flex-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-firefox.svg">
              <h3>Add to Firefox</h3>
              <p>Minimum version 55</p>
              <div class="deco-dots">
                <a href="#" class="read-more"><span>Add & Install Extension</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="service-box three mx-auto d-flex align-content-between flex-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-opera.svg">
              <h3>Add to Opera</h3>
              <p>Minimum version 46</p>
              <div class="deco-dots">
                <a href="#" class="read-more"><span>Add & Install Extension</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container">

        <div class="section-header">
          <h2>Frequently Asked Questions

          </h2>
          <p class="mx-auto"> Here are some of our FAQs. If you have any other questions you'd like answered please
            feel free to email us.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mx-auto">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    What is Bookmark?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa.
                    ultricies non ligula. Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris
                    augue massav ultricies non ligula.
                    Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
                    Mauris augue massar ultricies non ligula. Suspendisse imperdiet.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    How can I request a new browser?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa.
                    ultricies non ligula. Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris
                    augue massav ultricies non ligula.
                    Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
                    Mauris augue massar ultricies non ligula. Suspendisse imperdiet.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    Is there a mobile app?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa.
                    ultricies non ligula. Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris
                    augue massav ultricies non ligula.
                    Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
                    Mauris augue massar ultricies non ligula. Suspendisse imperdiet.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    What about other Chromium browsers?
                  </button>
                </h2>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Vivamus luctus eros aliquet convallis ultricies. Mauris augue massa.
                    ultricies non ligula. Suspendisse imperdiet. Vivamus luctus eros aliquet convallis ultricies. Mauris
                    augue massav ultricies non ligula.
                    Suspendisse imperdie tVivamus luctus eros aliquet convallis ultricies.
                    Mauris augue massar ultricies non ligula. Suspendisse imperdiet.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <a href="#about"
                class="btn-one scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>More Info</span>
              </a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->
  </main>
<?php get_footer(); ?>