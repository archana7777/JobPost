<?php
include 'db.php';
if(isset($_SESSION['id']))
{
}
else
{
header('Location:reg.php');
}
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Submit Opening &ndash; Specialty</title>
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
			<header class="header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="mast-head">
								<h1 class="site-logo">
									<a href="index.html">
										<img src="images/logo-light.png" alt="">
									</a>
								</h1>
								<nav class="nav">
									<ul class="navigation-main">
										<li class="menu-item-home current-menu-item">
											<a href="index.html">Home</a>
										</li>
										<li>
											<a href="landing.html">Landing Page</a>
										</li>
										<li class="menu-item-has-children">
											<a href="blog.html">Listings</a>
											<ul class="sub-menu">
												<li>
													<a href="index.html">Job Listing</a>
												</li>
												<li>
													<a href="index-fullwidth.html">Job Listing Full</a>
												</li>
												<li>
													<a href="index-left-sidebar.html">Job Listing Left</a>
												</li>
												<li>
													<a href="blog.html">Blog</a>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Templates</a>
											<ul class="sub-menu">
												<li>
													<a href="single.html">Single Article</a>
												</li>
												<li>
													<a href="single-job.html">Single Job</a>
												</li>
												<li>
													<a href="page.html">Page Default</a>
												</li>
												<li>
													<a href="page-centered.html">Page Centered</a>
												</li>
												<li>
													<a href="page-fullwidth.html">Page Fullwidth</a>
												</li>
												<li>
													<a href="submit.html">Submit Listing</a>
												</li>
												<li>
													<a href="dashboard.html">Dashboard</a>
												</li>
												<li>
													<a href="auth.html">Login / Register</a>
												</li>
											</ul>
										</li>
										<li class="menu-item-btn">
											<a href="auth.html">Sign Up</a>
										</li>
									</ul>
									<!-- #navigation -->

									<a href="#mobilemenu" class="mobile-nav-trigger">
										<i class="fa fa-navicon"></i> Menu
									</a>
								</nav>
								<!-- #nav -->

								<div id="mobilemenu"></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="page-hero" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">Submit your opening</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<main class="main main-elevated">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="content-wrap">
								<article class="entry">
									<div class="entry-content">
										<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid animi delectus deleniti dicta dolor ducimus excepturi facere in, inventore ipsa iste nemo neque nulla odio officia pariatur, perspiciatis quia quis quos rerum, sunt tenetur!
											Ad dolore earum ipsum unde.</p>-->

										<!--<div class="box-message box-message-success">
											<div class="box-message-content">
												<p>Your listing has been received! Thank you for choosing Specialty!</p>
											</div>
										</div>-->

										<!--<div class="box-message box-message-error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li>Job title is required</li>
													<li>Description is required</li>
													<li>E-mail or URL is required</li>
												</ul>
											</div>
										</div>-->
                                        
                                        <?php
