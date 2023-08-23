<div class="site-section bg-light" id="education-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Education</h2>
          </div>
    
          <?php
            // lakukan sebuiah query untuk menampilkan data
              $query_education = mysqli_query($connect, "SELECT * FROM education");
    
                foreach($query_education as $data_education) :
            ?>
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-school"></span></div>
              <div class="service-about">
                <h3><?= $data_education['education']; ?></h3>
                <p style="text-align: justify;"><?= $data_education['deskripsi']; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
    
        </div>
      </div>
    </div>