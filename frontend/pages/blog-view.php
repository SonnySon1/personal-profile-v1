<?php
// membutuhkan file koneksi untuk melakukan sebuah query
  require'../connectAndFunction/connection.php';

// get id dari url
  $id = $_GET['alksdj'];

// lakukan sebuiah query untuk menampilkan data
$query_blog_view = mysqli_query($connect, "SELECT * FROM blog WHERE id_blog = '$id'");

// lakukan fech data dari query blog
  $data_blog_view = mysqli_fetch_assoc($query_blog_view);


?>
<!doctype html>
<html lang="en">

<head>
  <title>Soni Sudrajat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/style.css">

  <style>
      .nav-blog-sty{
          bottom: 20px;
          height: 60px;
          position: relative;
          bottom: 20px;
      }
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header bg-primary nav-blog-sty site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">

          <div class="">
            <nav class="site-navigation position-relative text-right"  role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <div class=" text-center mx-5">
                  <h1 class="m-0 site-logo"><a href="../index.php#blog-section" style="color: white; position:relative; bottom:15px;">Home</a></h1>
                </div>
              </ul>
            </nav>
            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
          </div>

        </div>
      </div>
    </header>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">

            <p class="mb-5" style="font-size: 30px;" ><b><?= $data_blog_view['blog']; ?></b></p>

            <div class="row mb-5">
              <div class="col-lg-12">
                <figure><img src="../../images/<?= $data_blog_view['foto']; ?>" alt="Image" class="img-fluid">
                  <figcaption>This is an image caption</figcaption>
                </figure>
              </div>
            </div>
            <blockquote>
              <p style="text-indent: 45px; text-align:justify;"><?= $data_blog_view['deskripsi']; ?></p>
            </blockquote>
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form  bg-primary">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <div class="form-control bg-primary">
                    <b style="position:relative; margin-left:110px;">Blog</b>
                  </div>
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <li><a  href="#"><div style="color:black; font-weight :bold;">Penulis</div><span><?= $data_blog_view['penulis']; ?></span></a></li>
                <li><a  href="#"><div style="color:black; font-weight :bold;">Tanggal Post</div> <span><?= $data_blog_view['tanggal_post']; ?></span></a></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include"../includes/footer.php" ?>