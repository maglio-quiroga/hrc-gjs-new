<!-- Team -->

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="team">
	<!--div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div-->
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title" >Instagram</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<!-- Swiper Carousel -->
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<!-- Team Item -->
						<div class="swiper-slide">
							<div class="team_item">
								<div class="team_image"><img src="images/asd2.jpg" alt=""></div>
								<div class="team_body">
									<div class="team_title"><a href="#">Dia del parademico y los tens</a></div>
								</div>
							</div>
						</div>

						<!-- Team Item -->
						<div class="swiper-slide">
							<div class="team_item">
								<div class="team_image"><img src="images/asd2.jpg" alt=""></div>
								<div class="team_body">
									<div class="team_title"><a href="#">Dia nacional del transplante</a></div>
								</div>
							</div>
						</div>

						<!-- Team Item -->
						<div class="swiper-slide">
							<div class="team_item">
								<div class="team_image"><img src="images/asd2.jpg" alt=""></div>
								<div class="team_body">
									<div class="team_title"><a href="#">Dia de la educacion parvularia</a></div>
								</div>
							</div>
						</div>

						<!-- Team Item -->
						<div class="swiper-slide">
							<div class="team_item">
								<div class="team_image"><img src="images/asd2.jpg" alt=""></div>
								<div class="team_body">
									<div class="team_title"><a href="#">Director(s) HRC, director SSA</a></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Navigation Buttons -->
					<div class="swiper-button-next" style="color:#75c891"></div>
					<div class="swiper-button-prev" style="color:#75c891"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
// Initialize Swiper
const swiper = new Swiper('.mySwiper', {
	slidesPerView: 3, // Maximum 3 slides visible at a time
	spaceBetween: 30, // Space between slides
	loop: true, // Enable infinite looping
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		// Responsive breakpoints
		640: {
			slidesPerView: 1,
			spaceBetween: 10,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
	},
});
</script>
