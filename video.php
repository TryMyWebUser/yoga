<?php
include "libs/load.php";
include("header.php");
?>

<!-- CONTENT START -->
<div class="page-content">
    <!--Inner Banner -->
    <div class="breadcumb-area">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h4>Videos</h4>
                        <ul class="breadcumb-content-list">
                            <li><a href="index.php">Home</a></li>
                            <li>-</li>
                            <li>Videos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Inner Banner -->

    <!--Pricing Section Start -->
    <div class="ao-latest-news-area p-t120 p-b90 ao-bg-white">
        <div class="features-bg-top"></div>
        <div class="container">
            <!--Section Content-->
            <div class="ao-section-content">
                <div class="row" data-masonry='{"percentPosition": true }'>
                    <?php
                        $videos = Operations::getVideo();
                        if (!empty($videos)) {
                            foreach ($videos as $vid) {
                    ?>
                    <!-- COLUMN 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="ao-lats-news-box wow fadeInDown" 
                            data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-name: fadeInDown;">
                            <div class="ao-lats-news-pic">
                                <?php if (empty($vid['uvid'])) {
                                    // Local Video
                                    echo '<video style="width: -webkit-fill-available;" controls>
                                            <source src="assets/' . htmlspecialchars($vid['vid']) . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>';
                                } else {
                                    // YouTube iframe
                                    echo $vid['uvid'];
                                } ?>
                            </div>
                        </div>
                    </div>
					<?php } } else { echo "<p>Video Not Found</p>"; } ?>
                </div>
            </div>
        </div>
    </div>
    <!--Pricing Section End-->
</div>
<!-- CONTENT END -->

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

<?php
include("footer.php");
?>