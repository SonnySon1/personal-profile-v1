<?php

// lakukan sebuiah query untuk menampilkan data
$query_portfolio = mysqli_query($connect, "SELECT * FROM portfolio ");

?>

<section class="site-section block__62272" id="portfolio-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 position-relative">
            <h2 class="section-title text-center mb-5">My Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <?php  
            // lakukan sebuah fech data dengan cara melakukan sebuah perulangan untuk mengambil data dari array menggunakan foreach
                foreach($query_portfolio as $dataPortfolio ) : 
          ?>
          <div class="col-md-6 col-lg-4 item">
            <a href="../images/<?= $dataPortfolio['foto']; ?>" class="item-wrap fancybox mb-4">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="../images/<?= $dataPortfolio['foto']; ?>">
            </a>
            <h5 style="text-align: justify;"><b><?= $dataPortfolio['project']; ?></b></h5>
              <p style="text-align: justify;" class=" text-black"><?= $dataPortfolio['subjudul']; ?><a href="pages/detail_Pf.php?laskjd=<?= $dataPortfolio['id_portfolio']; ?>">Read More</a></p>
          </div>
          <?php endforeach; ?>x
        </div>
      </div>
</section>