if(isset($_SESSION['sm']))
{
?>
								<div class="box-message box-message-success">
									<div class="box-message-content">
										<p><?php echo $_SESSION['sm']; 
										unset($_SESSION['sm']);?>
                                        </p>
									</div>
								</div>
<?php } else if(isset($_SESSION['wm']))
{
?>
							<div class="box-message box-message-error">
									<div class="box-message-content">
										<p><?php echo $_SESSION['wm']; 
										unset($_SESSION['wm']);?></p>

										
									</div>
								</div>
                                <?php } ?>
                                        <div class="box-message box-message-error" id="error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li><span id="err"></span></li>
													
												</ul>
											</div>
										</div>
										<form action="job_post_insert.php" method="post" enctype="multipart/form-data" class="form form-submit-listing">
											<div class="form-field form-field-inline">
												<label for="job-title">Job Title</label>

												<div class="field">
													<input type="text" id="job-title" name="j_title">
												</div>
                                              
											</div>

											<div class="form-field form-field-inline">
												<label for="job-location">Location
													<!--<small>(optional)</small>-->
												</label>

												<div class="field">
													<input type="text" id="job-location" value="Bhubaneswar" readonly>
													<!--<span class="field-hint">Leave this blank if location is not important</span>-->
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-type">Job Type</label>

												<div class="field">
													<div class="ci-select">
														<select id="job-type" name="j_type">
															<option value="">Choose a Job Type</option>
															<option value="full-time">Full Time</option>
															<option value="part-time">Part Time</option>
															<option value="contract">Contract</option>
															<option value="freelance">Freelance</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-category">Job Category</label>

												<div class="field">
                                                <input type="text" id="job-category" value="IT" readonly>
													<!--<div class="ci-select">
														<select id="job-category">
															<option value="0">Choose a Category</option>
                                                            <option value="marketing">IT</option>
															<option value="marketing">Marketing</option>
															<option value="engineering">Engineering</option>
															<option value="advertisement">Advertisement</option>
														</select>
													</div>-->
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-description">Description</label>

												<div class="field">
													<textarea id="job-description" name="j_desc" cols="10" rows="10"></textarea>
												</div>
											</div>
											
											<div class="form-field form-field-inline">
												<label for="job-contact">Application e-mail/URL</label>

												<div class="field">
													<input type="text" id="job-contact" name="j_reg_id">
												</div>
											</div>

											<h2 class="mb-2">Company Details</h2>

											<div class="form-field form-field-inline">
												<label for="job-company-name">Company Name</label>

												<div class="field">
													<input type="text" id="job-company-name" name="c_name" placeholder="Enter the name of your company">
												</div>
											</div>
											
                                            <div class="form-field form-field-inline">
												<label for="job-company-name">Location</label>

												<div class="field">
                                                	<input type="text" id="job-category" value="BBSR" readonly>
													<!--<input type="text" id="job-company-name" >-->
												</div>
											</div>
											<div class="form-field form-field-inline">
												<label for="job-company-website">Website
													<!--<small>(optional)</small>-->
												</label>

												<div class="field">
													<input type="text" id="job-company-website" name="c_web" placeholder="https:///">
												</div>
											</div>

											<!--<div class="form-field form-field-inline">
												<label for="job-company-tagline">Tagline
													<small>(optional)</small>
												</label>

												<div class="field">
													<input type="text" id="job-company-tagline" placeholder="Briefly describe your company">
												</div>
											</div>-->

											<div class="form-field form-field-inline">
												<label for="job-company-linkedin">Email
													<small>(contact person)</small>
												</label>

												<div class="field">
													<input type="text" id="job-company-linkedin" name="c_mail">
												</div>
											</div>
											
											<div class="form-field form-field-inline">
                                            	<label for="mobile-no">Mobile no
                                            		<small>(contact person)</small>
                                           	 	</label>
                                            	<div class="field">
                                            		<input type="text" value="" id="mobile-no" name="c_contact" onKeyPress="return validate(event);" maxlength="10"/>
                                            	</div>
											</div>
										<!--	<input type="submit" value="Register"  onClick="return mail_chk();"/>-->
											<button type="submit" class="btn" id="sbmt">Submit</button>
										</form>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">

							<div class="row">
								<div class="col-lg-3 col-md-6 col-xs-12">
									<aside class="widget widget_text group">
										<h3 class="widget-title">Text Widget</h3>
										<p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis
											aliquet egestas purus.</p>
									</aside>
									<!-- /widget -->
								</div>

								<div class="col-lg-3 col-md-6 col-xs-12">
									<aside class="widget widget_categories group">
										<h3 class="widget-title">Widget Title</h3>
										<ul>
											<li>
												<a href="#">Privacy Policy</a>
											</li>
											<li>
												<a href="#">Terms &amp; Conditions</a>
											</li>
											<li>
												<a href="#">Careers</a>
											</li>
											<li>
												<a href="#">History</a>
											</li>
											<li>
												<a href="#">Disclaimer</a>
											</li>
										</ul>
									</aside>
									<!-- /widget -->
								</div>

								<div class="col-lg-3 col-md-6 col-xs-12">
									<aside class="widget widget_categories group">
										<h3 class="widget-title">Widget Title</h3>
										<ul>
											<li>
												<a href="#">Privacy Policy</a>
											</li>
											<li>
												<a href="#">Terms &amp; Conditions</a>
											</li>
											<li>
												<a href="#">Careers</a>
											</li>
											<li>
												<a href="#">History</a>
											</li>
											<li>
												<a href="#">Disclaimer</a>
											</li>
										</ul>
									</aside>
									<!-- /widget -->
								</div>

								<div class="col-lg-3 col-md-6 col-xs-12">
									<!-- For a list of all supported social icons please see: http://fontawesome.io/icons/#brand -->

									<aside class="widget widget_ci_social_widget ci-socials group">
										<h3 class="widget-title">Socials</h3>

										<ul class="list-social-icons">
											<li>
												<a class="social-icon" href="#">
													<i class="fa fa-rss"></i>
												</a>
											</li>
											<li>
												<a class="social-icon" href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a class="social-icon" href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a class="social-icon" href="#">
													<i class="fa fa-pinterest-p"></i>
												</a>
											</li>
											<li>
												<a class="social-icon" href="#">
													<i class="fa fa-vimeo"></i>
												</a>
											</li>
											<li>
												<a class="social-icon" href="#">
													<i class="fa fa-medium"></i>
												</a>
											</li>
										</ul>
									</aside>
								</div>
							</div>

							<div class="footer-copy">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<p>
											<a href="#">Specialty</a> &ndash; Job Board Template by
											<a href="https://www.cssigniter.com/ignite" target="_blank">CSSIgniter</a>
										</p>
									</div>

									<div class="col-sm-6 col-xs-12 text-right">
										<p>Powered by
											<a href="https://www.cssigniter.com/ignite" target="_blank">CSSIgniter</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- #page -->
		
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/jquery.mmenu.min.all.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script src="js/jquery.matchHeight.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/scripts.js"></script>
        
        <script>
		$(document).ready(function(){
		$("#error").hide();
		$("#sbmt").click(function(){
	var title = $("#job-title").val();
	var type = $("#job-type").val();
	var desc =$("#job-description").val();
	var url = $ ("#job-contact").val();
	var cm = $ ("#job-company-name").val();
	var web = $ ("#job-company-website").val();
	var email = $("#job-company-linkedin").val();
	var mob = $ ("#mobile-no").val();

	if(title == "")
	{
	$("#error").show();
	$("#err").text("Please enter job title");
	return false;
	}
	else if(type == "")
	{
	$("#error").show();
	$("#err").text("Please select job type");
	$("#job-type").css("border","2px solid red");
	return false;
	}
	else if(desc == "")
	{
	$("#error").show();
	$("#err").text("Please enter the description");
	$("#job-description").css("border","2px solid red");
	return false;
	}
	else if(url == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Application e-mail/URL");
	$("#job-contact").css("border","2px solid red");
	return false;
	}
	else if(cm == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Company Name");
	$("#job-company-name").css("border","2px solid red");
	return false;
	}
	else if(web == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Company website");
	$("#job-company-website").css("border","2px solid red");
	return false;
	}
	else if(email == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Company Email");
	$("#job-company-linkedin").css("border","2px solid red");
	return false;
	}
	else if (mob == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Mobile number");
	$("#mobile-no").css("border","2px solid red");
	return false;
	}
	else
	{
	return true;
	}
		});
		});
		</script>
        <script type="text/javascript">
	function validate(key)
	{
	var kc = key.keyCode;
	if(!(kc == 8) && (kc<48 || kc>57))
	{
	return false;
	}
	return true;
	}
        </script>

	</body>

<!-- Mirrored from www.cssigniter.com/themeforest/specialty/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
</html>