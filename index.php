<?php include_once './config/config.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= TITLE ?> - Home</title>
  <meta name="description" content="<?= DESCRIPTION ?>" />
  <?php include "tags.php" ?>
</head>

<body data-easing="easeInQuad">
  <div class="banner">
    <nav class="navbar navbar-expand-md navbar-dark hidden-lg-up fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><?= TITLE ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">اﻟﺮﺋﻴﺴﻴﻪ<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-easing="easeInQuad" href="#services">ﺧﺪﻣﺎﺗﻨﺎ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-easing="easeInQuad" href="#pricing">اﻻﺳﻌﺎﺭ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-easing="easeInQuad" href="#team">ﻓﺮﻳﻖ اﻟﻌﻤﻞ</a>
            </li>
          </ul>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="contact.php"><button class="btn btn-primary">اﺗﺼﻞ ﺑﻨﺎ</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HeroUI -->
    <div class="jumbotron bg-transparent text-center jumbotron-fluid sharp">
      <h1 class="display-3">اﻫﻼ,ﺑﺎﻟﻌﺎﻟﻢ !</h1>
      <section class="container">
        <h4 class="hidelg">ﺧﺪﻣﺎﺕ ﺗﻄﻮﻳﺮ اﻟﻤﻮاﻗﻊ</h4>
        <p class="lead p hidesm">
          ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ
          ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ
          اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ
          ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ . ﺩﻳﻮاﺱ ﺃﻳﻮﺗﻲ ﺃﺭﻳﺮﻱ ﺩﻭﻻﺭ ﺇﻥ
          ﺭﻳﺒﺮﻳﻬﻴﻨﺪﻳﺮﺃﻳﺖ ﻓﻮﻟﻴﻮﺑﺘﺎﺗﻲ ﻓﻴﻼﻳﺖ ﺃﻳﺴﺴﻲ ﻛﺎﻳﻠﻠﻴﻮﻡ ﺩﻭﻻﺭ ﺃﻳﻮ ﻓﻴﺠﺎﻳﺖ ﻧﻴﻮﻻ
          ﺑﺎﺭاﻳﺎﺗﻴﻮﺭ. ﺃﻳﻜﺴﺴﻴﺒﺘﻴﻮﺭ ﺳﺎﻳﻨﺖ ﺃﻭﻛﻜﺎﻳﻜﺎﺕ ﻛﻴﻮﺑﺎﻳﺪاﺗﺎﺕ ﻧﻮﻥ ﺑﺮﻭاﻳﺪﻳﻨﺖ
          ,ﺳﻴﻮﻧﺖ اﻥ ﻛﻴﻮﻟﺒﺎ ﻛﻴﻮ ﺃﻭﻓﻴﺴﻴﺎ ﺩﻳﺴﻴﺮﻳﻮﻧﺘﻤﻮﻟﻴﺖ اﻧﻴﻢ ﺃﻳﺪﻱ اﻳﺴﺖ ﻻﺑﻮﺭﻳﻮﻡ.
        </p>

        <br /><br />

        <section class="container">
          <p class="p">ﺇﺫا ﺗﺒﻐﺎ ﺗﺴﺘﻌﻴﻦ ﺑﺨﺪﻣﺎﺗﻨﺎ اﻟﺮﺟﺎء اﻻﺗﺼﺎﻝ ﺑﻨﺎ</p>
        </section>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="contact.php" role="button">ﻃﻠﺐ ﺧﺪﻣﺔ</a>
        </p>
      </section>
    </div>
  </div>

  <!-- Our Services -->
  <div class="container pt-3 pb-3 containers-service" id="services">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="display-4">ﺧﺪﻣﺎﺗﻨﺎ</h1>
        <p>اﻟﺨﺪاﻣﺎﺕ اﻟﻲ ﻧﻘﺪﻣﻬﺎ ﻟﻠﻌﻤﻼء.</p>
      </div>
      <div class="col-md-4 pt-3">
        <div class="text-center display-4">
          <h1 class="fa fa-bolt circle-icon fa-stack"></h1>
        </div>
        <h4 class="text-center">ﺳﺮﻋﺔ ﻓﺎﻟﺨﺪﻣﺔ</h4>
        <p class="text-center wrap">
          ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ
          ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ
          اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ
          ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .
        </p>
      </div>

      <div class="col-md-4 pt-3">
        <div class="text-center display-4">
          <h1 class="fa fa-life-ring circle-icon fa-stack"></h1>
        </div>
        <h4 class="text-center">ﺩﻋﻢ ﻓﻨﻲ ﺧﺎﺹ</h4>
        <p class="text-center wrap">
          ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ
          ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ
          اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ
          ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .
        </p>
      </div>

      <div class="col-md-4 pt-3">
        <div class="text-center display-4">
          <h1 class="fa fa-shield circle-icon fa-stack"></h1>
        </div>
        <h4 class="text-center">ﺣﻤﺎﻳﺔ ﻋﺎﻟﻴﻪ</h4>
        <p class="text-center wrap">
          ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ
          ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ
          اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ
          ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .
        </p>
      </div>
    </div>
  </div>

  <!-- Pricing Table -->
  <div class="pt5">
    <div class="pricing-header pt5 px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="pricing">
      <h1 class="display-4">اﺳﻌﺎﺭﻧﺎ</h1>
      <p class="lead">ﺟﺪﻭﻝ اﺳﻌﺎﺭ اﺣﺘﺮاﻓﻲ ﻟﻌﺮﺽ اﺳﻌﺎﺭﻙ ﻟﻠﻌﻤﻼء</p>
    </div>

    <div class="container mb-5 mt-5">
      <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
          <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ﺑﺪاﻳﻪ</span>
          <div class="bg-transparent card-header pt-4 border-0">
            <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">
              $<span class="price">3</span><span class="h6 text-muted ml-2">/ شهرياً</span>
            </h1>
          </div>
          <div class="card-body pt-0">
            <ul class="list-unstyled mb-4">
              <li>Up to 5 users</li>
              <li>Basic support on Github</li>
              <li>Monthly updates</li>
              <li>Free cancelation</li>
            </ul>
            <a href="#" target="_blank" class="btn btn-outline-secondary mb-3">Order Now</a>
          </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
          <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">اﺣﺘﺮاﻓﻲ</span>
          <div class="bg-transparent card-header pt-4 border-0">
            <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">
              $<span class="price">6</span><span class="h6 text-muted ml-2">/ شهرياً</span>
            </h1>
          </div>
          <div class="card-body pt-0">
            <ul class="list-unstyled mb-4">
              <li>Up to 5 users</li>
              <li>Basic support on Github</li>
              <li>Monthly updates</li>
              <li>Free cancelation</li>
            </ul>
            <a href="#" target="_blank" class="btn btn-primary mb-3">Order Now</a>
          </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
          <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ﺃﻋﻤﺎﻝ</span>
          <div class="bg-transparent card-header pt-4 border-0">
            <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">
              $<span class="price">9</span><span class="h6 text-muted ml-2">/ شهرياً</span>
            </h1>
          </div>
          <div class="card-body pt-0">
            <ul class="list-unstyled mb-4">
              <li>Up to 5 users</li>
              <li>Basic support on Github</li>
              <li>Monthly updates</li>
              <li>Free cancelation</li>
            </ul>
            <a href="#" target="_blank" class="btn btn-outline-secondary mb-3">Order Now</a>
          </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
          <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ﻣﺸﺎﺭﻳﻊ</span>
          <div class="bg-transparent card-header pt-4 border-0">
            <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">
              $<span class="price">12</span><span class="h6 text-muted ml-2">/ شهرياً</span>
            </h1>
          </div>
          <div class="card-body pt-0">
            <ul class="list-unstyled mb-4">
              <li>Up to 5 users</li>
              <li>Basic support on Github</li>
              <li>Monthly updates</li>
              <li>Free cancelation</li>
            </ul>
            <a href="#" target="_blank" class="btn btn-outline-secondary mb-3">Order Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Team Table -->
  <div class="container" style="padding-bottom: 100px">
    <div class="text-center px-3 py-3 pt-md-5 pb-md-4 mx-auto" id="team">
      <h1 class="display-4">ﻓﺮﻳﻘﻨﺎ</h1>
      <p>اﻋﻀﺎء ﻓﺮﻳﻘﻨﺎ اﻻﺣﺘﺮاﻓﻲ</p>
    </div>
    <div class="row text-center">
      <!-- Team item -->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4 drawb">
          <img src="src/img/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
          <h5 class="mb-0">ﻣﺎﻧﻮﻳﻼ ﻧﻴﻔﻮﺭﻳﺴﻜﻲ</h5>
          <span class="small text-uppercase text-muted">اﻟﺮﺋﻴﺲ اﻟﺘﻨﻔﻴﺬﻱ - ﻣﺆﺳﺲ</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
            </li>
            <li></li>
          </ul>
        </div>
      </div>
      <!-- End -->

      <!-- Team item -->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4 drawb">
          <img src="src/img/teacher-2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
          <h5 class="mb-0">ﺻﻤﻮﺋﻴﻞ ﻫﺎﺭﺩﻱ</h5>
          <span class="small text-uppercase text-muted">ﺷﺮﻳﻚ ﻣﺆﺳﺲ</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
            </li>
            <li></li>
          </ul>
        </div>
      </div>
      <!-- End -->

      <!-- Team item -->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4 drawb">
          <img src="src/img/teacher-1.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
          <h5 class="mb-0">ﺗﻮﻡ ﺳﺎﻧﺪﺭﻻﻧﺪ</h5>
          <span class="small text-uppercase text-muted">ﻣﺪﻳﺮ اﻟﻤﻮاﺭﺩ اﻟﺒﺸﺮﻳﺔ</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
            </li>
            <li></li>
          </ul>
        </div>
      </div>
      <!-- End -->

      <!-- Team item -->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4 drawb">
          <img src="src/img/teacher-7.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
          <h5 class="mb-0">ﺟﻮﻥ ﺗﺎﺭﻟﻲ</h5>
          <span class="small text-uppercase text-muted">ﻗﺴﻢ اﻟﺪﻋﻢ</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
            </li>
            <li></li>
          </ul>
        </div>
      </div>
      <!-- End -->
    </div>
  </div>

  <!-- Testimonials -->

  <div>
    <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto">
      <div class="text-center">
        <h1 class="display-4">ﺷﻬﺎﺩاﺕ اﻟﻌﻤﻼء</h1>
        <p>ﻣﺎﺫا ﻳﻘﻮﻟﻮﻥ اﻟﻌﻤﻼء ﻋﻨﺎ ؟</p>
      </div>
      <div class="row">
        <div class="col-md-8 col-center m-auto">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="item carousel-item active">
                <div class="img-box"><img src="src/img/1.jpg" alt="" /></div>
                <p class="testimonial">
                  ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ
                  ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ
                  ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ
                  ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ
                  ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .
                </p>
                <p class="overview"><b>ﺑﻮﻻ ﻭﻳﻠﺴﻮﻥ</b>, ﻣﺤﻠﻠﺔ ﺇﻋﻼﻣﻴﻪ</p>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star-half-o"></i>
                    </li>
                    <li></li>
                  </ul>
                </div>
              </div>

              <div class="item carousel-item">
                <div class="img-box"><img src="src/img/2.jpg" alt="" /></div>
                <p class="testimonial">
                  ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ
                  ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ
                  ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ
                  ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ
                  ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .
                </p>
                <p class="overview"><b>ﺃﻧﻄﻮﻧﻴﻮ ﻣﻮﺭﻳﻨﻮ</b>, ﻣﻄﻮﺭ ﻭﻳﺐ</p>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star-half-o"></i>
                    </li>
                    <li></li>
                  </ul>
                </div>
              </div>

              <div class="item carousel-item">
                <div class="img-box"><img src="src/img/3.jpg" alt="" /></div>
                <p class="testimonial">
                  ﻟﻮﺭﻳﻢ اﻳﺒﺴﻮﻡ ﺩﻭﻻﺭ ﺳﻴﺖ ﺃﻣﻴﺖ ,ﻛﻮﻧﺴﻴﻜﺘﻴﺘﻮﺭ ﺃﺩاﻳﺒﺎ ﻳﺴﻜﻴﻨﺞ
                  ﺃﻟﻴﺎﻳﺖ,ﺳﻴﺖ ﺩﻭ ﺃﻳﻮﺳﻤﻮﺩ ﺗﻴﻤﺒﻮﺭ ﺃﻧﻜﺎﻳﺪﻳﺪﻳﻮﻧﺘﻴﻮﺕ ﻻﺑﻮﺭﻱ اﺕ ﺩﻭﻻﺭ
                  ﻣﺎﺟﻨﺎ ﺃﻟﻴﻜﻴﻮا . ﻳﻮﺕ اﻧﻴﻢ ﺃﺩ ﻣﻴﻨﻴﻢ ﻓﻴﻨﺎﻳﻢ,ﻛﻴﻮاﺱ ﻧﻮﺳﺘﺮﻳﺪ ﺃﻛﺴﻴﺮ
                  ﺳﻴﺘﺎﺷﻦ ﻳﻠﻸﻣﻜﻮ ﻻﺑﻮﺭﺃﺱ ﻧﻴﺴﻲ ﻳﺖ ﺃﻟﻴﻜﻴﻮﺏ ﺃﻛﺲ ﺃﻳﺎ ﻛﻮﻣﻤﻮﺩﻭ
                  ﻛﻮﻧﺴﻴﻜﻴﻮاﺕ .
                </p>
                <p class="overview"><b>ﻣﺎﻳﻜﻞ ﻫﻮﻟﺰ</b>, ﻣﺤﻠﻞ</p>
                <div class="star-rating">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star"></i>
                    </li>
                    <li class="list-inline-item">
                      <i class="fa fa-star-half-o"></i>
                    </li>
                    <li></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Clients Combonent -->
  <div class="container containers-clients px-3 py-3 pt-5 pb-4 mx-auto">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h1 class="display-4">ﻋﻤﻼﺋﻨﺎ</h1>
          <p>اﻓﻀﻞ اﻟﻌﻤﻼء اﻟﺬﻳﻦ ﻧﻔﺘﺨﺮ ﻓﻴﻬﻢ</p>
        </div>
      </div>
      <div class="col-md-3 text-center pt-3">
        <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand" />
      </div>
      <div class="col-md-3 text-center pt-3">
        <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand" />
      </div>
      <div class="col-md-3 text-center pt-3">
        <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand" />
      </div>
      <div class="col-md-3 text-center pt-3">
        <img src="https://via.placeholder.com/140x100" class="img-fluid rounded brand" />
      </div>
    </div>
  </div>

  <!-- Newsletter Form -->
  <section class="newsletter text-white px-3 py-3 pt-5 pb-5 mx-auto bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="content">
            <h2 class="text-white">اﺷﺘﺮﻙ ﻣﻌﻨﺎ ﻓﻲ ﻧﺸﺮﺗﻨﺎ اﻻﺧﺒﺎﺭﻳﻪ</h2>
            <form action="<?= MAILCHIMP_URL ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display: none"></div>
                <div class="response" id="mce-success-response" style="display: none"></div>
              </div>
              <div class="input-group" data-aos="zoom-out">
                <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="ﺃﺩﺧﻞ ﺑﺮﻳﺪﻙ اﻻﻟﻜﺘﺮﻭﻧﻲ" />
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">
                    ﺃﺷﺘﺮﻙ اﻻﻥ
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <div>
    <div class="container text-center pt-5 pb-4">
      <ul class="list-inline h4">
        <li class="list-inline-item circle">
          <a href="<?= TWITTER ?>">
            <i class="onhover fa fa-twitter fa-stack circle-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item circle">
          <a href="<?= FACEBOOK ?>">
            <i class="onhover fa fa-facebook fa-stack circle-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item circle">
          <a href="<?= LIKEDIN ?>">
            <i class="onhover fa fa-linkedin fa-stack circle-linkedin"></i>
          </a>
        </li>
        <li class="list-inline-item circle">
          <a href="<?= INSTAGRAM ?>">
            <i class="onhover fa fa-instagram fa-stack circle-instagram"></i>
          </a>
        </li>
        <li class="list-inline-item circle">
          <a href="<?= SNAPCHAT ?>">
            <i class="onhover fa fa-snapchat-ghost fa-stack circle-snapchat"></i>
          </a>
        </li>
        <li></li>
      </ul>
    </div>
  </div>

  <?php include "components/footer.php"; ?>

  <?php include_once "js.php" ?>
</body>

<script type="text/javascript">
  var scroll = new SmoothScroll('a[href*="#"]');
  if (document.querySelector("[data-easing]")) {
    var linear = new SmoothScroll('[data-easing="easeInQuad"]', {
      easing: "easeInQuad",
    });
  }

  $(document).ready(function() {
    $(".menu-icon").on("click", function() {
      $("nav ul").toggleClass("showing");
    });
  });

  // Scrolling Effect

  $(window).on("scroll", function() {
    if ($(window).scrollTop()) {
      $("nav").addClass("bg-primary");
    } else {
      $("nav").removeClass("bg-primary");
    }
  });
</script>

</html>