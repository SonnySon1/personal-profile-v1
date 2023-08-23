<?php  
// membutuhkan file connect.php untuk melakukan sebuah query  
    require"connectAndFunction/query.php";


// lakukan sebuiah query untuk menampilkan data
  $query = mysqli_query($connect, "SELECT * FROM about ");
  $query_hiro = mysqli_query($connect, "SELECT * FROM hiro ");

// ambil object query atau fech data'
  $data = mysqli_fetch_assoc($query);
  $data_hiro = mysqli_fetch_assoc($query_hiro);

?>
<div class="site-blocks-cover overlay bg-light" id="home-section">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="text-white"><?= $data['nama']; ?></h1>
            <p class="text-secondary"><?= $data['pekerjaan']; ?></p>
            <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- sampul -->
  <div class="bg-image">
    <img src="../images/<?= $data_hiro['foto']; ?>" width="100%"  alt="Image" class="img-face">
  </div>

</div>