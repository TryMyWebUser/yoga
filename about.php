<?php
include("header.php");
$data = Operations::getAVM_F('about')
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
                            <h4>About Us</h4>
                            <ul class="breadcumb-content-list">
                                <li><a href="index.php">Home</a></li>
                                <li>-</li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Inner Banner -->
			

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

								<div class="ygr-iconset-wrap">
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
								</div>

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
					<h2 class="ao-section-head-title text-white">Thirumandhiram - Maruthuva Maiyam</h2>
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


			
		<!--Video Section Start -->
        <div class="ao-large-vid-swction">
			<div class="vid-media">
				<img src="assets/images/home2/vid-bg.jpg" alt="Image">
			</div>
			<div class="vid-btn">
				<a href="#0" class="mfp-video ao-vid-btn btn-animation">
					<i class="fa fa-play"></i>
				</a>
			</div>
		</div>
		<!--Video Section End -->
			
            
        <!-- Our Testimonials Section -->
        <div class="ao-our-testimo-area p-t120 p-b120 ao-bg-white">
			<div class="features-bg-top"> </div>
            <div class="container">
				<!--Section Head-->
				<div class="ao-section-head ao-left-align">
					<div class="ao-section-head-tagline">Our Testimonials</div>
					<h2 class="ao-section-head-title">Customer experiences</h2>
				</div>
				<!--Section Content-->
				<div class="ao-section-content">
					<div class="owl-carousel ao-our-testimo-slider owl-btn-top-right ">
						<!-- COLUMN 1 -->
						<div class="item">
							<div class="ao-our-testimo-box wow fadeInDown" data-wow-duration="2000ms">
								<span class="ao-our-testimo-icon"><i class="bi bi-quote"></i></span>
								<div class="ao-our-testimo-text">Sem nulla pharetra diam sit amet risus nullam eget felis eget nunc relax elementum special in pulvinar etiam non quam lacus suspendisse faucibus 
									met risus nullam about proces chose do nunc relax nulla pharetra diam sit amet provid.
								</div>
								
								<div  class="ao-our-testimo-bot"> 
									<div class="ao-our-testimo-media"> 
										<div class="ao-our-testimo-pic"><img src="assets/images/home1/test-pic/1.jpg" alt="img"></div>
								  </div>
									<div class="ao-our-testimo-info"> 
										<div class="ao-our-testimo-name">Zulliya Wood</div>
										<div class="ao-our-testimo-posin"><i class="bi bi-circle-fill"></i> Manager</div> 
									</div>
								</div>
								
							</div>
						</div>
						<!-- COLUMN 2 -->
						<div class="item">
							<div class="ao-our-testimo-box wow fadeInDown" data-wow-duration="2000ms">
								<span class="ao-our-testimo-icon"><i class="bi bi-quote"></i></span>
								<div class="ao-our-testimo-text">Sem nulla pharetra diam sit amet risus nullam eget felis eget nunc relax elementum special in pulvinar etiam non quam lacus suspendisse faucibus 
									met risus nullam about proces chose do nunc relax nulla pharetra diam sit amet provid.
								</div>
								
								<div  class="ao-our-testimo-bot"> 
									<div class="ao-our-testimo-media"> 
										<div class="ao-our-testimo-pic"><img src="assets/images/home1/test-pic/2.jpg" alt="img"></div>
								  </div>
									<div class="ao-our-testimo-info"> 
										<div class="ao-our-testimo-name">David Wood</div>
										<div class="ao-our-testimo-posin"><i class="bi bi-circle-fill"></i> Developer</div> 
									</div>
								</div>
								
							</div>
						</div>
						<!-- COLUMN 3 -->
						<div class="item">
							<div class="ao-our-testimo-box wow fadeInDown" data-wow-duration="2000ms">
								<span class="ao-our-testimo-icon"><i class="bi bi-quote"></i></span>
								<div class="ao-our-testimo-text">Sem nulla pharetra diam sit amet risus nullam eget felis eget nunc relax elementum special in pulvinar etiam non quam lacus suspendisse faucibus 
									met risus nullam about proces chose do nunc relax nulla pharetra diam sit amet provid.
								</div>
								
								<div  class="ao-our-testimo-bot"> 
									<div class="ao-our-testimo-media"> 
										<div class="ao-our-testimo-pic"><img src="assets/images/home1/test-pic/1.jpg" alt="img"></div>
								  </div>
									<div class="ao-our-testimo-info"> 
										<div class="ao-our-testimo-name">Mostafa Kamal</div>
										<div class="ao-our-testimo-posin"><i class="bi bi-circle-fill"></i> Manager</div> 
									</div>
								</div>
								
							</div>
						</div>
						<!-- COLUMN 4 -->
						<div class="item">
							<div class="ao-our-testimo-box wow fadeInDown" data-wow-duration="2000ms">
								<span class="ao-our-testimo-icon"><i class="bi bi-quote"></i></span>
								<div class="ao-our-testimo-text">Sem nulla pharetra diam sit amet risus nullam eget felis eget nunc relax elementum special in pulvinar etiam non quam lacus suspendisse faucibus 
									met risus nullam about proces chose do nunc relax nulla pharetra diam sit amet provid.
								</div>
								
								<div  class="ao-our-testimo-bot"> 
									<div class="ao-our-testimo-media"> 
										<div class="ao-our-testimo-pic"><img src="assets/images/home1/test-pic/2.jpg" alt="img"></div>
								  </div>
									<div class="ao-our-testimo-info"> 
										<div class="ao-our-testimo-name">Johan Smith</div>
										<div class="ao-our-testimo-posin"><i class="bi bi-circle-fill"></i> Designer</div> 
									</div>
								</div>
								
							</div>
						</div>

					</div>
				</div>
            </div>
        </div>
        <!-- Our Testimonials End -->
			
      </div>
        <!-- CONTENT END -->

<?php
include("footer.php");
?>		