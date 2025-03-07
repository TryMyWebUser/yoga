		<!-- Footer Start -->
		<footer class="site-footer ao-site-footer">
			<!-- FOOTER BLOCKES START -->  
		<div class="footer-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<div class="footer-top-left">
								<h2 class="">Need any  services</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="footer-top-right">
								<a href="contact.php" class="site-button-secondary cursor-scale small">Appointment <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
	
			<div class="footer-main">
				<!-- Footer Main Top -->  
				<div class="footer-main-top">
					<div class="container">
						<div class="row">
							<!-- COLUMNS 1 -->
							<div class="col-lg-4 col-md-12">
								<div class="sf-widget-newsletter f-margin">
									<h4 class="aon-f-title-2">Newsletter</h4>
									<form role="search" id="news-latter" action="https://aonetheme.com/search" method="get" class="news-latter-box">
										<input class="form-control" value="" name="q" type="search" placeholder="Your Email">
										<button type="button" class="search-btn news-latter-btn">
											<i class="feather-send"></i>
										</button>
									</form>
									<div class="aon-footer-logo-2"><img src="assets/images/home2/logo3.png" alt="img"></div>
								</div>
							</div>
							<!-- COLUMNS 2 -->
							<div class="col-lg-4 col-md-6">
								<div class="aon-ftr-info-wrap  f-margin">
									<h4 class="aon-f-title-2">Contant Us</h4>
									<ul class="aon-ftr-info">
										<li>No.687/4,2nd floor, Trichy Rd, Kongu Nagar, Kallimadai, Ramanathapuram, Coimbatore, Tamil Nadu 641045.</li>
										<li>Call :  <a href="tel:+917845192939">+91 78451 92939</a></li>
										<li>Email :   info@example.com</li>
									</ul>
								</div>
							</div>
							<!-- COLUMNS 3 -->
							<div class="col-lg-4 col-md-6">
								<div class="aon-widget-link f-margin">
									<h4 class="aon-f-title-2">Quick Links</h4>
									<ul class="aon-widget-foo-list-2">
										<li><a class="cursor-scale small" href="index.php">Home</a></li>
										<li><a class="cursor-scale small" href="thirumandhiram.php">Thirumandhiram Sigitchai</a></li>
										<li><a class="cursor-scale small" href="about.php">About Us</a></li>
										<li><a class="cursor-scale small" href="shimaya.php">Shimaya</a></li>
										<li><a class="cursor-scale small" href="contact.php">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer Main bottom  -->  
				<div class="footer-main-bot">
					<div class="container">
						
						<div class="row align-items-center">
							<!-- COLUMNS 1 -->
							<div class="col-lg-4 col-md-12 col-12">
								<span class="ao-copyright-line">Designed and Developed By Trymywebsites.</span>
							</div>
							<!-- COLUMNS 2 -->
							<div class="col-lg-4 col-md-12 col-12">
								<ul class="aon-social-icon-2 d-flex">
									<li><a href="#0"><i class="bi bi-facebook"></i></a></li>
									<li><a href="#0"><i class="bi bi-instagram"></i></a></li>
									<li><a href="https://wa.me/917845192939"><i class="bi bi-whatsapp"></i></a></li>
									<li><a href="#0"><i class="bi bi-youtube"></i></a></li>
								</ul>
							</div>
							
						</div>
						
					</div>
				</div>
				<div class="ao-foo-animate-pic1 plus-v1"><img class="spin-v1" src="assets/images/home1/how-bg.png" alt="img"></div>
				<div class="ao-foo-animate-pic2 plus-v1"><img src="assets/images/home1/foo-2.png" alt="img"></div>
				
			</div>
		</footer>
		<!-- Footer End -->	
		
        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>	
		

		<!-- Cart Modal -->
		<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" style="background: unset;">
					<div class="ao-ad-to-cart-wrap">
						<div class="container p-0">
							<div class="ao-ad-to-cart-section">
								<button type="button" class="btn-close" style="position: absolute; top: 20px; right: 20px;" data-bs-dismiss="modal"></button>
								<div id="cart-items" class="ad-ad-to-cart-list">
									<p>Your cart is empty.</p>
								</div>
								<div class="text-center m-t40">
									<span class="me-auto" id="cart-total">Total: ₹0</span><br>
									<button type="button" class="site-button cursor-scale small" id="whatsapp-order">Proceed to checkout <i class="feather-arrow-right"></i></button>
								</div>
							</div>  
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				let cart = [];

				// Use event delegation to ensure dynamically added elements work
				$(document).on("click", ".add-to-cart", function() {
					let title = $(this).data("title");
					let price = parseFloat($(this).data("price"));
					let image = $(this).data("image");

					console.log("Adding to cart:", title, price, image); // Debugging log

					let existingProduct = cart.find(item => item.title === title);
					if (existingProduct) {
						existingProduct.quantity++;
					} else {
						cart.push({ title, price, image, quantity: 1 });
					}

					updateCart();
				});

				function updateCart() {
					let cartItemsContainer = $("#cart-items");
					let cartTotal = $("#cart-total");
					let cartCount = $("#cart-count"); // This only selects the first one
					let cartCountAll = $("span#cart-count"); // Select all instances of #cart-count

					cartItemsContainer.empty();
					let total = 0;
					let itemCount = 0;

					if (cart.length === 0) {
						cartItemsContainer.html("<p>Your cart is empty.</p>");
						cartTotal.text("Total: ₹0");
						cartCountAll.hide(); // Hide all cart count badges
						return;
					}

					cart.forEach((item, index) => {
						total += item.price * item.quantity;
						itemCount += item.quantity;
						cartItemsContainer.append(`
							<div class="cart-item">
								<div class="ad-c-media"><img src="${item.image}" alt="Image Not Found"></div>
								<div class="ad-c-title-wrap w-auto"><h3 class="ad-c-title mt-2">${item.title}</h3></div>
								<div class="d-flex justify-content-between">
									<button class="ad-item-qty ad-item-bx" onclick="changeQuantity(${index}, -1, event)">-</button>
									<span class="ad-item-qty ad-item-bx mx-2">${item.quantity}</span>
									<button class="ad-item-qty ad-item-bx" onclick="changeQuantity(${index}, 1, event)">+</button>
								</div>
								<div class="ad-item-price ad-item-bx mt-2 w-100">₹${item.price}</div>
								<button class="ad-item-ad-remove ad-item-bx mt-2" style="width: -webkit-fill-available;" onclick="removeFromCart(${index}, event)"><i class="bi bi-cart-x"></i></button>
							</div>
						`);
					});

					cartTotal.text(`Total: ₹${total}`);
    				cartCountAll.text(itemCount).show(); // Update ALL cart count elements
				}

				window.changeQuantity = function(index, amount, event) {
					event.stopPropagation(); // Prevent modal from closing

					if (cart[index].quantity + amount <= 0) {
						cart.splice(index, 1);
					} else {
						cart[index].quantity += amount;
					}
					updateCart();
				};

				window.removeFromCart = function(index, event) {
					event.stopPropagation(); // Prevent modal from closing

					if (index >= 0 && index < cart.length) {
						cart.splice(index, 1);
						updateCart();
					} else {
						console.error("Invalid index: " + index);
					}
				};

				$("#whatsapp-order").click(function() {
					if (cart.length === 0) {
						alert("Your cart is empty!");
						return;
					}

					let message = "Hello, I would like to order:\n\n";
					let total = 0;

					cart.forEach((item, index) => {
						total += item.price * item.quantity;
						message += `${index + 1}) Product Name: *${item.title}*\n`;
						message += `   Price per qty: Rs.${item.price}\n`;
						message += `   Quantity: *${item.quantity}*\n`;
						message += `   Subtotal: Rs.${item.price * item.quantity}\n\n`;
					});

					let grandTotal = total;
					message += `Grand Total: Rs.${grandTotal}\n\n`;
					message += `Remarks: -`;

					let encodedMessage = encodeURIComponent(message).replace(/%20/g, "+");
					let whatsappNumber = "+917845192939";
					let whatsappURL = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedMessage}`;
					window.open(whatsappURL, "_blank");
				});
			});
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 	</div>

    
    
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="assets/js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="assets/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="assets/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="assets/js/wow.js"></script><!-- WOW JS -->
<script  src="assets/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="assets/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="assets/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="assets/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="assets/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="assets/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="assets/js/gsap.min.js"></script><!-- cursor -->
<script  src="assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->

</body>
	<a href="https://wa.me/917845192939" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
	<a href="tel:7845192939" class="whatsapp_float1" target="_blank"> <i class="fa fa-phone whatsapp-icon"></i></a>
</html>
