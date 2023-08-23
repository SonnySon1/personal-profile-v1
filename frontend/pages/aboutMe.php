<?php

// lakukan sebuiah query untuk menampilkan data
$query_skill = mysqli_query($connect, "SELECT * FROM skill ");
$query_about = query("SELECT * FROM about ")[0];

?>
<div class="site-section" id="about-section">
  <div class="container">
    <div class="row ">
      <div class="col-12 mb-4 position-relative">
        <h2 class="section-title">About Me</h2>
      </div>
      <div class="col-lg-6 order-2 order-lg-1">
        <img class="img-fluid mb-4" src="../images/<?= $query_about['foto']; ?>" width="570" alt="Image">
        <p style="text-align: justify;"><?= $data['about']; ?></p>
      </div>
      <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
      <?php   
        // ambil object query atau fech data menggunakan perulangan
          foreach($query_skill as $data_skill) :
      ?>
        <div class="mb-5">
          <strong class="text-black"><?= $data_skill['skill']; ?></strong>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: <?= $data_skill['persen']; ?>%;">
              <span><?= $data_skill['persen']; ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>