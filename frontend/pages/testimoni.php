<section class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white">What Client Are Sayings</h2>
          </div>  
        </div>



        <div class="owl-carousel slide-one-item">
        <?php

            // lakukan sebuiah query untuk menampilkan data
              $query_testimoni = mysqli_query($connect, "SELECT * FROM testimoni");

            // ambil fech object dari query testimoni menggunakan looping foreach
              foreach ($query_testimoni as $data_testimoni) :
        ?>
          <div class="slide">
            <blockquote>
              <img src="../images/<?= $data_testimoni['image']; ?>" class="image-testimoni" style="width: 90px; height:90px;" alt="image testimoni avatar">
              <p><?= $data_testimoni['description']; ?></p>
              <p><cite>&mdash; <?= $data_testimoni['name_client']; ?></cite></p>
            </blockquote>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
