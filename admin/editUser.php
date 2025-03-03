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
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['allows']))
        {
            $user = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $pass = $_POST['password'];
            $allow = $_POST['allows'];
            $result = User::updateUser($user, $email, $phone, $pass, $allow);
        }
    }

    $user = Operations::getUser();
    
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
            <div class="col-xl-8 mt-4">
                <div class="card custom-card">
                    <form method="POST">
                        <div class="card-header">
                            <div class="card-title">Edit User Data</div>
                            <p class="<?= $result ? 'text-danger' : 'text-success'; ?>"><?= $result ?></p>
                        </div>
                        <div class="card-body">
                            <div class="mt-4">
                                <input type="text" name="username" class="form-control" id="input-rounded1" placeholder="Username" value="<?= $user['username']; ?>">
                            </div>
                            <div class="mt-4">
                                <input type="email" name="email" class="form-control" id="input-rounded1" placeholder="Email" value="<?= $user['email']; ?>">
                            </div>
                            <div class="mt-4">
                                <input type="phone" name="phone" class="form-control" id="input-rounded1" placeholder="Phone" value="<?= $user['phone']; ?>">
                            </div>
                            <div class="mt-4">
                                <input type="text" name="password" class="form-control" id="input-rounded1" placeholder="Password" value="<?= $user['password']; ?>">
                            </div>
                            <div class="mt-4">
                                <select name="allows" class="form-select">
                                    <option value="<?= $user['permissions']; ?>">Select User Permission</option>
                                    <option value="team">Team</option>
                                    <option value="first">Receptionist</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-4"><button type="submit" name="submit" class="btn btn-primary">Update</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <?php include "temp/footer.php"; ?>

    </body>
</html>