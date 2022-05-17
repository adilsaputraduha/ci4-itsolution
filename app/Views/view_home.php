<!DOCTYPE html>
<html lang="id">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

	<title>IT Solution Organikita - Profesional, murah dan cepat.</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/templatemo-chain-app-dev.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animated.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.css">

</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div id="js-preloader" class="js-preloader">
		<div class="preloader-inner">
			<span class="dot"></span>
			<div class="dots">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.html" class="logo">
							<img src="<?= base_url(); ?>/assets/images/logo.png" alt="Chain App Dev">
						</a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
							<li class="scroll-to-section"><a href="#services">Layanan</a></li>
							<li class="scroll-to-section"><a href="#about">Tentang</a></li>
							<li class="scroll-to-section"><a href="#pricing">Harga</a></li>
							<li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
							<li>
								<div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div>
							</li>
						</ul>
						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<div id="modal" class="popupContainer" style="display:none;">
		<div class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</div>

		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fab fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>

					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fab fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form>
					<label>Full Name</label>
					<input type="text" />
					<br />

					<label>Email Address</label>
					<input type="email" />
					<br />

					<label>Password</label>
					<input type="password" />
					<br />

					<div class="checkbox">
						<input id="send_updates" type="checkbox" />
						<label for="send_updates">Send me occasional email updates</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>

	<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-6 align-self-center">
							<div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
								<div class="row">
									<div class="col-lg-12">
										<h2>Selesaikan Masalah IT-mu Disini.</h2>
										<p>Punya skripsi atau tugas akhir yang gak kelar-kelar? atau mau pasang jaringan? klik dibawah untuk konsultasi ya</p>
									</div>
									<div class="col-lg-12">
										<div class="white-button first-button scroll-to-section">
											<a href="https://wa.me/6282171538531" target="__blank">Konsultasi Gratis <i class="fab fa-whatsapp"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
								<img src="<?= base_url(); ?>/assets/images/slider-dec.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
						<h4>Layanan <em>Luar Biasa</em> Untukmu</h4>
						<img src="<?= base_url(); ?>/assets/images/heading-line-dec.png" alt="">
						<p>Berangkat dari konsep "Kepuasan Client Adalah Nomor 1" maka kami berusaha semaksimal mungkin memberikan pelayanan yang bikin Client puas.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="service-item first-service">
						<div class="icon"></div>
						<h4>Murah Merona</h4>
						<p>Gak perlu khawatir masalah harga, disini uang adalah nomor 2.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-item second-service">
						<div class="icon"></div>
						<h4>Cepat Bagai Roket</h4>
						<p>Kami berkomitmen untuk menyelesaikan pekerjaan secepat roket.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-item third-service">
						<div class="icon"></div>
						<h4>Profesional</h4>
						<p>Layanan akan dikerjakan oleh pria pria sejati yang ahli dibidangnya.</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-item fourth-service">
						<div class="icon"></div>
						<h4>Support 24 Jam</h4>
						<p>Punya keluhan? konsultasi? atau revisi? apapun itu akan direspon meskipun kami sedang makan.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="about" class="about-us section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="section-heading">
						<h4>About <em>What We Do</em> &amp; Who We Are</h4>
						<img src="<?= base_url(); ?>/assets/images/heading-line-dec.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="box-item">
								<h4><a href="#">Maintance Problems</a></h4>
								<p>Lorem Ipsum Text</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="box-item">
								<h4><a href="#">24/7 Support &amp; Help</a></h4>
								<p>Lorem Ipsum Text</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="box-item">
								<h4><a href="#">Fixing Issues About</a></h4>
								<p>Lorem Ipsum Text</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="box-item">
								<h4><a href="#">Co. Development</a></h4>
								<p>Lorem Ipsum Text</p>
							</div>
						</div>
						<div class="col-lg-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor idunte ut labore et dolore adipiscing magna.</p>
							<div class="gradient-button">
								<a href="#">Start 14-Day Free Trial</a>
							</div>
							<span>*No Credit Card Required</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="right-image">
						<img src="<?= base_url(); ?>/assets/images/about-right-dec.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="clients" class="the-clients">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="section-heading">
						<h4>Penilaian <em>Client</em> Tentang Kami</h4>
						<img src="<?= base_url(); ?>/assets/images/heading-line-dec.png" alt="">
						<p>Berikut penilaian Client sebelum kamu terhadap pelayanan kami.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="naccs">
						<div class="grid">
							<div class="row">
								<div class="col-lg-7 align-self-center">
									<div class="menu">
										<div class="first-thumb active">
											<div class="thumb">
												<div class="row">
													<div class="col-lg-4 col-sm-4 col-12">
														<h4>Alwan Aditia</h4>
														<span class="date">02 November 2021</span>
													</div>
													<div class="col-lg-4 col-sm-4 d-none d-sm-block">
														<span class="category">Mahasiswa</span>
													</div>
													<div class="col-lg-4 col-sm-4 col-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<span class="rating">4.8</span>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="thumb">
												<div class="row">
													<div class="col-lg-4 col-sm-4 col-12">
														<h4>Zeldianto</h4>
														<span class="date">28 Februari 2022</span>
													</div>
													<div class="col-lg-4 col-sm-4 d-none d-sm-block">
														<span class="category">Software Engineer</span>
													</div>
													<div class="col-lg-4 col-sm-4 col-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<span class="rating">4.7</span>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="thumb">
												<div class="row">
													<div class="col-lg-4 col-sm-4 col-12">
														<h4>Ayyub Zikri</h4>
														<span class="date">11 Januari 2022</span>
													</div>
													<div class="col-lg-4 col-sm-4 d-none d-sm-block">
														<span class="category">Mahasiswa</span>
													</div>
													<div class="col-lg-4 col-sm-4 col-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<span class="rating">4.7</span>
													</div>
												</div>
											</div>
										</div>
										<div>
											<div class="thumb">
												<div class="row">
													<div class="col-lg-4 col-sm-4 col-12">
														<h4>Random User</h4>
														<span class="date">24 November 2021</span>
													</div>
													<div class="col-lg-4 col-sm-4 d-none d-sm-block">
														<span class="category">Mahasiswa</span>
													</div>
													<div class="col-lg-4 col-sm-4 col-12">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<span class="rating">4.9</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-5">
									<ul class="nacc">
										<li class="active">
											<div>
												<div class="thumb">
													<div class="row">
														<div class="col-lg-12">
															<div class="client-content">
																<img src="<?= base_url(); ?>/assets/images/quote.png" alt="">
																<p>“Pelayanannya bagus, lemah lembut walaupun saya banyak nanya, mantap lah pokoknya”</p>
															</div>
															<div class="down-content">
																<img src="<?= base_url(); ?>/assets/images/client-image.png" alt="">
																<div class="right-content">
																	<h4>Alwan Aditia</h4>
																	<span>Mahasiswa</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div>
												<div class="thumb">
													<div class="row">
														<div class="col-lg-12">
															<div class="client-content">
																<img src="<?= base_url(); ?>/assets/images/quote.png" alt="">
																<p>“Harga murah, project lebih cepat selesai dari perkiraan, support yang diberikan juga cepat.”</p>
															</div>
															<div class="down-content">
																<img src="<?= base_url(); ?>/assets/images/client-image.png" alt="">
																<div class="right-content">
																	<h4>Zeldianto</h4>
																	<span>Software Engineer</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div>
												<div class="thumb">
													<div class="row">
														<div class="col-lg-12">
															<div class="client-content">
																<img src="<?= base_url(); ?>/assets/images/quote.png" alt="">
																<p>“Harga sangat ramah dikantong mahasiswa, cepat selesai, perbaikan dikerjakan sangat cepat.”</p>
															</div>
															<div class="down-content">
																<img src="<?= base_url(); ?>/assets/images/client-image.png" alt="">
																<div class="right-content">
																	<h4>Ayyub Zikri</h4>
																	<span>Mahasiswa</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div>
												<div class="thumb">
													<div class="row">
														<div class="col-lg-12">
															<div class="client-content">
																<img src="<?= base_url(); ?>/assets/images/quote.png" alt="">
																<p>“Dapat info dari teman, ternyata benar disini skripsi murah dan cepat pengerjaannya.”</p>
															</div>
															<div class="down-content">
																<img src="<?= base_url(); ?>/assets/images/client-image.png" alt="">
																<div class="right-content">
																	<h4>Random User</h4>
																	<span>Mahasiswa</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="pricing" class="pricing-tables">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="section-heading">
						<h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
						<img src="<?= base_url(); ?>/assets/images/heading-line-dec.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pricing-item-regular">
						<h4>Pemasangan Jaringan</h4>
						<div class="icon">
							<img src="<?= base_url(); ?>/assets/images/pricing-table-01.png" alt="">
						</div>
						<ul>
							<li>Harga mulai dari Rp. 100.000</li>
							<li>Bebas konsultasi kapanpun</li>
							<li>Instalasi LAN, perbaikan & maintenance jaringan</li>
							<li>Support 24 jam</li>
						</ul>
						<div class="border-button">
							<a href="#">Purchase This Plan Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pricing-item-pro">
						<h4>Skripsi & Tugas Akhir</h4>
						<div class="icon">
							<img src="<?= base_url(); ?>/assets/images/pricing-table-01.png" alt="">
						</div>
						<ul>
							<li>Harga mulai dari Rp. 1.000.000</li>
							<li>Bebas konsultasi kapanpun</li>
							<li>Revisi dikerjakan sampai tamat</li>
							<li>Support 24 jam</li>
						</ul>
						<div class="border-button">
							<a href="#">Purchase This Plan Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pricing-item-regular">
						<h4>IT Support</h4>
						<div class="icon">
							<img src="<?= base_url(); ?>/assets/images/pricing-table-01.png" alt="">
						</div>
						<ul>
							<li>Install PC, Laptop, Software, Hardware, dll.</li>
							<li>Bebas konsultasi kapanpun</li>
							<li>Lisensi software seumur hidup</li>
							<li>Support 24 jam</li>
						</ul>
						<div class="border-button">
							<a href="#">Purchase This Plan Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="section-heading">
						<h4>Join our mailing list to receive the news &amp; latest trends</h4>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-3">
					<form id="search" action="#" method="GET">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<fieldset>
									<input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
								</fieldset>
							</div>
							<div class="col-lg-6 col-sm-6">
								<fieldset>
									<button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
								</fieldset>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget">
						<h4>Contact Us</h4>
						<p>Kota Padang - Sumatera Barat</p>
						<p><a href="#">0821-7153-8531</a></p>
						<p><a href="#">service@organikita.com</a></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-widget">
						<h4>About Us</h4>
						<ul>
							<li><a href="#top">Home</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#pricing">Pricing</a></li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-lg-4">
					<div class="footer-widget">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="#">Free Apps</a></li>
							<li><a href="#">App Engine</a></li>
							<li><a href="#">Programming</a></li>
							<li><a href="#">Development</a></li>
							<li><a href="#">App News</a></li>
						</ul>
						<ul>
							<li><a href="#">App Dev Team</a></li>
							<li><a href="#">Digital Web</a></li>
							<li><a href="#">Normal Apps</a></li>
						</ul>
					</div>
				</div> -->
				<div class="col-lg-4">
					<div class="footer-widget">
						<h4>About Our Company</h4>
						<div class="logo">
							<h6>IT Solution Organikita</h5>
						</div>
						<p>Merupakan perusahaan anak dari Organikita Indonesia dibidang IT.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="copyright-text">
						<p>Copyright © 2022 IT Solution Organikita. All Rights Reserved.
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Scripts -->
	<script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/owl-carousel.js"></script>
	<script src="<?= base_url(); ?>/assets/js/animation.js"></script>
	<script src="<?= base_url(); ?>/assets/js/imagesloaded.js"></script>
	<script src="<?= base_url(); ?>/assets/js/popup.js"></script>
	<script src="<?= base_url(); ?>/assets/js/custom.js"></script>
</body>

</html>