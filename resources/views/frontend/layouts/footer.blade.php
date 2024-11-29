<!-- Footer Area -->
    <footer class="footer-area footer-bg">
		<div class="container">
			<div class="footer-top pt-100 pb-70">
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="{{ asset(' ') }}">
									<img src="{{ asset('theme') }}/assets/images/logos/logo-w.png" width="250px" alt="Images">
								</a>
							</div>
							<p>We're a global leader in digital solutions, offering services in Digital Transformation, Digital Experience, DevOps & Resource Augmentation. Our mission is to empower businesses with innovative technologies & scalable solutions to achieve excellence in a competitive world.</p>
							<!-- <div class="footer-call-content">
								<h3>Talk to Our Support</h3>
								<span><a href="tel:918421216367">+91 84212 16367</a></span>
								<i class="bx bx-headphone"></i>
							</div> -->
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget pl-2">
							<h3>Services</h3>
							<ul class="footer-list">
								<li>
									<a href="{{ url('/services/digital-transformation') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Digital Transformation
									</a>
								</li>
								<li>
									<a href="{{ url('/services/digital-experience') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Digital Experience
									</a>
								</li>
								<li>
									<a href="{{ url('/services/devops') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										DevOps
									</a>
								</li>
								<li>
									<a href="{{ url('/services/resource-augmentation') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Resource Augmentation
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Hire A Dedicated Developer
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-sm-6">
					<div class="footer-widget pl-2">
							<h3>Quick Links</h3>
							<ul class="footer-list">
								<li>
									<a href="{{ asset(' ') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Home
									</a>
								</li>
								<li>
									<a href="{{ url('/about-us') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										About Us
									</a>
								</li>
								<li>
									<a href="{{ url('/success-stories') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Success Stories
									</a>
								</li>
								<li>
									<a href="{{ url('/careers') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Careers
									</a>
								</li>
								<li>
									<a href="https://jfstechnologies.com/blog/" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Blogs
									</a>
								</li>
								<li>
									<a href="{{ url('/contact-us') }}" target="_blank">
										<i class="bx bx-chevron-right"></i>
										Contact Us
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h3>Reach Us</h3>
							<ul class="footer-list">
								<li><p>#416 Platinum Square, Viman Nagar, Pune, Maharashtra 411014.</p></li>
								<li>
									<a href="mailto:info@jfstechnologies.com" target="_blank">
										<i class="fal fa-paper-plane"></i>
										info@jfstechnologies.com
									</a>
								</li>
								<li>
									<a href="tel:918329729190" target="_blank">
										<i class="fal fa-phone-alt"></i>
										+91 83297 29190
									</a>
								</li>
								<li class="d-flex justify-content-between px-3">
									<a href="https://www.linkedin.com/company/jfs-technologies-pvt-ltd/?viewAsMember=true" target="_blank">
										<i class="fab fa-linkedin-in"></i>
									</a>
									<a href="https://www.facebook.com/people/JFS-Technologies/61563351610594/" target="_blank">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="https://x.com/JfsTechnologies" target="_blank">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="https://www.instagram.com/jfs_technologies_services?igsh=MThhNmJ5M2xtenMxeg==" target="_blank">
										<i class="fab fa-instagram"></i>
									</a>
									<a href="https://api.whatsapp.com/send?phone=919922212234&text=Hello,%20I%27m%20looking%20for" target="_blank">
										<i class="fab fa-whatsapp"></i>
									</a>
								</li>
							</ul>
							<!-- <div class="newsletter-area mt-3">
								<form class="newsletter-form" data-toggle="validator" method="POST">
									<input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
									<button class="subscribe-btn" type="submit">
										<i class="bx bxs-paper-plane"></i>
									</button>
									<div id="validator-newsletter" class="form-result"></div>
								</form>
							</div> -->
						</div>
					</div>
				</div>
			</div>
            <div class="copy-right-area">
                <div class="copy-right-text">
                    <p>Copyright © <script>document.write(new Date().getFullYear())</script> JFS Technologies Pvt. Ltd. | All Rights Reserved.</p>
                </div>
            </div>
        </div>
	</footer>


	<div class="switch-box">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
	</div>


	<script src="{{ asset('theme') }}/assets/js/jquery.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/owl.carousel.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/jquery.nice-select.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/wow.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/meanmenu.js"></script>
	<script src="{{ asset('theme') }}/assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/form-validator.min.js"></script>
	<script src="{{ asset('theme') }}/assets/js/contact-form-script.js"></script>
	<script src="{{ asset('theme') }}/assets/js/custom.js"></script>

	<!-- Mixitup -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
	<script>
		/*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
		// 1. querySelector
		var containerEl = document.querySelector(".portfolio-item");
		// 2. Passing the configuration object inline
		//https://www.kunkalabs.com/mixitup/docs/configuration-object/
		var mixer = mixitup(containerEl, {
		animation: {
			effects: "fade translateZ(-100px)",
			effectsIn: "fade translateY(-100%)",
			easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
		}
		});
		// fancybox insilaze & options //
		$("[data-fancybox]").fancybox({
		loop: true,
		hash: true,
		transitionEffect: "slide",
		/* zoom VS next////////////////////
		clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
		clickContent: function(current, event) {
			return current.type === "image" ? "next" : false;
		}
		});
	</script>