<?php
// membutuhkan file koneksi untuk melakukan sebuah query
  require'../connectAndFunction/connection.php';
  require'../connectAndFunction/query.php';
  require'../connectAndFunction/pagination.php';


// lakukan sebuiah query untuk menampilkan data
  $query_blog_view_all = query("SELECT * FROM blog LIMIT $dataAwal, $dataAkhir");


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
          /* width: 1120px; */
          position: relative;
          bottom: 20px;
          height: 60px;
          background-color: black;
      }
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-4">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header nav-blog-sty  site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">

          <div class="">
            <nav class="site-navigation position-relative text-right"  role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <div class=" text-center mx-5">
                  <h1 class="site-logo"><a href="../index.php#blog-section" style="color: white; bottom:20px; position:relative;">Home</a></h1>
                </div>
              </ul>
            </nav>
            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
          </div>

        </div>
      </div>
    </header>
    <section class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">

          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog</h2>
          </div>

          <?php  

            // lakukan pengulangan untuk mengulang blog pada database
                foreach($query_blog_view_all as $data_blog_all) : 

                
                  
          ?>

          <div class="col-md-6 mb-5 mt-4 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="blog-view.php?alksdj=<?= $data_blog_all['id_blog']; ?>"><img src="../../images/<?= $data_blog_all['foto']; ?>" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="blog-view.php?alksdj=<?= $data_blog_all['id_blog']; ?>"><?= $data_blog_all['blog']; ?></a></h3>
                <span class="date"><?= $data_blog_all['tanggal_post']; ?></span>
                <p><?= $data_blog_all['subjudul']; ?></p>
                <p class="more"><a href="blog-view.php?alksdj=<?= $data_blog_all['id_blog']; ?>">Read More</a></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
        <div style="text-align:center;">

        <!-- cek apakah halman aktif > 1 jika lebih besar dari 1 maka tampilkan lebihkecil  -->
        <?php if ($halamanAkf > 1) : ?>
        <a href="?page=<?= $halamanAkf - 1 ?>" style="text-align: center; padding:10px;  margin:0 auto; position:relative; top:20px;" class="bg-primary text-white"><b>&larr;</b></a>
        <?php endif; ?>
        <!-- looping semua halaman menggunakan  pengulangan for untuk mengulang semua jumlah halaman -->
          <?php for($i = 1; $i <= $jmlHalaman; $i++) : ?>
              <?php 
              // cek apakah halaman halaman yang sedang aktif itu sama dengan halaman aktif
                if ($i == $halamanAkf) : ?>    
                <!-- jika sama maka ubah warna background menjadi dark untuk membedakan mana halaman aktif mana tidak -->
                  <a href="?page=<?= $i; ?>" style="text-align: center; padding:10px;  margin:0 auto; position:relative; top:20px;" class="bg-dark text-white"><b><?= $i ?></b></a>
                
                <!-- tapi jika halaman tidak sedang aktif maka tampilkan bahwa bacground menggunakan warna bg primary unruk menandai bahwa halaman itu tidak sedang aktif -->
                <?php else: ?>
                  <a href="?page=<?= $i; ?>" style="text-align: center; padding:10px;  margin:0 auto; position:relative; top:20px;" class="bg-primary text-white"><b><?= $i ?></b></a>
                  <?php endif; ?>
          <?php endfor; ?>
          
        <!-- cek apakah halaman yang aktif adalah lebih kecil dari jumlah halaman  -->
          <?php if ($halamanAkf < $jmlHalaman ) : ?>
            <!-- jika lebih kecil maka tampilkan link brikut jika selain dari itu atau lebih besar dari jml halaman maka jangan di tampilkan link berikut ini -->
               <a href="?page=<?= $halamanAkf + 1 ?>" style="text-align: center; padding:10px;  margin:0 auto; position:relative; top:20px;" class="bg-primary text-white"><b>&rarr;</b></a>
          <?php endif; ?>
         </div>
    </section>
    
<?php include"../includes/footer.php" ?>