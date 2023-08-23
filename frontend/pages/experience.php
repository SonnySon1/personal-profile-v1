<div class="site-section bg-light" id="experience-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Experience</h2>
          </div>
    
          <?php
            // lakukan sebuiah query untuk menampilkan data
              $query_experience = mysqli_query($connect, "SELECT * FROM experience");
    

                foreach($query_experience as $data_experience) :
            ?>
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"></div>
              <div class="service-about">
                <h3><?= $data_experience['experience']; ?></h3>
                <p style="text-align:justify;"><?= $data_experience['description']; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
    
        </div>
      </div>
    </div>