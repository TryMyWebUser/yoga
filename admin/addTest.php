<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('Loggedin'))
    {
        header("Location: index.php");
        exit;
    }

    $result = "";
    $success = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['submit_list']) && isset($_FILES['img']) && isset($_POST['category']) && isset($_POST['title']) && isset($_POST['dec']))
        {
            $title = $_POST['title'];
            $dec = $_POST['dec'];
            $img = $_FILES['img'];
            $cate = $_POST['category'];
            $success = User::setList($img, $cate, $title, $dec);
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
                    <form method="POST" enctype="multipart/form-data">
                        <div class="card-header"><div class="card-title">Testimonials</div><p class="<?= $success ? 'text-danger' : 'text-success'; ?>"><?= $success ?></p></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input class="form-control" type="file" name="img" required>
                            </div>
                            <select class="js-example-templating js-persons form-control" name="category" required>
                                <option>Select Your Page</option>
                                <option value="about">About Us</option>
                                <option value="thiru">Thirumandhiram Sigitchai</option>
                                <option value="shimaya">Shimaya</option>
                            </select>
                            <div class="mt-4">
                                <input type="text" name="title" class="form-control" id="input-rounded1" placeholder="Title" required>
                            </div>
                            <div class="mt-4 mb-3">
                                <textarea class="form-control" name="dec" placeholder="Description" required></textarea>
                            </div>
                            <div class="col-md-12"><button type="submit" name="submit_list" class="btn btn-primary">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php include "temp/footer.php"; ?>

    </body>
</html>