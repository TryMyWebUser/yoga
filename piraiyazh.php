<?php
include("header.php");
$data = Operations::getAVM_F('piraiyazh');
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
                            <h4>Piraiyazh - Earth Conscious Store</h4>
							<ul class="breadcumb-content-list">
                                <li><a href="index.php">Home</a></li>
                                <li>-</li>
                                <li>Piraiyazh - Earth Conscious Store</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Inner Banner -->


        <!-- Professional Team Section -->
		 <div class="ao-our-team-area p-t120 p-b120 ao-bg-white">
            <div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="ao-our-team-left wow fadeInDown" data-wow-duration="2000ms">
							<div class="ao-our-team-box wow fadeInDown" data-wow-duration="2000ms">
								<div class="ao-our-team-pic"> 
									<img src="assets/images/home1/team/large1.jpg" alt="img" >
									<div class="ao-our-team-curve"> 
									</div>
								</div>
								
							</div>
					  </div>
					</div>
					<div class="col-lg-7">
						<!--Section Head-->
						<div class="ao-section-head ao-left-align">
                        <div class="ao-section3-head-tagline">About Us</div>
							<h2 class="ao-section-head-title"><?= htmlspecialchars_decode($data['at']); ?></h2>
						</div>
						<p><?= nl2br(htmlspecialchars_decode($data['ad'])); ?></p>
					</div>
				</div>
				
            </div>
        </div>
        <!-- Professional Team End -->

		


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
							<h3 class="ao-section3-head-title">We manufacture and sell a wide range of sustainable lifestyle essentials, including: </h3>
							<p>1. Eco-friendly yoga products (cotton and cork yoga mats, wooden yoga blocks, cotton straps) </p>
                            <p>2. Handwoven cotton and linen clothing (scientifically proven to have higher bioenergetic frequencies than synthetic fabrics like polyester, which can absorb and disrupt the body's energy fields) </p>
                            <p>3. Sustainable home decor and furnishings </p>
                            <p>4. Non-toxic kids' toys and baby essentials </p>
                            <p>5. Handcrafted kitchenware free from plastic and synthetic coatings </p>
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
					<h2 class="ao-section-head-title text-white">Piraiyazh - Earth Conscious Store </h2>
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

        

		<!-- Product Card -->
		<div class="ao-latest-news-area p-t120 p-b90 ao-bg-white">
			<div class="container">
				<div class="ao-section-content">
					<div class="row">
						<?php
							$product = Operations::getP_Products('pecs');
							if ($product) {
								foreach ($product as $pro) {
						?>
						<div class="col-lg-4 col-md-6">
							<div class="ao-yoga-prod-box">
								<div class="ao-yoga-prod-pic"> 
									<img src="assets/<?= $pro['img']; ?>" alt="image not found">
									<a href="javascript:void(0)" class="ao-yoga-prod-link add-to-cart" 
										data-title="<?= $pro['name']; ?>" 
										data-price="<?= $pro['price']; ?>" 
										data-image="assets/<?= $pro['img']; ?>"> 
										<i class="bi bi-cart3"></i>
									</a>
								</div>
								<div class="ao-yoga-prod-bot">
									<h4 class="ao-yoga-prod-title"><a href="javascript:void(0)"><?= $pro['name']; ?></a></h4>
									<span class="ao-yoga-prod-price">₹<?= $pro['price']; ?></span>
								</div>
							</div>
						</div>
						<?php } } else { echo "<p>Product Not Found</p>"; } ?>
					</div>
				</div>
			</div>
		</div>

        <?php
        include("footer.php");
        ?>