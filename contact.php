<?php include_once './config/config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title><?= TITLE ?> - Contact Us</title>
  <?php include "tags.php" ?>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary hidden-lg-up">
    <div class="container">
      <a class="navbar-brand" href="#"><?= TITLE ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              اﻟﺮﺋﻴﺴﻴﻪ
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-easing="easeInQuad" href="index.php#services">
              ﺧﺪاﻣﺎﺗﻨﺎ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-easing="easeInQuad" href="index.php#pricing">
              اﻻﺳﻌﺎﺭ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-easing="easeInQuad" href="index.php#team">
              ﻓﺮﻳﻖ اﻟﻌﻤﻞ
            </a>
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

  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container pb-5 pt-5">
        <div class="row justify-content-center text-center">
          <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card">
              <div class="card-header">
                <b>اﺗــﺼــﻞ ﺑــﻨــﺎ</b>
              </div>
              <div class="card-body">
                <form method="POST" action="send.php" class="form-signin" id="contactme">
                  <div id="response"></div>
                  <div class="form-row">
                    <div class="col">
                      <input name="fname" type="text" class="form-control" placeholder="الاسم الاول" required />
                    </div>
                    <div class="col">
                      <input name="lname" type="text" class="form-control" placeholder="الاسم الاخير" required>
                    </div>
                  </div>

                  <div class="form-group pt-3">
                    <input name="email" type="email" class="form-control" placeholder="البريد الالكتروني" required>
                  </div>

                  <div class="form-group">
                    <input name="subject" placeholder="عنوان الرسالة" type="text" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <textarea required wrap="soft" placeholder="نص الرسالة" class="form-control" name="message" id="message" rows="5"></textarea>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox text-center">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                      <label class="custom-control-label" for="customCheck1">
                        اﻧﺎ ﻟﺴﺖ ﺭﻭﺑﻮﺕ
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">اﺭﺳﺎﻝ اﻟﺮﺳﺎﻟﺔ</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once "./components/footer.php"; ?>
  <?php include_once './js.php'; ?>
  <script src="ajax.js"></script>
  </div>
</body>

</html>
