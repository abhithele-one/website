<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Yuva Swabhiman Party</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/log3.png" rel="icon">
  <link href="assets/img/help.jpgapple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .switch input:checked+.slider:before {
      transform: translateX(30px);
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      transition: 0.4s;
      border-radius: 30px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 24px;
      width: 24px;
      left: 3px;
      bottom: 3px;
      background-color: white;
      transition: 0.4s;
      border-radius: 50%;
    }
  </style>
</head>

<body class="portfolio-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img style="height: 160px;" src="assets/img/help.jpglog3.png" alt="">
        <h3 class="sitename" style="color: #f6ab08; font-weight: 600;">Yuva Swabhiman Party</h3>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home.html">Home<br></a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="media.html" class="active">Media</a></li>
          <li><a href="trainers.html">Leadership</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="membership.html">Membership</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Media</h1>
              <p class="mb-0">Yuva Swabhiman Party is dedicated to empowering youth, fostering social justice, and
                creating a vibrant, inclusive future. Stay updated on our vision, activities, and initiatives through
                our media page.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Media</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
    <div class="switch-container"
      style="display: flex; align-items: center; gap: 10px; justify-content: center; margin: 20px 0;">
      <span class="label-text">Images</span>
      <label class="switch" style="position: relative; display: inline-block; width: 60px; height: 30px;">
        <input type="checkbox" id="mediaToggle" onchange="renderMedia()" style="opacity: 0; width: 0; height: 0;">
        <span class="slider"
          style="position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: 0.4s; border-radius: 30px;"></span>
      </label>
      <span class="label-text">Videos</span>
    </div>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <!-- JavaScript will insert the images here -->
            <!-- Portfolio items will be generated dynamically -->

          </div><!-- End Portfolio Container -->
        </div>
      </div>

    </section><!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Yuva Swabhiman Party</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Yuva Swabhiman Party Office</p>
            <p>Bhongade Complex, Rajapeth, Amravati.</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+91 98765 43210</span></p>
            <p><strong>Email:</strong> <span>contact@yuvaswabhimanparty.com</span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    const imageArray = [
      'rysp (183)', 'rysp (184)',
      'rysp (187)', 'rysp (188)',
      'rysp (189)', 'rysp (190)',
      'rysp (193)', 'rysp (194)',
      'rysp (195)', 'rysp (196)',
      'rysp (199)', 'rysp (200)',
      'rysp (201)', 'rysp (202)',
      'rysp (205)', 'rysp (206)',
      'rysp (207)', 'rysp (208)',
      'rysp (211)', 'rysp (51)',
      'rysp (52)', 'rysp (55)',
      'rysp (56)', 'rysp (57)',
      'rysp (60)', 'rysp (61)',
      'rysp (64)', 'rysp (65)',
      'rysp (66)', 'rysp (67)',
      'rysp (94)', 'rysp (95)',
      'rysp (98)', 'rysp (99)',
      'rysp (102)', 'rysp (103)',
      'rysp (106)', 'rysp (107)',
      'rysp (110)', 'rysp (111)',
      'rysp (114)', 'rysp (115)',
      'rysp (118)', 'rysp (119)',
      'rysp (122)', 'rysp (123)',
      'rysp (126)', 'rysp (127)',
      'rysp (130)', 'rysp (131)',
      'rysp (134)', 'rysp (135)',
      'rysp (138)', 'rysp (139)',
      'rysp (142)', 'rysp (143)',
      'rysp (146)', 'rysp (178)',
      'rysp (212)', 'rysp (213)',
      'rysp (216)', 'rysp (217)',
      'rysp (220)', 'rysp (221)',
      'rysp (224)', 'rysp (225)',
      'rysp (228)', 'rysp (229)',
      'rysp (232)', 'rysp (233)',
      'rysp (236)', 'rysp (237)',
      'rysp (240)', 'rysp (241)',
      'rysp (244)', 'rysp (245)',
      'rysp (248)', 'rysp (249)',
      'rysp (252)', 'rysp (253)',
      'rysp (256)', 'rysp (257)',
      'rysp (260)', 'rysp (261)',
      'rysp (264)', 'rysp (265)',
      'rysp (268)', 'rysp (269)',
      'rysp (272)', 'rysp (273)',
      'rysp (276)', 'rysp (277)',
      'rysp (280)', 'rysp (281)',
      'rysp (284)', 'rysp (285)',
      'rysp (288)', 'rysp (289)',
      'rysp (292)', 'rysp (293)',
      'rysp (296)', 'rysp (297)',
      'rysp (300)', 'rysp (301)',
      'rysp (304)', 'rysp (305)',
      'rysp (308)', 'rysp (309)',
      'rysp (312)', 'rysp (313)',
      'rysp (316)', 'rysp (317)',
      'rysp (320)', 'rysp (321)',
      'rysp (324)', 'rysp (325)',
      'rysp (328)', 'rysp (329)',
      'rysp (332)', 'rysp (333)',
      'rysp (336)', 'rysp (337)',
      'rysp (340)', 'rysp (341)',
      'rysp (344)', 'rysp (345)',
      'rysp (348)', 'rysp (349)',
      'rysp (352)', 'rysp (353)',
      'rysp (356)', 'rysp (357)',
      'rysp (360)', 'rysp (361)',
      'rysp (364)', 'rysp (365)',
      'rysp (368)', 'rysp (369)',
      'rysp (372)', 'rysp (373)',
      'rysp (376)', 'rysp (377)',
      'rysp (380)', 'rysp (381)',
      'rysp (384)', 'rysp (385)',
      'rysp (388)', 'rysp (389)',
      'rysp (392)', 'rysp (393)',
      'rysp (396)', 'rysp (397)',
      'rysp (400)', 'rysp (401)',
      'rysp (404)', 'rysp (405)',
      'rysp (408)', 'rysp (409)',
      'rysp (412)', 'rysp (413)',
      'rysp (416)', 'rysp (417)',
      'rysp (420)', 'rysp (421)',
      'rysp (424)', 'rysp (425)',
      'rysp (428)', 'rysp (429)',
      'rysp (432)', 'rysp (433)',
      'rysp (436)', 'rysp (437)',
      'rysp (440)', 'rysp (441)',
      'rysp (444)', 'rysp (445)',
      'rysp (448)', 'rysp (449)',
      'rysp (452)', 'rysp (453)',
      'rysp (456)', 'rysp (457)',
      'rysp (460)', 'rysp (461)',
      'rysp (464)', 'rysp (465)',
      'rysp (468)', 'rysp (469)',
      'rysp (472)', 'rysp (473)',
      'rysp (476)', 'rysp (477)',
      'rysp (480)', 'rysp (481)',
      'rysp (484)', 'rysp (485)',
      'rysp (488)', 'rysp (489)',
      'rysp (492)', 'rysp (493)',
      'rysp (496)', 'rysp (497)',
      'rysp (500)', 'rysp (501)',
      'rysp (504)', 'rysp (505)',
      'rysp (508)', 'rysp (509)',
      'rysp (512)', 'rysp (513)',
      'rysp (516)', 'rysp (517)',
      'rysp (520)', 'rysp (521)',
      'rysp (524)', 'rysp (525)',
      'rysp (528)', 'rysp (529)',
      'rysp (532)', 'rysp (533)',
      'rysp (536)', 'rysp (537)',
      'rysp (540)', 'rysp (541)',
      'rysp (544)', 'rysp (545)',
      'rysp (548)', 'rysp (549)',
      'rysp (552)', 'rysp (553)',
      'rysp (556)', 'rysp (557)',
      'rysp (560)', 'rysp (561)',
      'rysp (564)', 'rysp (565)',
      'rysp (568)', 'rysp (569)',
      'rysp (572)', 'rysp (573)',
      'rysp (576)', 'rysp (577)',
      'rysp (580)', 'rysp (581)',
      'rysp (584)', 'rysp (585)',
      'rysp (588)', 'rysp (589)',
      'rysp (592)', 'rysp (593)',
      'rysp (596)', 'rysp (597)',
      'rysp (600)', 'rysp (601)',
      'rysp (604)', 'rysp (605)',
      'rysp (608)', 'rysp (609)',
      'rysp (612)', 'rysp (613)',
      'rysp (616)', 'rysp (617)',
      'rysp (620)', 'rysp (621)',
      'rysp (624)', 'rysp (625)',
      'rysp (628)', 'rysp (629)',
      'rysp (632)', 'rysp (633)',
      'rysp (636)', 'rysp (637)',
      'rysp (640)', 'rysp (641)',
      'rysp (644)', 'rysp (645)',
      'rysp (648)', 'rysp (649)',
      'rysp (652)', 'rysp (653)',
      'rysp (656)', 'rysp (657)',
      'rysp (660)', 'rysp (661)',
      'rysp (664)', 'rysp (665)',
      'rysp (668)', 'rysp (669)',
      'rysp (672)', 'rysp (673)',
      'rysp (676)', 'rysp (677)',
      'rysp (680)', 'rysp (681)',
      'rysp (684)', 'rysp (685)',
      'rysp (688)', 'rysp (689)',
      'rysp (692)', 'rysp (693)',
      'rysp (696)', 'rysp (697)',
      'rysp (700)', 'rysp (701)',
      'rysp (704)', 'rysp (705)',
      'rysp (708)', 'rysp (709)',
      'rysp (712)', 'rysp (713)',
      'rysp (716)', 'rysp (717)',
      'rysp (720)', 'rysp (721)',
      'rysp (724)', 'rysp (725)',
      'rysp (728)', 'rysp (729)',
      'rysp (732)', 'rysp (733)',
      'rysp (736)', 'rysp (737)',
      'rysp (740)', 'rysp (741)',
      'rysp (744)', 'rysp (745)',
      'rysp (748)', 'rysp (749)',
      'rysp (752)', 'rysp (753)',
      'rysp (756)', 'rysp (757)',
      'rysp (760)', 'rysp (761)',
      'rysp (764)', 'rysp (765)',
      'rysp (768)', 'rysp (769)',
      'rysp (772)', 'rysp (773)',
      'rysp (776)', 'rysp (777)',
      'rysp (780)', 'rysp (781)',
      'rysp (784)', 'rysp (785)',
      'rysp (788)', 'rysp (789)',
      'rysp (792)', 'rysp (793)',
      'rysp (796)', 'rysp (797)',
      'rysp (800)', 'rysp (801)',
      'rysp (804)', 'rysp (805)',
      'rysp (808)', 'rysp (809)',
      'rysp (812)', 'rysp (813)',
      'rysp (816)', 'rysp (817)',
      'rysp (820)', 'rysp (821)',
      'rysp (824)', 'rysp (825)',
      'rysp (828)', 'rysp (829)',
      'rysp (832)', 'rysp (833)',
      'rysp (836)', 'rysp (837)',
      'rysp (840)', 'rysp (841)',
      'rysp (844)', 'rysp (845)',
      'rysp (848)', 'rysp (849)',
      'rysp (852)', 'rysp (853)',
      'rysp (856)', 'rysp (857)',
      'rysp (860)', 'rysp (861)',
      'rysp (864)', 'rysp (865)',
      'rysp (868)', 'rysp (869)',
      'rysp (872)', 'rysp (873)',
      'rysp (876)', 'rysp (877)',
      'rysp (880)', 'rysp (881)',
      'rysp (884)', 'rysp (885)',
      'rysp (888)', 'rysp (889)',
      'rysp (892)', 'rysp (893)',
      'rysp (896)', 'rysp (897)',
      'rysp (900)', 'rysp (901)',
      'rysp (904)', 'rysp (905)',
      'rysp (908)', 'rysp (909)',
      'rysp (912)', 'rysp (913)',
      'rysp (916)', 'rysp (917)',
      'rysp (920)', 'rysp (921)',
      'rysp (924)', 'rysp (925)',
      'rysp (928)', 'rysp (929)',
      'rysp (932)', 'rysp (933)',
      'rysp (936)', 'rysp (937)'];


    const videoArray = [
      '/assets/img/rr_video.mp4',
      '/assets/img/rysp (1).mp4',
      '/assets/img/rr_video.mp4',
    ];

    function renderMedia() {
      const container = document.querySelector('.isotope-container');
      const toggle = document.getElementById('mediaToggle').checked;

      container.innerHTML = ''; // Clear previous content

      if (toggle) {
        // Show videos
        videoArray.forEach(src => {
          const videoItem = document.createElement('div');
          videoItem.classList.add('col-lg-4', 'col-md-6', 'portfolio-item', 'isotope-item', 'filter-product');

          const video = document.createElement('video');
          video.src = src;
          video.controls = true;
          video.classList.add('img-fluid');

          videoItem.appendChild(video);
          container.appendChild(videoItem);
        });
      } else {
        // Show images
        imageArray.forEach(image => {
          const portfolioItem = document.createElement('div');
          portfolioItem.classList.add('col-lg-4', 'col-md-6', 'portfolio-item', 'isotope-item', 'filter-product');

          const img = document.createElement('img');
          img.src = `assets/img/${image}.jpg`;
          img.classList.add('img-fluid');
          img.alt = image;

          const portfolioInfo = document.createElement('div');
          portfolioInfo.classList.add('portfolio-info');

          const h4 = document.createElement('h4');
          h4.textContent = 'Photo';

          const previewLink = document.createElement('a');
          previewLink.href = `assets/img/${image}.jpg`;
          previewLink.title = 'Photo';
          previewLink.classList.add('glightbox', 'preview-link');

          const icon = document.createElement('i');
          icon.classList.add('bi', 'bi-zoom-in');

          previewLink.appendChild(icon);
          portfolioInfo.appendChild(h4);
          portfolioInfo.appendChild(previewLink);

          portfolioItem.appendChild(img);
          portfolioItem.appendChild(portfolioInfo);
          container.appendChild(portfolioItem);
        });
      }
    }

    // Load initial media
    renderMedia();
  </script>


</body>

</html>