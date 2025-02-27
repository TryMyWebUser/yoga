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

        <style>
            .video-card {
                background: #fff;
                border-radius: 10px;
                padding: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
                height: fit-content;
            }

            .video-card video {
                width: 100%;
                border-radius: 5px;
            }

            .video-card iframe {
                width: 100%;
                height: 200px;
                border-radius: 5px;
            }

            iframe {
                width: auto;
                height: fit-content;
            }
        </style>

    </head>
    <body>

        <?php include "temp/header.php"; ?>
        <?php include "temp/sideheader.php"; ?>

        <div class="container mt-5">
            <div class="card custom-card">
                <div class="card-header">
                    <h5>Videos</h5>
                </div>
                <div class="card-body">
                    <div class="row row-cols-md-3 row-cols-1 g-4" data-masonry='{"percentPosition": true }'>
                        <?php
                        $videos = Operations::getVideo();
                        if (!empty($videos)) {
                            foreach ($videos as $vid) {
                                echo '<div class="col">';
                                echo '<div class="video-card">';
                                
                                if (empty($vid['uvid'])) {
                                    // Local Video
                                    echo '<video controls>
                                            <source src="' . htmlspecialchars($vid['vid']) . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <a href="deleteVideo.php?delete_id=' . htmlspecialchars($vid['id']) . '"><button type="button" class="dual-listbox__button btn-danger">
                                            <i class="bi bi-x-square"></i>
                                        </button></a>';
                                } else {
                                    // YouTube iframe
                                    echo $vid['uvid'];
                                    echo '<a href="deleteVideo.php?delete_id=' . htmlspecialchars($vid['id']) . '"><button type="button" class="dual-listbox__button btn-danger">
                                            <i class="bi bi-x-square"></i>
                                        </button></a>';
                                }

                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "<p class='text-center'>Video Not Found</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include "temp/footer.php"; ?>

        <!-- Bootstrap Masonry JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>

    </body>
</html>