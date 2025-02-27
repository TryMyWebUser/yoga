<?php
include "libs/load.php";
include("header.php");

$data = Operations::getListMenu();
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
                            <h4>Thirumandhiram Sigitchai</h4>
                            <ul class="breadcumb-content-list">
                                <li><a href="index.php">Home</a></li>
                                <li>-</li>
                                <li><?= $data['category']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Inner Banner -->

		<div class="ao-team-detail-wrap p-t120 p-b90">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="ao-team-mem-bx">
							<div class="ao-team-column-bx2">
                                <div class="ao-team-media">
                                    <img src="assets/<?= $data['img']; ?>" alt="img">
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="ygr-about-content">
							<div class="ygr-title-head-section">
								<div class="ygr-main-head-sm-title">
									<?= $data['category']; ?>
								</div>
								<h2 class="ygr-main-head-lg-title">
									<?= $data['title']; ?>
								</h2>
								<p class="ygr-pgf-text">
									<?= $data['dec']; ?>
								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
			
        </div>
        <!-- CONTENT END -->

<?php
include("footer.php");
?>	