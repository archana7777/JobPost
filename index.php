<?php 
include 'db.php';
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Index Page &ndash; Specialty</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/mmenu.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/magnific.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

		<link rel="shortcut icon" href="#">
		<link rel="apple-touch-icon" href="#">
		<link rel="apple-touch-icon" sizes="72x72" href="#">
		<link rel="apple-touch-icon" sizes="114x114" href="#">
	</head>
	<body>

		<div id="page">
        <?php
		if (isset($_SESSION['s_id']))
		{
		 include 'header1.php';
		 }
		 else
		 {
		 include 'header.php';
		 }
		?>
			<div class="page-hero page-hero-xl page-hero-center page-hero-parallax" style="background-image: url(images/hero-landing-2.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">
									<span class="text-theme">Work there.</span> Find the dream job
									<br> you’ve always wanted.

								</h1>
								<p class="page-subtitle">
									<span class="text-theme">25</span> new jobs in the last
									<span class="text-theme">3</span> months. Search now.
								</p>

								<a href="find_job.php" class="btn btn-lg">Find a job</a>
							</div>
						</div>
					</div>
				</div>

				<div class="section-shape section-shape-bottom section-shape-bg-color">
					<svg style="height: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
						<path class="section-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
					</svg>
				</div>
			</div>

			<section class="widget-section">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-12">
							<div class="item text-center">
								<span class="item-icon">
									<i class="fa fa-sliders"></i>
								</span>

								<p class="item-title">Ultra Flexible</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna condimentum, sollicitudin felis ut, sodales augue. Suspendisse semper consectetur nulla, vel fringilla sapien fringilla quis.</p>
							</div>
						</div>

						<div class="col-md-4 col-xs-12">
							<div class="item text-center">
								<span class="item-icon">
									<i class="fa fa-tablet"></i>
								</span>

								<p class="item-title">Mobile Friendly</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna condimentum, sollicitudin felis ut, sodales augue. Suspendisse semper consectetur nulla, vel fringilla sapien fringilla quis.</p>
							</div>
						</div>

						<div class="col-md-4 col-xs-12">
							<div class="item text-center">
								<span class="item-icon">
									<i class="fa fa-life-saver"></i>
								</span>

								<p class="item-title">24/7 Support</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna condimentum, sollicitudin felis ut, sodales augue. Suspendisse semper consectetur nulla, vel fringilla sapien fringilla quis.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="widget-section widget-section-pad-lg widget-section-dark widget-section-overlay" style="background-image: url(images/hero-landing.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-8 col-md-10 col-xs-12">
							<h1 class="page-title">
								<span class="text-theme">Attract Top Talent.</span> Find the right candidates in no time.
							</h1>

							<p>
								<strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna condimentum, sollicitudin felis ut, sodales augue.
								</strong>
							</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna condimentum, sollicitudin felis ut, sodales augue. Suspendisse semper consectetur nulla, vel fringilla sapien fringilla quis.</p>

							<a href="recruiter/reg.php" class="btn btn-lg mt-1">Post a job</a>
						</div>
					</div>
				</div>

				<div class="section-shape section-shape-bottom section-shape-bg-color">
					<svg style="height: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
						<path class="section-shape-fill" d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
					</svg>
				</div>
			</section>

			<section class="widget-section">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-xs-12">
							<div class="item item-testimonial">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ante libero, mattis lobortis malesuada vel, pharetra quis lacus. Integer in quam ac felis pellentesque gravida. Donec eget iaculis felis. Nulla gravida in ligula eu euismod.</p>

								<div class="item-cite">
									<img src="images/avatar-1.jpg" alt="">

									<p class="item-cite-title">Margaret Smith</p>
									<p class="item-cite-subtitle">Customer</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-xs-12">
							<div class="item item-testimonial">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ante libero, mattis lobortis malesuada vel, pharetra quis lacus. Integer in quam ac felis pellentesque gravida. Donec eget iaculis felis. Nulla gravida in ligula eu euismod.</p>

								<div class="item-cite">
									<img src="images/avatar-2.jpg" alt="">

									<p class="item-cite-title">Mary Jones</p>
									<p class="item-cite-subtitle">Recruiter</p>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-xs-12">
							<div class="item item-testimonial">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ante libero, mattis lobortis malesuada vel, pharetra quis lacus. Integer in quam ac felis pellentesque gravida. Donec eget iaculis felis. Nulla gravida in ligula eu euismod.</p>

								<div class="item-cite">
									<img src="images/avatar-3.jpg" alt="">

									<p class="item-cite-title">Billy Smith</p>
									<p class="item-cite-subtitle">Recruiter</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="widget-section widget-section-dark widget-section-split widget-section-overlay" style="background-image: url(images/hero-2.jpg);">
				<div class="section-shape section-shape-top section-shape-bg-color">
					<svg style="height: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
						<path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"></path>
						<path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path>
						<path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path>
					</svg>
				</div>

				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-4 col-xs-12">
							<div class="text-right">
								<h2>Ultra Flexible</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit commodo sem, sit amet vehicula tortor scelerisque fringilla.</p>

								<h2>Fully Responsive</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit commodo sem, sit amet vehicula tortor scelerisque fringilla.</p>

								<h2>SEO Ready</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit commodo sem, sit amet vehicula tortor scelerisque fringilla.</p>
							</div>
						</div>

						<div class="col-xl-4 col-xs-12">
							<div class="text-center">
								<img src="images/iphone-1.png" alt="">
							</div>
						</div>

						<div class="col-xl-4 col-xs-12">
							<div class="text-left">
								<h2>24/7 Support</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit commodo sem, sit amet vehicula tortor scelerisque fringilla.</p>

								<h2>Stunning Design</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit commodo sem, sit amet vehicula tortor scelerisque fringilla.</p>

								<h2>Landing Pages</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit commodo sem, sit amet vehicula tortor scelerisque fringilla.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="section-shape section-shape-bottom section-shape-bg-color">
					<svg style="height: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
						<path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"></path>
						<path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"></path>
						<path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"></path>
					</svg>
				</div>
			</section>

			<!--<section class="widget-section">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="widget-section-title">Latest Jobs</h2>

							<div class="item-listing">
								<div class="list-item list-item-featured">
									<div class="list-item-main-info">
										<p class="list-item-title-eyebrow">Featured</p>

										<p class="list-item-title">
											<a href="single-job.html">Hardware Design Lead Engineer</a>
										</p>

										<div class="list-item-meta">
											<a href="#" class="list-item-tag item-badge job-type-full-time">Full Time</a>
											<span class="list-item-company">Alpha, Inc</span>
										</div>
									</div>

									<div class="list-item-secondary-info">
										<p class="list-item-location">Vienna</p>
										<time class="list-item-time" datetime="2017-01-01">3 hours ago</time>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-main-info">
										<p class="list-item-title">
											<a href="single-job.html">User Experience Designer</a>
										</p>

										<div class="list-item-meta">
											<a href="#" class="list-item-tag item-badge job-type-contract">Contract</a>
											<span class="list-item-company">McIntire Solutions, LLC</span>
										</div>
									</div>

									<div class="list-item-secondary-info">
										<p class="list-item-location">Richmond, VA</p>
										<time class="list-item-time" datetime="2017-01-01">3 hours ago</time>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-main-info">
										<p class="list-item-title">
											<a href="single-job.html">Big Data Devops Engineer</a>
										</p>

										<div class="list-item-meta">
											<a href="#" class="list-item-tag item-badge job-type-contract">Contract</a>
											<span class="list-item-company">Beta, Inc</span>
										</div>
									</div>

									<div class="list-item-secondary-info">
										<p class="list-item-location">San Francisco, CA</p>
										<time class="list-item-time" datetime="2017-01-01">1 week ago</time>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-main-info">
										<p class="list-item-title">
											<a href="single-job.html">Junior Product Marketing Manager</a>
										</p>

										<div class="list-item-meta">
											<a href="#" class="list-item-tag item-badge job-type-part-time">Part Time</a>
											<span class="list-item-company">McIntire Solutions</span>
										</div>
									</div>

									<div class="list-item-secondary-info">
										<p class="list-item-location">Athens, Greece</p>
										<time class="list-item-time" datetime="2017-01-01">1 week ago</time>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-main-info">
										<p class="list-item-title">
											<a href="single-job.html">ReactJS/RoR Engineer</a>
										</p>

										<div class="list-item-meta">
											<a href="#" class="list-item-tag item-badge job-type-full-time">Full Time</a>
											<span class="list-item-company">Alpha, Inc</span>
										</div>
									</div>

									<div class="list-item-secondary-info">
										<p class="list-item-location">San Marino</p>
										<time class="list-item-time" datetime="2017-01-01">2 weeks ago</time>
									</div>
								</div>

								<div class="list-item-secondary-wrap">
									<a href="index.html" class="btn btn-round btn-white btn-transparent">View More Jobs</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section-->

			<?php include 'footer.php'
			?>
			
		</div>
		<!-- #page -->

		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/jquery.mmenu.min.all.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script src="js/jquery.matchHeight.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>

<!-- Mirrored from www.cssigniter.com/themeforest/specialty/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:23 GMT -->
</html>