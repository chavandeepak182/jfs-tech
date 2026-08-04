<!-- Footer Area -->
<footer class="footer-area footer-bg">
	<div class="container">
		<div class="footer-top pt-80 pb-4">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="{{ asset(' ') }}">
								<img src="{{ asset('theme') }}/assets/images/logos/logo-w.png" width="250px" alt="Images">
							</a>
						</div>
						<p>At JFS Technologies, we combine innovation & expertise to provide world-class services in Digital Transformation, Experience Design, DevOps & Resource Augmentation, helping businesses achieve their goals.</p>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-2">
						<p class="footer-title">Services</p>
						<ul class="footer-list">
							<li>
								<a href="{{ url('/services/digital-transformation-services') }}">
									<i class="bx bx-chevron-right"></i>
									Digital Transformation
								</a>
							</li>
							<li>
								<a href="{{ url('/services/digital-experience') }}">
									<i class="bx bx-chevron-right"></i>
									Digital Experience
								</a>
							</li>
							<li>
								<a href="{{ url('/services/devops-software-development') }}">
									<i class="bx bx-chevron-right"></i>
									DevOps
								</a>
							</li>
							<li>
								<a href="{{ url('/services/resource-augmentation-services') }}">
									<i class="bx bx-chevron-right"></i>
									Resource Augmentation
								</a>
							</li>
							<li>
								<a href="#">
									<i class="bx bx-chevron-right"></i>
									Hire A Dedicated Developer
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget pl-2">
						<p class="footer-title">Quick Links</p>
						<ul class="footer-list">
							<li>
								<a href="{{ asset(' ') }}">
									<i class="bx bx-chevron-right"></i>
									Home
								</a>
							</li>
							<li>
								<a href="{{ url('/about-us') }}">
									<i class="bx bx-chevron-right"></i>
									About Us
								</a>
							</li>
							<li>
								<a href="{{ url('/success-stories') }}">
									<i class="bx bx-chevron-right"></i>
									Success Stories
								</a>
							</li>
							<li>
								<a href="{{ url('/life-at-jfs') }}">
									<i class="bx bx-chevron-right"></i>
									Life at JFS
								</a>
							</li>
							<li>
								<a href="https://jfstechnologies.com/blog/">
									<i class="bx bx-chevron-right"></i>
									Blogs
								</a>
							</li>
							<li>
								<a href="{{ url('/contact-us') }}">
									<i class="bx bx-chevron-right"></i>
									Contact Us
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<p class="footer-title">Reach Us</p>
						<ul class="footer-list">
							<li>
									<p>
										Office No. 710, 7th Floor,<br>
										DNK SQUARE, Airport Road,<br>
										Sakore Nagar, Viman Nagar,<br>
										Pune, Maharashtra 411014.
									</p>
								</li>
							<li>
								<a href="mailto:info@jfstechnologies.com">
									<i class="fal fa-paper-plane"></i>
									info@jfstechnologies.com
								</a>
							</li>
							<li>
								<a href="tel:918788524747">
									<i class="fal fa-phone-alt"></i>
									+91 87885 24747
								</a>
							</li>
							<li class="d-flex justify-content-between px-3">
								<a href="https://www.linkedin.com/company/jfs-technologies-pvt-ltd/?viewAsMember=true">
									<i class="fab fa-linkedin-in"></i>
								</a>
								<a href="https://www.facebook.com/people/JFS-Technologies/61563351610594/">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="https://x.com/JfsTechnologies">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="https://www.instagram.com/jfs_technologies_services?igsh=MThhNmJ5M2xtenMxeg==">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="https://api.whatsapp.com/send?phone=919922212234&text=Hello,%20I%27m%20looking%20for">
									<i class="fab fa-whatsapp"></i>
								</a>
							</li>
						</ul>
						
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


<!-- ============================================
CRITICAL SCRIPTS (Load immediately)
============================================ -->
<script src="{{ asset('theme') }}/assets/js/jquery.min.js"></script>

<!-- ============================================
DEFERRED SCRIPTS (Load after page render)
============================================ -->
<script src="{{ asset('theme') }}/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/owl.carousel.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/jquery.magnific-popup.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/jquery.nice-select.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/wow.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/meanmenu.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/jquery.ajaxchimp.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/form-validator.min.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/contact-form-script.js" defer></script>
<script src="{{ asset('theme') }}/assets/js/custom.js" defer></script>

<!-- ============================================
EXTERNAL SCRIPTS (Load after page)
============================================ -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" defer></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js' defer></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js' defer></script>

<!-- ============================================
INLINE SCRIPTS (Keep these here)
============================================ -->
<script>
	/* =========== Toggle Menu ============ */
	const openNav = document.querySelector(".open-btn");
	const closeNav = document.querySelector(".close-btn");
	const menu = document.querySelector(".nav-list");

	openNav.addEventListener("click", () => {
		menu.classList.add("show");
	});

	closeNav.addEventListener("click", () => {
		menu.classList.remove("show");
	});
</script>

<script>
	// Initialize AOS after page loads
	document.addEventListener('DOMContentLoaded', function() {
		if (typeof AOS !== 'undefined') {
			AOS.init();
		}
	});
</script>

<!-- ============================================
MIXITUP & FANCYBOX (Initialize after load)
============================================ -->
<script>
	document.addEventListener("DOMContentLoaded", function () {
		// Mixitup
		var containerEl = document.querySelector(".portfolio-item");
		if (containerEl && typeof mixitup !== 'undefined') {
			var mixer = mixitup(containerEl, {
				animation: {
					effects: "fade translateZ(-100px)",
					effectsIn: "fade translateY(-100%)",
					easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
				}
			});
		}

		// Fancybox
		if (typeof $.fn.fancybox !== 'undefined') {
			$("[data-fancybox]").fancybox({
				loop: true,
				hash: true,
				transitionEffect: "slide",
				clickContent: function (current, event) {
					return current.type === "image" ? "next" : false;
				}
			});
		}
	});
</script>
