<?php

require'connectAndFunction/massage.php';
require'waApi/send.php';


// cek apakah tombol sendMassage sudah di tekan taubelum
  if (isset($_POST['sendMassage']) ) {

      $message = pesan($_POST);

  }

  if (isset($_POST['sendMassage']) ) {

      $mess   = pes($_POST);

  }

// lakukan sebuiah query untuk menampilkan data
$query_map = mysqli_query($connect, "SELECT * FROM map ");

// lakukan fech data ke query map
  $data_map = mysqli_fetch_assoc($query_map);
?>
<section class="site-section bg-secondary">
      <div class="container">
      <div class="map">
        <?= $data_map['map']; ?>
        <a href="<?= $data_map['location_link'] ?>" target="_blank" style="font-weight: bold;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg><?=  $data_map['location']; ?>
        </a>
        <br>
        <a href="<?= $data_map['phone_link'] ?>" target="_blank" style="font-weight: bold;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg> <?= $data_map['phone_number']; ?>
        </a>
      </div>
        <div class="row " style="margin-top: 100px;" id="contact-section">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center text-white mb-5">Contact Me</h2>
          </div>
        </div>
        <form action="" method="post"  class="form">
          <div class="row mb-4">
            <div class="form-group col-6">
              <input name="namaDepan" type="text" class="form-control alert alert-danger" placeholder="First name">
            </div>
            <div class="form-group col-6">
              <input name="namaBelakang" type="text" class="form-control" placeholder="Full name (optional)">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input name="email" type="email" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input name="subject" type="text" class="form-control" placeholder="Subject of the message">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input name="sendMassage" type="submit" class="btn btn-dark" value="Send Message">
            </div>
          </div>
          
        </form>
      </div>
    </section>