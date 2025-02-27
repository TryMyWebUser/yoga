<?php

include "libs/load.php";

// Start a session
Session::start();

// Redirect if the user is already logged in
if (Session::get('Login_user'))
{
    header('Location: index.php');
    exit;
}

$error = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if both username and password keys exist in $_POST
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $user = $_POST['username'] ?? "";
        $pass = $_POST['password'] ?? "";

		// Call User::login
		$error = User::login($user, $pass);
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
        <title>Thirumandhiram - Login Page</title>
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
        <div class="container">
            <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                    <div class="card custom-card my-4">
                        <form action="" method="POST">
                            <div class="card-body p-5">
                                <p class="h5 mb-2 text-center">Sign In</p>
                                <p class="mb-4 text-muted op-7 fw-normal text-center">Welcome back login your account!</p>
                                <p class="<?= $error ? 'text-danger' : 'text-success' ?>"> <?= $error ?> </p>
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="signin-username" class="form-label text-default">Username or Email<sup class="fs-12 text-danger">*</sup></label>
                                        <input type="text" name="username" class="form-control" id="signin-username" placeholder="Username or Email" required/>
                                    </div>
                                    <div class="col-xl-12 mb-2">
                                        <label for="signin-password" class="form-label text-default d-block">
                                            Password<sup class="fs-12 text-danger">*</sup>
                                        </label>
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control create-password-input" id="signin-password" placeholder="Password" required/>
                                            <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password',this)" id="button-addon2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.5 4.5 0 0 1 7.965 13a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242s1.46-.118 2.152-.242a27 27 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434m6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid mt-4"><button type="submit" name="submit" class="btn btn-primary">Sign In</button></div>
                                <div class="text-center">
                                    <p class="text-muted mt-3 mb-0">Dont have an account? <a href="register.php" class="text-primary">Sign Up</a></p>
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