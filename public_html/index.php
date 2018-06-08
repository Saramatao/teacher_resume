<?php

  // Include Dataset
  require_once (__DIR__.'/data.php');

?>

<!DOCTYPE html>
<html lang="th">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Biography of Phanarut Srichetta">
    <meta name="author" content="Assist. Prof. Phanarut Srichetta ผศ.พนารัตน์ ศรีเชษฐา">

    <title>Phanarut Srichetta | พนารัตน์ ศรีเชษฐา</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#biography">Biography</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#research">Research</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#hobbies">Hobbies</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <!-- HEAD CONTENT -->
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h2 class="mb-0">
            Assist. Prof. Phanarut Srichetta
          </h2>
          <h3 class="text-primary" style="">(ผศ.พนารัตน์ ศรีเชษฐา) </h3>
          <div class="subheading mb-5">
            Government Teacher of <a href="http://www.udru.ac.th/">Udon Thani Rajabhat University</a> <br>
            Faculty of Science Department of Computer Science and Information Technology ·
            
            <div>
              Office Tel. <strong>(+66) (0)42 211-040 Ext.1205</strong>
            </div>
            <div>
              <a href="mailto:phanarut@udru.ac.th">phanarut@udru.ac.th</a> / 
              <a href="mailto:phanarut_sct@yahoo.com">phanarut_sct@yahoo.com</a> / 
              <a href="mailto:g4838064@student.mahidol.ac.th">g4838064@student.mahidol.ac.th</a>
            </div>
          </div>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="https://web.facebook.com/phanarut.sct">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <!-- BIOGRAPHY -->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="biography">
        <div class="my-auto">
          <h2 class="mb-5">Biography</h2>

          <h3 class="mb-0">Institutions Attended :</h3>
          <?php foreach ($institutions as $year => $text): ?>
            <div class="resume-item d-flex flex-column flex-md-row">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3"><?= $text ?></div>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $year ?></span>
              </div>
            </div>
          <?php endforeach; ?>

          <h3 class="mb-0">Scholarship :</h3>
          <?php foreach ($scholarships as $year => $text): ?>
            <div class="resume-item d-flex flex-column flex-md-row">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3"><?= $text ?></div>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $year ?></span>
              </div>
            </div>
          <?php endforeach; ?>

          <h3 class="mb-0">Position & Office :</h3>
          <?php foreach ($positions as $year => $text): ?>
            <div class="resume-item d-flex flex-column flex-md-row">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3"><?= $text ?></div>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $year ?></span>
              </div>
            </div>
          <?php endforeach; ?>

          <h3 class="mb-0">Training Courses :</h3>
          <?php foreach ($training as $year => $text): ?>
            <div class="resume-item d-flex flex-column flex-md-row">
              <div class="resume-content mr-auto">
                <div class="subheading mb-3"><?= $text ?></div>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary"><?= $year ?></span>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </section>

      <!-- RESEARCH -->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="research">
        <div class="my-auto">
          <h2 class="mb-5">Research</h2>

          <h3 class="mb-0">Research Areas :</h3>
          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <div class="mb-3">
                <span style="margin-left: 5%;"></span>Software Engineering - Requirements Engineering, Formal Specification (Z), Software Reuse
                Data Mining - Association Rules Mining, Classification, Clustering, Link Mining, Social Network Analysis
                Decision Support System - Multi-Cretiria Decision Making and Analysis (AHP, Fuzzy AHP, TOPSIS, Fuzzy TOPSIS)
                Recommender System - Collaborative Filtering
              </div>
            </div>
          </div>

          <h3 class="mb-0" style="margin-bottom: 10px !important;">National/International Publications :</h3>
          <?php foreach ($public as $year => $arr): ?>
            <h4 class="mb-0">in <?= $year ?></h4>
            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">
                  <?php foreach ($arr as $value): ?>
                  <div class="subheading mb-3">
                    <span style="margin-left: 5%;"></span><?= $value ?>    
                  </div>
                  <?php endforeach; ?>
                </div>
            </div>
          <?php endforeach; ?>

          <h3 class="mb-0">Project & Thesis :</h3>
          <?php foreach ($thesis as $value): ?>
            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">

                  <div class="subheading mb-3">
                    <span style="margin-left: 5%;"></span><?= $value ?>    
                  </div>
                
                </div>
            </div>
          <?php endforeach; ?>

         <h3 class="mb-0">Research Grants :</h3>
            <ul class="fa-ul mb-0">
              <?php foreach ($researchGrant as $value): ?>
                <li><i class="fa-li fa fa-check"></i>
                  <?= $value; ?></li>
              <?php endforeach; ?>    
            </ul>
          </div>

        </div>
      </section>

      <!-- HOBBIES -->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="hobbies">
        <div class="my-auto">
          <h2 class="mb-5">Hobbies</h2>

          <div class="row">
            <?php foreach ($hobbies as $img => $caption): ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/<?= $img ?>" alt="Card image cap">
                <div class="card-body">
                  <p><?= $caption ?></p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>    
          </div>

        </div>
      </section>

    </div>
    <!-- / Container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
