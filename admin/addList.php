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
        if (isset($_POST['submit']) && isset($_POST['header']))
        {
            $header = $_POST['header'];
            $result = User::setHeader($header);
        }

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
            <div class="col-xl-8 mt-5 mb-2">
                <div class="card custom-card">
                    <form method="POST">
                        <div class="card-header"><div class="card-title">Header</div><p class="<?= $result ? 'text-danger' : 'text-success'; ?>"><?= $result ?></p></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input class="form-control" type="text" name="header" placeholder="Enter Header" />
                            </div>
                            <div class="col-md-12 mb-3"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
                            <?php
                                $header = Operations::getHeader();
                                foreach ($header as $head) {
                            ?>
                            <p><?= $head['title']; ?><a class="text-danger" href="deleteHeader.php?delete_id=<?= $head['id']; ?>"><i class="bi bi-x-lg"></i></a></p>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card custom-card">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="card-header"><div class="card-title">Thirumandhiram Sigitchai</div><p class="<?= $success ? 'text-danger' : 'text-success'; ?>"><?= $success ?></p></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input class="form-control" type="file" name="img" required>
                            </div>
                            <select class="js-example-templating js-persons form-control" name="category" required>
                                <option>Select Your Header Title</option>
                                <?php
                                    $header = Operations::getHeader();
                                    foreach ($header as $head) {
                                ?>
                                <option value="<?= $head['title']; ?>"><?= $head['title']; ?></option>
                                <?php } ?>
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