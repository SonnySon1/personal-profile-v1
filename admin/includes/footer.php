<!-- footer -->
            <footer class="footer text-center foot" style="position: relative; top:16px;">
                Copyright &copy 2023 <a href="#" style="font-weight: bold; ">SxiSyoni.com</a> All Rights Reserved
            </footer>
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
    <!-- cdn sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Fucntion js -->
    <script>
        $(document).ready(function(){
            <?php 
                //pengecekan session
                if (isset($_SESSION['editber'])) {
                    
                 
            ?>
            swal({
                title: '<?= $_SESSION['editber']; ?>',
                icon: 'success',
                button: 'oke',
});                                                                                                                                                                                                                                                                                                                                                                                                                                 

             <?php
            // unset
                unset($_SESSION['editber']);
            }
            ?>
        });
    </script>
    <script>
        $(document).ready(function(){
            <?php 
                //pengecekan session
                if (isset($_SESSION['tambahber'])) {
                    
                 
            ?>
            swal({
                title: '<?= $_SESSION['tambahber']; ?>',
                icon: 'success',
                button: 'oke',
            });

            <?php
            // unset
                unset($_SESSION['tambahber']);
            }
            ?>
        });
    </script>
    <script>
        $(document).ready(function(){
            <?php 
                //pengecekan session
                if (isset($_SESSION['editfall'])) {
                    
                 
            ?>
            swal({
                title: '<?= $_SESSION['editfall']; ?>',
                icon: 'error',
                button: 'oke',
            });

            <?php
            // unset
                unset($_SESSION['editfall']);
            }
            ?>
        });
    </script>
    <script>
        $(document).ready(function(){
            <?php 
                //pengecekan session
                if (isset($_SESSION['dell'])) {
                    
                 
            ?>
            swal({
                title: '<?= $_SESSION['dell']; ?>',
                icon: 'success',
                button: 'oke',
            });

            <?php
            // unset
                unset($_SESSION['dell']);
            }
            ?>
        });
    </script>
    
    <!-- <script>

        $(document).ready(function(){
            
            $('#dell').on('click', function(){
                var aherf = $('a:first').attr('href');
                    swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    }).then(()=>{
                        window.location.replace("../../proses/prosesTestimoni/prosesHapusTestimoni.php?iesaxd=<?= $dat['id_cln']; ?>");
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                    });
                })


            })


    </script> -->
    
    

</body>

</html>