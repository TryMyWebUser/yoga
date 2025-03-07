<?php
include("header.php");
$data = Operations::getAVM_F('shimaya');
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
                            <h4>Shimaya  - Yoga Exclusive</h4>
							<p style="color:white;">Your path to wellness. Rooted in Tradition</p>
                            <ul class="breadcumb-content-list">
                                <li><a href="index.php">Home</a></li>
                                <li>-</li>
                                <li>Shimaya  - Yoga Exclusive</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Inner Banner -->

		<!-- New Yoga Classes Section -->
        <div class="ao-featue-area p-t120 p-b90 ao-bg-white">
            <div class="container">
				<!--Section Head-->
				<div class="ao-section2-head">
					<h2 class="ao-section2-head-title">Our Services</h2>
				</div>
				<!--Section Content-->
				<div class="ao-section-content">
					<div class="row justify-content-center">
						<!-- COLUMNS 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="1000ms">
								<div class="ao-featue-icon"> 
                                <img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title">Offline Classes Registration</h4>
								
								
							</div>
						</div>
						<!-- COLUMNS 2 -->
						<div class="col-lg-4 col-md-6">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-featue-icon"> 
                                <img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title">Online Classes Registration</h4>
								
								
							</div>
						</div>
						<!-- COLUMNS 3 -->
						<div class="col-lg-4 col-md-6">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="3000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title">Yoga Corporate classes Registration</h4>
								
							</div>
						</div>
                        <!-- COLUMNS 4 -->
						<div class="col-lg-4 col-md-6">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="3000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title">Yoga Section for Small Group Training ( Apartment + Society ) </h4>
								
								
							</div>
						</div>
                        <!-- COLUMNS 5 -->
						<div class="col-lg-4 col-md-6">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="3000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title">Wellness Retriats</h4>
								
								
							</div>
						</div>
                        <!-- COLUMNS 6 -->
						<div class="col-lg-4 col-md-6">
							<div class="ao-featue-box wow fadeInDown" data-wow-duration="3000ms">
								<div class="ao-featue-icon"> 
									<img src="assets/images/home2/feature/3.png" alt="img" >
								</div>
								<h4 class="ao-featue-title">TTC + Certification Programs</h4>
								
								
							</div>
						</div>
                        
					</div>
				</div>
            </div>
        </div>
        <!-- New Yoga Classes End -->


        <!-- About Yogar Section -->
        <div class="ao-about-yogar-area p-t120 p-b120 ao-bg-white">
            <div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="ao-about-left-area wow fadeInDown" data-wow-duration="1000ms">
							<img class="animate-v11" src="assets/images/home2/about-pic.png" alt="img">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<!--Section Head-->
						<div class="ao-section3-head wow fadeInDown" data-wow-duration="2000ms">
							<div class="ao-section3-head-tagline">About Us</div>
							<h2 class="ao-section3-head-title"><?= htmlspecialchars_decode($data['at']); ?></h2>
							<p><?= nl2br(htmlspecialchars_decode($data['ad'])); ?></p>
                        </div>
						
					</div>
				</div>
            </div>
        </div>
        <!-- Yogar Products End -->

        <!-- Why Choose Us Section -->
        <div class="ao-why-choo-area p-t120 p-b120 ao-bg-secondary">
            <div class="container">
				<!--Section Head-->
				<div class="ao-section-head">
					<div class="ao-section-head-tagline">Our Vision & Our Mission</div>
					<h2 class="ao-section-head-title text-white">Shimaya - Yoga Exclusive</h2>
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
        <!-- Why Choose Us End --><br><br>

        <!-- Yogar Products Section -->
        <div class="ao-yoga-product-area p-b90 ao-bg-white">
			<div class="features-bg-top"> </div>
            <div class="container">
				<!--Section Head-->
				<div class="ao-section-head ao-left-align">
					<h2 class="ao-section-head-title">Our Gallery</h2>
				</div>
				<!--Section Content-->
				<div class="ao-section-content">
					<div class="owl-carousel ao-yoga-prod-slider owl-btn-top-right ">
						<!-- COLUMN 1 -->
						<div class="item">
							<div class="ao-yoga-prod-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/images/home1/products/7.jpg" alt="img" >
								</div>
							</div>
						</div>
						<!-- COLUMN 2 -->
						<div class="item">
							<div class="ao-yoga-prod-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/images/home1/products/8.jpg" alt="img" >
								</div>
							</div>
						</div>
						<!-- COLUMN 3 -->
						<div class="item">
							<div class="ao-yoga-prod-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/images/home1/products/9.jpg" alt="img" >
								</div>
							</div>
						</div>
						<!-- COLUMN 4 -->
						<div class="item">
							<div class="ao-yoga-prod-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/images/home1/products/10.jpg" alt="img" >
								</div>
							</div>
						</div>
						<!-- COLUMN 5 -->
						<div class="item">
							<div class="ao-yoga-prod-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/images/home1/products/11.jpg" alt="img" >
								</div>
							</div>
						</div>
						<!-- COLUMN 6 -->
						<div class="item">
							<div class="ao-yoga-prod-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/images/home1/products/12.jpg" alt="img" >
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Yogar Products End -->

		 <!-- Our Testimonials Section -->
		 <div class="ao-our-testimo-area p-b120 ao-bg-white">
            <div class="container">
				<!--Section Head-->
				<div class="ao-section-head ao-left-align">
					<div class="ao-section-head-tagline">Our Testimonials</div>
					<h2 class="ao-section-head-title">Customer experiences</h2>
				</div>
				<!--Section Content-->
				<div class="ao-section-content">
					<div class="owl-carousel ao-our-testimo-slider owl-btn-top-right ">
						<!-- COLUMN -->
						<?php
							$testimonial = Operations::getTest('shimaya');
							if ($testimonial) {
								foreach ($testimonial as $test) {
						?>
						<div class="item">
							<div class="ao-our-testimo-box wow fadeInDown" data-wow-duration="2000ms">
								<span class="ao-our-testimo-icon"><i class="bi bi-quote"></i></span>
								<div class="ao-our-testimo-text"><?= $test['dec']; ?></div>
								
								<div  class="ao-our-testimo-bot"> 
									<div class="ao-our-testimo-media"> 
										<div class="ao-our-testimo-pic"><img src="assets/<?= $test['img']; ?>" alt="img"></div>
								  </div>
									<div class="ao-our-testimo-info"> 
										<div class="ao-our-testimo-name"><?= $test['title']; ?></div>
										<div class="ao-our-testimo-posin"><i class="bi bi-circle-fill"></i> Manager</div> 
									</div>
								</div>
								
							</div>
						</div>
						<?php } } else { echo "<p>Testimonials Not Found</p>"; } ?>
					</div>
				</div>
            </div>
        </div>
        <!-- Our Testimonials End -->

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

		<!-- New Yoga Classes Section -->
        <div class="ao-featue-area p-t120 p-b90 ao-bg-white">
            <div class="container">
				<!--Section Head-->
				<div class="ao-section2-head">
					<h3 class="ao-section2-head-title">Shimaya is not just about practicing yoga—it’s about living yoga.
					</h3>
				</div>
				
            </div>
        </div>
        <!-- New Yoga Classes End -->


        <?php
        include("footer.php");
        ?>