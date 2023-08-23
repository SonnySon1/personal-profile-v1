<?php  
// membutuhkan file connect.php untuk mengecek dari mysqli_error dan muntuk menjalankan function login
    require'connectAndFunction/loginAndLogout/login_function.php';

// cek apakah tombol login sudah di tekan atau belum
    if (isset($_POST['login'])) {
        
        // jalankan function login dan cek nilai dari affected rows
            $loginmess = login($_POST); 

    }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Nice Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    

    <style>
        body{
            background-color: #e9ecef;
        }
        .form-login{
            width: 370px;
            margin-top: 200px;
        }
    </style>
</head>

<body>
    
        <!-- ============================================================== -->
        <div class="container form-login">
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Login</h4>
                            <h5 class="card-subtitle"> Login Sebagai Admin</h5>
                            <form class="form-horizontal mt-6" method="post" action="">
                                <div class="form-group">
                                    <input type="text" name="username" id="example-username" name="example-username" class="form-control"
                                        placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                                <?php if(isset($loginmess)) : ?>
                                    <div>
                                        <p style="color: red; font-style:italic;"><?= $message; ?></p>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <button type="submit" name="login" class="btn btn-dark p-7">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>