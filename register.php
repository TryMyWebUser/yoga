<?php

include "libs/load.php";

// Start a session
Session::start();

// Redirect if the user is already logged in
if (Session::get('Loggedin'))
{
    header('Location: index.php');
    exit;
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        // Call the register method
        $error = User::register($name, $password, $email, $phone);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Title -->
        <title>Thirumandhiram - Register Page</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/images/home1/favicon.png" type="image/x-icon">
        
        <!-- Start::custom-styles -->
        <!-- Main Theme Js -->
        <script src="admin/assets/js/authentication-main.js"></script>
        <!-- Bootstrap Css -->
        <link id="style" href="admin/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Style Css -->
        <link href="admin/assets/css/styles.css" rel="stylesheet" />
        <!-- Icons Css -->
        <link href="admin/assets/css/icons.css" rel="stylesheet" />
        <!-- End::custom-styles -->
    </head>
    <body class="authentication-background">
        <div class="container-lg">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="card custom-card my-4">
                        <form action="" method="POST">
                            <div class="card-body p-5">
                                <p class="h5 mb-2 text-center">Sign Up</p>
                                <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome! Please creating your account.</p>
                                <p class="<?= $error ? 'text-danger' : 'text-success' ?>"> <?= $error ?> </p>
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="signup-firstname" class="form-label text-default">Full Name<sup class="fs-12 text-danger">*</sup></label>
                                        <input type="text" name="username" class="form-control" id="signup-firstname" placeholder="Full Name" required/>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="signup-email" class="form-label text-default">Email Address<sup class="fs-12 text-danger">*</sup></label>
                                        <input type="email" name="email" class="form-control" id="signup-email" placeholder="Email Address" required/>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="signup-phone" class="form-label text-default">Phone Number<sup class="fs-12 text-danger">*</sup></label>
                                        <input type="number" name="phone" class="form-control" id="signup-phone" placeholder="Phone Number" required/>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="signup-password" class="form-label text-default">Password<sup class="fs-12 text-danger">*</sup></label>
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control create-password-input" id="signup-password" placeholder="Password" required/>
                                            <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signup-password',this)" id="button-addon2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.5 4.5 0 0 1 7.965 13a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242s1.46-.118 2.152-.242a27 27 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434m6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-12">
                                        <label for="signup-confirmpassword" class="form-label text-default">Confirm Password<sup class="fs-12 text-danger">*</sup></label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control create-password-input" id="signup-confirmpassword" placeholder="confirm password" />
                                            <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signup-confirmpassword',this)" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></a>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="d-grid mt-4"><button class="btn btn-primary" type="submit" name="submit">Create Account</button></div>
                                <div class="text-center">
                                    <p class="text-muted mt-3 mb-0">Already have an account? <a href="login.php" class="text-primary">Sign In</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start::custom-scripts -->
        <!-- Bootstrap JS -->
        <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- End::custom-scripts -->
        <!-- Show Password JS -->
        <script src="admin/assets/js/show-password.js"></script>
    </body>
</html>