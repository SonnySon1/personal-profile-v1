<?php
// membutuhkan file koneksi untuk melakukan sebuah query
  require"connectAndFunction/connection.php";

// lakukan sebuiah query untuk menampilkan data
    $query_cv = mysqli_query($connect, "SELECT * FROM cv ");
    $data_cv = mysqli_fetch_assoc($query_cv);



?>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#biography-section" class="nav-link">Biography</a></li>
                <li><a href="#education-section" class="nav-link">Education</a></li>
                <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
                <li><a href="#experience-section" class="nav-link">Experience</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="<?= $data_cv['link_cv']; ?>" target="_blank" class="nav-link bg-primary" style="border-radius: 50px;">Download CV</a></li>
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>