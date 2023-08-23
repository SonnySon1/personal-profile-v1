<?php

// lakukan sebuiah query untuk menampilkan data
$query_biography = mysqli_query($connect, "SELECT * FROM biography ");

   // ambil object query atau fech data menggunakan fech assoc
   $data_biography = mysqli_fetch_assoc($query_biography);
     

?>
<div class="site-section" id="biography-section">
  <div class="container">
    <div class="row ">
      <div class="col-12 mb-4 position-relative">
        <h2 class="section-title">Biography</h2>
      </div>
      <div class="col-lg-6 order-2 order-lg-1">
        <img class="img-fluid mb-4" src="../images/<?= $data_biography['image']; ?>" height="6" alt="Image">
      </div>
      <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
        <div class="mb-5">
            <strong class="mt-2">Name: <?= $data_biography['name']; ?></strong>
          <div class="progress text-black"></div>    
            <strong class="mt-2">Email : <?= $data_biography['email']; ?></strong>
          <div class="progress text-black"></div>
            <strong class="mt-2">Address : <?= $data_biography['address']; ?></strong>
          <div class="progress text-black"></div>
            <strong class="mt-2">Phone : <?= $data_biography['phone']; ?></strong>
          <div class="progress text-black"></div>
            <strong class="mt-2">Title : <?= $data_biography['title']; ?></strong>
          <div class="progress text-black"></div>
            <strong class="mt-2">Description : <div style="text-align: justify;"><?= $data_biography['description']; ?></div></strong>
          <div class="progress text-black"></div>
        

        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>