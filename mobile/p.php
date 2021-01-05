<html lang="en"><head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="/mobile/css/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <!-- Swiper JS -->
  <script src="/mobile/js/swiper-bundle.js"></script>

  <!-- Initialize Swiper -->

<script>
var myPlugin = {
      name: 'debugger',
      params: {
        debugger: false,
      },
      on: {
        init: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('init');
        },
        click: function (swiper, e) {
          if (!swiper.params.debugger) return;
          console.log('click');
        },
        tap: function (swiper, e) {
          if (!swiper.params.debugger) return;
          console.log('tap');
        },
        doubleTap: function (swiper, e) {
          if (!swiper.params.debugger) return;
          console.log('doubleTap');
        },
        sliderMove: function (swiper, e) {
          if (!swiper.params.debugger) return;
          console.log('sliderMove');
        },
        slideChange: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('slideChange', this.previousIndex, '->', this.activeIndex);
        },
        slideChangeTransitionStart: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('slideChangeTransitionStart');
        },
        slideChangeTransitionEnd: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('slideChangeTransitionEnd');
        },
        transitionStart: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('transitionStart');
        },
        transitionEnd: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('transitionEnd');
        },
        fromEdge: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('fromEdge');
        },
        reachBeginning: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('reachBeginning');
        },
        reachEnd: function (swiper) {
          if (!swiper.params.debugger) return;
          console.log('reachEnd');
        },
      },
    };
  </script>

  <script>
	Swiper.use(myPlugin);

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 1,
	  centeredSlides: true,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
	 debugger: true,
    });

  </script>
  

</body></html>