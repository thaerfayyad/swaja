<!DOCTYPE html>
<html>
  <head>
    <title>سواجا | swaja</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta name="description" content=" Burger & Tortilla" />
    <meta name="keywords" content="Burger & Tortilla" />
    <meta name="og:title" property="og:title" content="سواجا | swaja" />
    <meta property="og:url" content="https://swajaksa.com" />
    <meta property="og:type" content="website" />
    <meta
      name="og:description"
      property="og:description"
      content="Burger & Tortilla"
    />
    <meta
      property="og:image"
      content="https://swajaksa.com/storage/01_swaja_logo.jpg"
    />
    <meta
      name="twitter:image"
      content="https://swajaksa.com/storage/01_swaja_logo.jpg"
    />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Burger & Tortilla" />
    <meta name="twitter:url" content="https://swajaksa.com" />
    <meta name="twitter:title" content="سواجا | swaja" />
    <meta name="robots" content="index, follow" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="https://swajaksa.com/storage/01_swaja_logo.jpg"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/uikit@3.9.2/dist/css/uikit.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('front/assets/css/animate.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('front/assets/css/reset.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('front/assets/css/style.css?3') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('front/assets/css/main.css?v3') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('front/assets/fonts/alamari.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('front/assets/css/custombox.css') }}"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- start loader -->
    <script
      type="text/javascript"
      src="{{ asset('front/assets/script/jquery.js') }}"
    ></script>
    <!-- cover photo anamition -->
    <script
      type="text/javascript"
      src="{{ asset('front/assets/script/pageSwitch.js') }}"
    ></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/all.min.css') }}">
    <link
      rel="stylesheet"
      href="{{ asset('front/assets/css/all.css?2') }}"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('front/assets/css/good-share.min.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('front/assets/css/single_custom.css?70') }}"
    />
  </head>
  <!-- cover anamition -->
  <script type="text/javascript">
    $(function () {
      a = new pageSwitch("slideshow", {
        selectors: {
          pages: ".pages", // pagination
        },

        duration: 1000,
        start: 0,
        direction: 0,
        loop: true,
        autoplay: true,
        pagination: true,
        ease: "ease",
        transition: "scrollCoverIn",
        mouse: true,
        mousewheel: true,
        arrowkey: true,
      });
    });
  </script>
  <style>
    body {
      background: url(https://haveeggs.com/design_images/bg.webp) no-repeat top
          left,
        url(https://haveeggs.com/design_images/bg2.webp) no-repeat right 215px,
        url(https://haveeggs.com/design_images/bottom-bg.webp) no-repeat right
          bottom;
    }

    /* .point_2 .myIcon {

    width: 165px;
    height: 150px;
} */

  </style>
  <!-- ------------- -->
  <body style="background: #ed1c24">
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img
              src="https://swajaksa.com/storage/01_swaja_logo.jpg"
              alt="سواجا | swaja"
            />
          </div>
        </div>
      </div>
    </div>
   <!-- ------------- -->
    <header>

    </header>
    <script>
      // $(window).on('load', function () {
      $("#preloader-active").delay(1000).fadeOut("slow");
      $("body").delay(1000).css({
        overflow: "visible",
      });
      // });
    </script>
    <div class="table-display">
      <div class="table-cell-display">
        <div class="container">
          <div class="index-grid">
            <div class="right-column">
              <div class="header">
                <a
                  style="display: inherit"
                  class="sliderBtns fadeInDown delay-2 animated"
                  href="#"
                >
                  <i class="far fa-eye xxxxxxxx"></i>
                  <span class="xxxxxxxx" style="font-size: initial">
                    23.5K
                  </span>
                </a>
                <div
                  style="
                    background: url('https://swajaksa.com/storage/01_swaja_logo.jpg')
                      no-repeat #000;
                    background-size: contain;
                    background-position: center;
                    background-size: contain;
                  "
                  class="site-logo zoomIn delay-5 animated logo"
                ></div>
                <a
                  href="#share-site"
                  modal_target="share_modal"
                  class="sliderBtns model-link fadeInDown delay-2 animated"
                >
                  <i class="fas fa-share-alt"></i>
                </a>
                <div class="myModal share_modal">
                  <div class="modal_header_container">
                    <span
                      onclick="Custombox.modal.close();"
                      class="close modal_header_buttons"
                    >
                      <i class="fas fa-times"></i>
                    </span>
                    <h2>مشاركة الرابط</h2>
                  </div>
                  <div class="grid-4 share-grid">
                    <i
                      data-share-title="سواجا | swaja"
                      data-share-text="سواجا | swaja"
                      data-share-url="https://swajaksa.com/"
                      class="org_share good-share fa fa-share-alt"
                    >
                    </i>
                    <p>
                      شارك عبر التصوير المباشر من الكاميرا بإستخدام أي تطبيق QR
                    </p>
                    <img
                      style="width: 100%"
                      src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=https://swajaksa.com"
                    />
                    <a
                      rel="nofollow"
                      href="https://swajaksa.com/qrcode/GpD01Lp"
                    >
                      <i class="fas fa-print"></i>
                      طباعة
                    </a>
                  </div>
                </div>
                <div class="myModal userActions">
                  <div class="modal_header_container">
                    <span
                      onclick="Custombox.modal.close();"
                      class="close modal_header_buttons"
                    >
                      <i class="fas fa-times"></i>
                    </span>
                    <h2>المفضلة</h2>
                  </div>
                  <div class="grid-4">
                    <div>
                      <div id="favedIcons"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- -------slideshow-------- -->
              <div id="slideshow">
                <div
                  style="
                    background: url({{ asset('front/assets/img/01_cover.jpg') }})
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
                <div
                  style="
                    background: url({{ asset('front/assets/img/02_cover.jpg') }})
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
                <div
                  style="
                    background: url({{ asset('front/assets/img/03_cover.jpg') }})
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
                <div
                  style="
                    background: url({{ asset('front/assets/img/04_cover.jpg') }})
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
                <div
                  style="
                    background: url({{ asset('front/assets/img/05_cover.jpg') }})
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
              </div>
              <div class="slider_bottom"></div>
            </div>
            <!-- main items -->
            <div class="left-column">

              <h1
                class="
                  section_title
                  scroll-animation
                  section-title
                  animated
                  fadeInDown
                "
              >
                سواجا | swaja
              </h1>
              <h3
                class="
                  section_title
                  scroll-animation
                  section-title
                  animated
                  fadeInDown
                "
                data-animation-class="fadeIn"
              >
                <i class="far fa-compass nav-icon mr-1"></i>

                📍 المملكة العربية السعودية، أبها.
              </h3>
              <div class="site-content">
                <h3
                  class="
                    scroll-animation
                    section-title
                    animated
                    fadeInDown
                    delay-animation
                  "
                >
                  ⏰أوقات العمل: يوميا من الساعة 1:00 مساء حتى الساعة 2 صباحا
                </h3>
                <div class="grid-4 section_4324"></div>
                <h3
                  class="
                    scroll-animation
                    section-title
                    animated
                    fadeInDown
                    delay-animation
                  "
                >
                  Burger & Tortilla
                </h3>
                               <!-- /////////////////////////////////   -->
                               <h3
                               class="
                                 scroll-animation
                                 section-title
                                 animated
                                 fadeInDown
                                 delay-animation
                               "
                             >
                               حمل تطبيقنا الجديد
                             </h3>



                             <div class="grid-4 section_4327">
                                  <div  class="">
                                        <div

                                          style="
                                            background-position: center;
                                          "
                                        >
                                        <img style="width: 250px;" src="https://www.freepnglogos.com/uploads/app-store-logo-png/google-play-and-apple-app-store-logos-22.png"  alt="swaja app Download" />
                                         </div>
                                        <a
                                          target="_blank"
                                          onclick="trackIcon(5822)"
                                          href="https://swajaksa.com/app"
                                          class="
                                            iconTitle
                                            iconLink
                                            scroll-animation
                                            animated
                                            fadeInDown
                                          "
                                        >

                                        </a>
                                        <span
                                          class="
                                            bold
                                            myIconTitle
                                            scroll-animation
                                            animated
                                            fadeInDown
                                          "
                                        >
                                        جوجل بلاي وابل ستور
                                        </span>
                                  </div>

                             </div>
                             <br>
                             <!-- ****** -->
                <!-- ///////////////////////////////// -->
                <div class="grid-4 section_6188"></div>
                <h3
                  class="
                    scroll-animation
                    section-title
                    animated
                    fadeInDown
                    delay-animation
                  "
                >
                  الوجبات🍔
                </h3>
                <!-- Start Products  -->
                <div class="categories-shop">
                    <div class="container">
                            <div class="products-box">
                                <div class=" ">
                                    @foreach ($categories as  $category)
                                        <h3 class="text-center mb-4">{{ $category->name }}</h3>
                                        <div class="row special-list">
                                             @foreach ($category->products as $i )
                                                    <div class="col-lg-6 col-md-6 special-grid best-seller">

                                                        <div class="products-single fix">
                                                            <div class=" ">
                                                                <div class="type-lb">

                                                                </div>
                                                                <img src="{{ $i->image_path }}" class=" " width="1500px" height="4000px" alt="Image">
                                                            </div>
                                                            <div class="why-text">
                                                                <h6 class=" text-center">{{ $i->name }} | {{ $i->price }}  ر.س </h6>
                                                            @isset($i->cal)
                                                                <h5  class=" text-center">cal : {{ $i->cal }}    </h5>

                                                            @endisset
                                                            </div>
                                                        </div>
                                                    </div>
                                             @endforeach
                                         </div>
                                    @endforeach


                                </div>
                            </div>
                    </div>
                </div>
    <!-- End Products  -->

    <h6
                  class="
                    scroll-animation
                    section-title
                    animated
                    fadeInDown
                    delay-animation
                  "
                >
                Copyright © <span id="curYr"></span><span> Swaja </span>

                </h6>

    <h6
    class="
      scroll-animation
      section-title
      animated
      fadeInDown
      delay-animation
    "
  >
  حقوق الطبع والنشر © سواجا {{ date("Y") }}
تطوير وتصميم بواسطة
  <a href="http://www.airmenu.net/contact" target="_blank"> <span>   Air Menu  </span></a>

  </h6>




                <div class="grid-4 section_4331"></div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </div>



  <script>
    var date = new Date();
    var year = date.getFullYear();
    document.getElementById("curYr").innerHTML = year;
  </script>
  <script src="script/05_script.js"></script>
  </body>

  <script
    type="text/javascript"
    src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"
  ></script>

</html>




