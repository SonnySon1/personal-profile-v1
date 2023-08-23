<footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">About</h3>
            <p>Saya adalah seorang web developer yang memiliki semangat dan keahlian dalam menciptakan solusi digital yang inovatif</p>
          </div>
          <div class="col-md-5 mx-auto">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="footer-title">All Section</h3>
                <ul class="list-unstyled">
                  <li><a href="#about-section">About</a></li>
                  <li><a href="#biography-section">Biography</a></li>
                  <li><a href="#education-section">Education</a></li>
                  <li><a href="#portfolio-section">portfolio</a></li>
                  <li><a href="#experience-section">Experience</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="footer-title">Follow Me</h3>
            <a href="#" class="social-circle p-2"><span class="icon-twitter"></span></a>
            <a href="#" class="social-circle p-2"><span class="icon-facebook"></span></a>
            <a href="#" class="social-circle p-2"><span class="icon-instagram"></span></a>
            <a href="#" class="social-circle p-2"><span class="icon-linkedin"></span></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p>Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | Webshite created by <i
              class="icon-heart-o" aria-hidden="true"></i> by <a href="#">Soni Sudrajat</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            
          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
        $(document).ready(function(){
            <?php 
                //pengecekan session
                if (isset($_SESSION['mess'])) {
                    
                 
            ?>
            swal({
                title: '<?= $_SESSION['mess']; ?>',
                text: '<?= $_SESSION['text']; ?>',
                icon: 'success',
                button: 'oke',
            });

            <?php
            // unset
                unset($_SESSION['mess']);
            }
            ?>
        });
    </script>
  <script>
        $(document).ready(function(){
            <?php 
                //pengecekan session
                if (isset($_SESSION['messfall'])) {
                    
                 
            ?>
            swal({
                title: '<?= $_SESSION['messfall']; ?>',
                text: '<?= $_SESSION['textf']; ?>',
                icon: 'error',
                button: 'oke',
            });

            <?php
            // unset
                unset($_SESSION['messfall']);
            }
            ?>
        });
    </script>

  
  </body>
</html>