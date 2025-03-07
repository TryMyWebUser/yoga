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
        if (isset($_POST['submit']) && isset($_POST['name']) && isset($_FILES['img']) && isset($_POST['price']) && isset($_POST['category']))
        {
            $name = $_POST['name'];
            $img = $_FILES['img'];
            $price = $_POST['price'];
            $cate = $_POST['category'];
            $success = User::setProduct($name, $img, $price, $cate);
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
                        <div class="card-header"><div class="card-title">Products</div><p class="<?= $success ? 'text-danger' : 'text-success'; ?>"><?= $success ?></p></div>
                        <div class="card-body">
                            <select class="js-example-templating js-persons form-control" name="category" required>
                                <option>Select Your Page</option>
                                <option value="pecs">Piraiyazh - Earth Conscious Store</option>
                                <option value="gdao">Gramiya Dhaniyam - Arunachala Organics</option>
                            </select>
                            <div class="mt-4">
                                <input type="text" name="name" class="form-control" id="input-rounded1" placeholder="Product Name" required>
                            </div>
                            <div class="mt-4">
                                <input type="text" class="form-control" name="price" placeholder="Product Price" required>
                            </div>
                            <div class="mt-4 mb-3">
                                <input class="form-control" type="file" name="img" accept="image/*" required>
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