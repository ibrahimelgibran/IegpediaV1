<?php
	include 'koneksi.php';

    if(isset($_SESSION['alert_msg'])) {
        $alert_msg = $_SESSION['alert_msg'];
        echo "<script>alert('$alert_msg');</script>";
        unset($_SESSION['alert_msg']);
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Ibrahim El Gibran">
        <link rel="icon" href="assets/svg/ieg.png">

        <title>Iegpedia - Register</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-info">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="post" action="proses-register.php"
                                    onsubmit="return confirm('Apakah data anda sudah benar?');">
                                    <div class="alert alert-danger <?php if(empty($alert_msg)) echo 'd-none'; ?>"
                                        role="alert">
                                        <?php if(!empty($alert_msg)) echo $alert_msg; ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleFirstName" placeholder="First Name" name="firstname"
                                                required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleLastName" placeholder="Last Name" name="lastname" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Email Address" name="email" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password"
                                                required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password"
                                                name="cpassword" required>

                                            <input type="hidden" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="" name="role" value="Student"
                                                required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    <a href="index.php" class="btn btn-google btn-user btn-block">
                                        Back To Home
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="#" onclick="myAlert()">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.php">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script>
        function myAlert() {
            alert("Coming Soon... Bro");
        }
        </script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

</html>