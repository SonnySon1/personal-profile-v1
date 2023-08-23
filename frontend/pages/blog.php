<?php

// lakukan sebuiah query untuk menampilkan data
$query_blog = mysqli_query($connect, "SELECT * FROM blog limit 0,3 ");

?>
<section class="site-section bg-light" id="blog-section">
      <div class="container">
        <div class="row">

          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Blog</h2>
          </div>

          <?php  

            // lakukan pengulangan untuk mengulang blog pada database
                foreach($query_blog as $data_blog) : 
                  
          ?>

          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">
              <a href="pages/blog-view.php?alksdj=<?= $data_blog['id_blog']; ?>"><img src="../images/<?= $data_blog['foto']; ?>" alt="Image" class="img-fluid"></a>
              <div class="p-4 bg-white">
                <h3><a href="pages/blog-view.php?alksdj=<?= $data_blog['id_blog']; ?>"><?= $data_blog['blog']; ?></a></h3>
                <span class="date"><?= $data_blog['tanggal_post']; ?></span>
                <p><?= $data_blog['subjudul']; ?></p>
                <p class="more"><a href="pages/blog-view.php?alksdj=<?= $data_blog['id_blog']; ?>">Read More</a></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="text-align:center;">
          <a href="pages/blog-all.php" style="text-align: center; padding:10px; background:red; margin:0 auto; border-radius: 20px; width:100px; position:relative; top:20px;" class="bg-primary text-white"><b>View more </b></a>
        </div>
      </div>
    </section>