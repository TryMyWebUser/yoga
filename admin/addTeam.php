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
    if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['role']) && isset($_FILES['img']))
    {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $img = $_FILES['img'];
        $result = User::setTeamMembers($name, $role, $img);
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
                        <div class="card-header">
                            <div class="card-title">Add Team Member</div>
                            <p class="<?= $result ? 'text-danger' : 'text-success'; ?>">
                                <?= $result ?>
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="mt-4">
                                <input type="text" name="name" class="form-control" placeholder="Team Member Name" required>
                            </div>
                            <div class="mt-4 mb-3">
                                <input type="text" name="role" class="form-control" placeholder="Team Member Position" required>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="file" name="img" required accept="image/png, image/jpeg, image/jpg">
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