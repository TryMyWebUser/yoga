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

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (isset($_POST['submit']) && isset($_FILES['vid']) && isset($_POST['uvid']))
        {
            $vid = $_FILES['vid'] ?? '';
            $uvid = $_POST['uvid'] ?? '';
            // Call the setVideos function
            $result = User::setVideos($vid, $uvid);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Thirumandhiram - Dashboard</title>
        
        <?php include "temp/head.php"; ?>

    </head>
    <body>
        
        <?php include "temp/header.php"; ?>
        <?php include "temp/sideheader.php"; ?>
        
        <div class="row">
            <div class="col-xl-8 mt-5 mb-2">
                <div class="card custom-card">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-header"><div class="card-title">Video Upload</div><p class="<?= $result ? 'text-danger' : 'text-success'; ?>"><?= $result ?></p></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input class="form-control" type="file" name="vid" accept="video/*" required>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" name="uvid" placeholder="YouTube Iframe Link">
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