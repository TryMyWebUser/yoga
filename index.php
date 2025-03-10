<?php

	include "libs/load.php";

	include("header.php");

	$data = Operations::getAVM_F('home');
?>

    
        <!-- CONTENT START -->
        <div class="page-content">

			
        <!-- Banner Top -->
        <div class="aon-bnrs-area">
			<div class="container">
				<div class="row align-items-center">
					<!--Banner Left-->
					<div class="col-md-6">
						<div class="aon-bnrs-left">
							<span class="ao-baner-label">welcome to </span>
							<h1 class="ao-baner-title">Vedavistara</h1>
							<p class="ao-baner-text">Thirumandhiram is dedicated to being a premier integrated polyclinic that specializes in holistic treatment solutions.</p>
							<div class="ao-baner-btn">
								<a href="https://wa.me/917845192939" class="site-button cursor-scale small">For Enquiry<i class="feather-arrow-right"></i></a>
								
							</div>
						</div>
					</div>
					<!--Banner Right-->
					<div class="col-md-6">
						<div class="aon-bnrs-right">
							<div class="top-bar-pic-one animate-v11"><img src="assets/images/home1/banner/girl.png" alt=""></div>
							<div class="top-bar-pic-two animate-v22"><img src="assets/images/home1/banner/girl-bg.png" alt=""></div>	
						</div>	
					</div>
				</div>
			</div>	
        </div>
        <!-- Slider 1 End --> 

		<!-- New Yoga Classes Section -->
        <div class="ao-featue-area p-t120 p-b90 ao-bg-white">
            <div class="container">
				
				<!--Section Content-->
				<div class="ao-section-content">
					<div class="row justify-content-center">
						<!-- COLUMNS 1 -->
						<div class="col-lg-3">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="1000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title"><a href="thirumandhiram.php">Thirumandhiram - Sigichalaya </a></h4>
								
							</div>
						</div>
						<!-- COLUMNS 2 -->
						<div class="col-lg-3">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title"><a href="shimaya.php">Shimaya - Yoga Exclusive </a></h4>
								
							</div>
						</div>
						<!-- COLUMNS 3 -->
						<div class="col-lg-3">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="3000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title"><a href="piraiyazh.php">Piraiyazh - Earth Conscious Store </a></h4>
								
							</div>
						</div>
						<!-- COLUMNS 4 -->
						<div class="col-lg-3">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="3000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title"><a href="gramiya.php">Gramiya Dhaniyam - Arunachala Organics </a></h4>
								
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- New Yoga Classes End -->

		
			
       

		<!-- About SECTION START -->
		<div class="section-full ygr-about-wrap">
			<div class="container">
				<div class="section-content">
					<div class="row">
						<div class="col-lg-6">
							<div class="ygr-about-content">
								<div class="ygr-title-head-section">
									<div class="ygr-main-head-sm-title">
										about us
									</div>
									<h2 class="ygr-main-head-lg-title"><?= htmlspecialchars_decode($data['at']); ?></h2>
									<p class="ygr-pgf-text"><?= nl2br(htmlspecialchars_decode($data['ad'])); ?></p>
								</div>

								<!-- <div class="ygr-iconset-wrap">
									<div class="row">
										<div class="col-md-6">
											<div class="ygr-icon-bx-1">
												<div class="ygr-media">
													<img src="assets/images/home1/icons/1.png" alt="image">
												</div>
												<h3 class="ygr-title">Mental Health</h3>
											</div>
										</div>
										<div class="col-md-6">
											<div class="ygr-icon-bx-1">
												<div class="ygr-media">
													<img src="assets/images/home1/icons/2.png" alt="image">
												</div>
												<h3 class="ygr-title">Peaceful Mind</h3>
											</div>
										</div>
									</div>
								</div> -->

								<!-- <div class="ygr-site-button-wrap">
									<a href="about.php" class="site-button cursor-scale small">More About <i class="feather feather-arrow-right"></i></a>
								</div> -->

							</div>

						</div>  
						<div class="col-lg-6">
							<div class="ygr-collage-3-coulmn-wrap">
								<div class="ygr-collage-3-coulmn">
									<div class="ygr-collage-3-l-pic">
										<img src="assets/images/home1/collage/l-pic1.jpg" alt="Image">
									</div>
									<div class="ygr-collage-3-t-pic">
										<span class="icon-rev-corner-1 t-left"></span>
										<img src="assets/images/home1/collage/t-pic.jpg" alt="Image">
										<span class="icon-rev-corner-1 b-right"></span>
									</div>

									<!-- <div class="ygr-collage-3-vid-wrap">
										<span class="icon-rev-corner-1 t-left"></span>
										<div class="ygr-collage-3-vid">
											<a href="https://www.youtube.com/watch?v=fZ5ErXJz3YY" class="mfp-video ao-play-btn cursor-scale">
											  <i class="bi bi-play"></i>  
											</a>
											<h3 class="ygr-title">Watch Now</h3>
										</div>
										<span class="icon-rev-corner-1 b-right"></span>
									</div> -->

								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>   
		<!-- About SECTION END -->

		<!-- Why Choose Us Section -->
        <div class="ao-why-choo-area p-t120 p-b120 ao-bg-secondary">
            <div class="container">
				<!--Section Head-->
				<div class="ao-section-head">
					<div class="ao-section-head-tagline">Our Vision & Our Mission</div>

					<h2 class="ao-section-head-title text-white">Veda Vistara </h2><br>
					<p style="color:white;">Through relentless research and practical application, Veda Vistara aspires to reshape the world's understanding of health and life, proving that the answers to our future lie in the wisdom of our past. </p>
				</div>
				<!--Section Content-->
				<div class="ao-section-content">
					<div class="row">
						<!-- Left Part -->
						<div class="col-lg-8">
							<!-- COLUMN 1 -->
						  <div class="ao-why-choo-box wow fadeInDown" data-wow-duration="2000ms">
								<h4 class="ao-why-choo-title"><?= htmlspecialchars_decode($data['vt']); ?></h4>
								<div class="ao-why-choo-text"><?= nl2br(htmlspecialchars_decode($data['vd'])); ?></div>
								<!-- <a href="#" class="ao-why-choo-link"> 
									<i class="bi bi-arrow-right"></i>
								</a> -->
							</div>
							<!-- COLUMN 2 -->
						  <div class="ao-why-choo-box wow fadeInDown" data-wow-duration="2000ms">
								<h4 class="ao-why-choo-title"><?= htmlspecialchars_decode($data['mt']); ?></h4>
								<div class="ao-why-choo-text"><?= nl2br(htmlspecialchars_decode($data['md'])); ?></div>
								<!-- <a href="#" class="ao-why-choo-link"> 
									<i class="bi bi-arrow-right"></i>
								</a> -->
							</div>
							
							
					  </div>
						<!-- Right Part -->
						<div class="col-lg-4">
							<div class="ao-how-it-right wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-how-it-pic animate-v11"><img src="assets/images/home1/how-it-pic1.jpg" alt="img"></div>
						  </div>
						</div>
					</div>
				</div>
            </div>
			<div class="ao-why-bg-pic plus-v1"><img class="spin-v1" src="assets/images/home1/how-bg.png" alt=""></div>
        </div>
        <!-- Why Choose Us End -->
		 
	</div>
        <!-- CONTENT END -->


		<div class="ao-team-cloumns-wrap p-t120 p-b70">
            <div class="container">
                <div class="ao-section2-head">
					<h2 class="ao-section2-head-title">Our Team</h2>
				</div>
                <div class="ao-team-column-section">

                   <div class="row">
						<?php
							$teams = Operations::getTeams();
							if (!empty($teams)) {
							foreach ($teams as $team) {
						?>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="ao-team-column-bx">
                                <div class="ao-team-media">
                                    <img src="assets/<?= $team['img'] ?>" alt="img">
                                </div>
                                <div class="ao-team-info">
                                    <h3 class="ao-team-name"><?= $team['name'] ?></h3>
                                    <span class="ao-team-position"><?= $team['role'] ?></span>
                                    <!-- <ul class="ao-team-social">
                                        <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#0"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#0"><i class="fa fa-whatsapp"></i></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
						<?php } } else { echo "<p>Team Members Not Found</p>"; } ?>
                    </div> 

                </div>
                
            </div>
        </div>

<?php
include("footer.php");
?>