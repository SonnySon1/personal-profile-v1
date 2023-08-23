<?php  

require'../connectAndFunction/connection.php';

// lakukan query berdasarkan id
  $id = $_GET['laskjd'];

// lakukan query berdasarkan id
  $query_portfolio_Detail = mysqli_query($connect, "SELECT * FROM portfolio WHERE id_portfolio = '$id'");

  // fechdata dari $query
   $data_Pfdetail = mysqli_fetch_assoc($query_portfolio_Detail);

?>
<!doctype html>
<html lang="en">

<head>
  <title>Credo &mdash; Website Template Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/style.css">

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

    <header class="site-navbar py-4 js-sticky-header bg-primary site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class=" text-center mx-5">
              <h1 class="m-0 site-logo"><a href="../index.php" class="text-white">Home</a></h1>
            </div>
          </div>
        </div>
      </div>

    </header>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content">
    
            <h1 class="lead mb-5"><b><?= $data_Pfdetail['project']; ?></b></h1>
            <div class="row mb-5">
              <div class="col-lg-12">
                <figure><img src="../../images/<?= $data_Pfdetail['foto']; ?>" alt="Image" class="img-fluid">
                  <figcaption>This is an image caption</figcaption>
                </figure>
              </div>
            </div>
            <p style="text-align: justify;"><?= $data_Pfdetail['description']; ?></p>
            
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <div class="categories">
                <h3>Profile Project</h3>
                <li><a href="#"><div style="color: black; font-weight:bold;">Nama Aplikasi</div><span><?= $data_Pfdetail['nama_aplikasi']; ?></span></a></li>
                <li><a href="#"><div style="color: black; font-weight:bold;">Jenis Aplikasi</div><span><?= $data_Pfdetail['jenis_aplikasi']; ?></span></a></li>
                <li><a href="#"><div style="color: black; font-weight:bold;">Developer</div><span><?= $data_Pfdetail['developer']; ?></span></a></li>
                <li><a href="#"><div style="color: black; font-weight:bold;">Tahun Pembuatan</div><span><?= $data_Pfdetail['thn_pembuatan']; ?></span></a></li>
                <li><a href="#"><div style="color: black; font-weight:bold;">Status</div><span><?= $data_Pfdetail['status']; ?></span></a></li>
                <li><a href="#"><div style="color: black; font-weight:bold;">Link Situs</div></a></li>
                <li><a href="<?= $data_Pfdetail['link_situs']; ?>" target="_blank"><span><?= $data_Pfdetail['link_situs']; ?></span></a></li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php include"../includes/footer.php" ?>