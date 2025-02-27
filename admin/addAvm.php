<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('Loggedin'))
    {
        header("Location: index.php");
        exit;
    }

    $success = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['submit']) && isset($_POST['category']) && isset($_POST['at']) && isset($_POST['ad']) && isset($_POST['vt']) && isset($_POST['vd']) && isset($_POST['mt']) && isset($_POST['md']))
        {
            $cate = $_POST['category'];
            $AT = $_POST['at'];
            $AD = $_POST['ad'];
            $VT = $_POST['vt'];
            $VD = $_POST['vd'];
            $MT = $_POST['mt'];
            $MD = $_POST['md'];
            $success = User::setAVM($cate, $AT, $AD, $VT, $VD, $MT, $MD);
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
        <title>Thirumandhiram - Dashboard</title>
        
        <?php include "temp/head.php"; ?>

    </head>
    <body>
        
        <?php include "temp/header.php"; ?>
        <?php include "temp/sideheader.php"; ?>
        
        <div class="row">
            <div class="col-xl-8 mt-5">
                <div class="card custom-card">
                    <form method="POST">
                        <div class="card-header"><div class="card-title">About, Vision, Mission Uploads</div><p class="<?= $success ? 'text-danger' : 'text-success'; ?>"><?= $success ?></p></div>
                        <div class="card-body">
                            <select class="js-example-templating js-persons form-control" name="category" required>
                                <option>Select Your Category Page</option>
                                <option value="home">Home</option>
                                <option value="about">About</option>
                                <option value="thiru">Thirumandhiram - Sigichalaya</option>
                                <option value="shimaya">Shimaya - Yoga Exclusive</option>
                                <option value="piraiyazh">Piraiyazh - Earth Conscious Store</option>
                                <option value="gramiya">Gramiya Dhaniyam - Arunachala Organics</option>
                            </select>
                            <div class="mt-4">
                                <input type="text" name="at" class="form-control" placeholder="About Title" required>
                            </div>
                            <div class="mt-4 mb-3">
                                <textarea class="form-control" name="ad" placeholder="About Description" required></textarea>
                            </div>
                            <div class="mt-4">
                                <input type="text" name="vt" class="form-control" placeholder="Vision Title" required>
                            </div>
                            <div class="mt-4 mb-3">
                                <textarea class="form-control" name="vd" placeholder="Vision Description" required></textarea>
                            </div>
                            <div class="mt-4">
                                <input type="text" name="mt" class="form-control" placeholder="Mission Title" required>
                            </div>
                            <div class="mt-4 mb-3">
                                <textarea class="form-control" name="md" placeholder="Mission Description" required></textarea>
                            </div>
                            <div class="col-md-12"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php include "temp/footer.php"; ?>

    </body>
</html>