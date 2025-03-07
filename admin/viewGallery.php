<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('Loggedin'))
    {
        header("Location: index.php");
        exit;
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

        <!-- Bootstrap Masonry CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    </head>
    <body>

        <?php include "temp/header.php"; ?>
        <?php include "temp/sideheader.php"; ?>

        <div class="row">
            <div class="col-xl-12">
                <div class="row mt-3">
                    <div class="filters d-flex justify-content-evenly align-items-center mb-4">
                        <a class="filter_link text-dark" href="#" data-filter="all">
                            <button type="button" class="btn btn-outline-primary">
                                All
                            </button>
                        </a>
                        <a class="filter_link text-dark" href="#" data-filter="about">
                            <button type="button" class="btn btn-outline-secondary">
                            About Us
                            </button>
                        </a>
                        <a class="filter_link text-dark" href="#" data-filter="thiru">
                            <button type="button" class="btn btn-outline-warning">
                            Thirumandhiram Sigitchai
                            </button>
                        </a>
                        <a class="filter_link text-dark" href="#" data-filter="shimaya">
                            <button type="button" class="btn btn-outline-info">
                            Shimaya
                            </button>
                        </a>
                    </div>
                    <?php
                        $data = Operations::getGallery();
                        if(!empty($data)) {
                            foreach ($data as $item) {
                    ?>
                    <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6 card-view <?= $item['category']; ?>">
                        <div class="card custom-card card-style-2">
                            <div class="card-body p-0">
                                <div class="card-img-top">
                                    <div class="img-box-2 p-2"><img src="<?= $item['img']; ?>" alt="Image Not Found" class="scale-img img-fluid w-100 bg-primary-transparent rounded" /></div>
                                    <a href="deleteGallery.php?delete_id=<?= $item['id']; ?>" class="btn btn-danger rounded-circle btn-style-1 btn-icon d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                        <i class="bi bi-trash3 fs-18"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } } else { echo "<p>Data Not Found</p>"; } ?>
                </div>
            </div>
        </div>

        <?php include "temp/footer.php"; ?>

        <!-- Bootstrap Masonry JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
        
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function () {
                var $mediaElements = $(".card-view"); 
                var $container = $(".row.mt-3");
                var $noResultsMessage = $("<p class='no-results text-center mt-3'>Testimonials Not Found</p>").hide();

                // Ensure the message is added only once
                if (!$(".no-results").length) {
                    $container.append($noResultsMessage);
                }

                $(".filter_link").click(function (e) {
                    e.preventDefault();
                    var filterVal = $(this).data("filter");

                    if (filterVal === "all") {
                        $mediaElements.fadeIn();
                        $noResultsMessage.hide();
                    } else {
                        var $filteredItems = $mediaElements.hide().filter("." + filterVal);

                        if ($filteredItems.length > 0) {
                            $filteredItems.fadeIn();
                            $noResultsMessage.hide();
                        } else {
                            $noResultsMessage.show();
                        }
                    }
                });
            });
        </script>
    </body>
</html>