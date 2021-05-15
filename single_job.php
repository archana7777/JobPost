<?php
include 'db.php'
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/single-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Single Job &ndash; Specialty</title>
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
		if(isset($_SESSION['s_id']))
		{
		include 'header1.php';
		}
		else
		{
		include'header.php';
		}
		?>
			<div class="page-hero" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
                   <?php 
	$qry= "select * from tbl_jobpost where j_id=".$_GET['id']."";
	foreach($conn->query($qry) as $var)
	{
	?>
					<div class="row">
						<div class="col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title"><?php echo $var['j_title']; ?></h1>
								<div class="page-hero-details">
									<span class="item-badge job-type-full-time"><?php echo $var['j_type'];?></span>
									<span class="entry-location"><?php echo $var['j_loc'];?></span>
									<span class="entry-company"><?php echo $var['c_name'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<main class="main main-elevated">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-xs-12">
							<div class="content-wrap">
								<article class="entry">
                                <div class="entry-content">
									<div class="entry-content">
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
                                </div>
                                
                                       
                                       
                                    </div>
									<div class="entry-content">
                                    <ul><h2> Company Details :</h2></ul>
										<li><b>Name</b> - <?php echo $var['c_name'];?></li><br/>
                                        <li><b>Location</b> - <?php echo $var['c_loc'];?></li><br/>
                                        <li><b> Website</b> - <?php echo $var['c_web'];?></li><br/>
                                        <li><b>Mail </b>- <?php echo $var['c_mail'];?></li><br/>
                                        <li><b> Contact </b>- <?php echo $var['c_contact'];?></li>
										<ul><h2>Job Description :</h2></ul>
                                        
										<?php echo $var['j_desc'];?>
										<ul><h3>Candidate Profile :</h3></ul>
										<li><b>Title</b> - <?php echo $var['j_title'];?></li><br/>
                                        <li><b>Location</b> - <?php echo $var['j_loc'];?></li><br/>
                                        <li><b>Type</b> - <?php echo $var['j_type'];?></li><br/>
                                        <li><b>category </b>- <?php echo $var['j_cat'];?></li><br/>
                                        <li><b>Qualification </b>- <?php echo $var['j_qualification'];?></li><br/>
                                        <li><b>Experience </b>- <?php echo $var['j_exp'];?></li><br/>
                                       <li> <b>Vacancy</b> - <?php echo $var['j_vac'];?></li><br/>
                                         <li><b>Salary </b>- <?php echo $var['j_sal'];?></li>
									</div>
								</article>
								 <?php
								if(isset($_SESSION['s_id']))
								{
								$cnt = 0;
								$qry1 = "select count(*) as cnt from apply_job where stud_id=".$_SESSION['s_id']." and jb_id=".$_GET['id']."";
								foreach($conn->query($qry1) as $var)
								{
								$cnt = $var['cnt'];
								}
								if($cnt > 0)
								{
								
								?>
								<a href="#" class="btn btn-block btn-apply-content" button style="background-color:#00CC00">Applied</a>
                                <?php
								}
								else
								{
								?>
                                	<a href="apply_job_insert.php?id=<?php echo $_GET['id']; ?>" class="btn btn-block btn-apply-content">Apply Now</a>
                                    <?php
								}
								}
								else
								{
								 ?>
								<a href="login.php" class="btn btn-block btn-apply-content">Apply Now</a>
                              <?php
								
								}
								?>
								</div>

							<div class="content-wrap-footer">
								<div class="row">
									<div class="col-md-8 col-xs-12">
										<div class="entry-sharing">
											Share this Job:
											<a href="#" class="entry-share entry-share-facebook">Facebook</a>
											<a href="#" class="entry-share entry-share-twitter">Twitter</a>
											<a href="#" class="entry-share entry-share-google-plus">Google+</a>
											<a href="#" class="entry-share entry-share-linkedin">LinkedIn</a>
											<a href="#" class="entry-share entry-share-email">Email</a>
										</div>
									</div>

									<div class="col-md-4 col-xs-12 text-right">
										<a href="#">Report this listing</a>
									</div>
								</div>
							</div>
						</div>
                        
						<div class="col-xl-3 col-lg-4 col-xs-12">
							<div class="sidebar">
								
								<aside class="widget widget_ci-company-info-widget">
									<h3 class="widget-title">Company Information</h3>

									<div class="card-info">
										<div class="card-info-media">
											<figure class="card-info-thumb">
												<img src="images/company-logo.jpg" alt="">
											</figure>

											<div class="card-info-details">
												<p class="card-info-title"><?php echo $var['c_name'];?></p>
												<p class="card-info-link">
													<a href="#"><?php echo $var ['c_web'];?></a>
												</p>

												<div class="card-info-socials">
													<a href="#">
														<i class="fa fa-facebook"></i>
													</a>
													<a href="#">
														<i class="fa fa-twitter"></i>
													</a>
													<a href="#">
														<i class="fa fa-linkedin"></i>
													</a>
													<a href="#">
														<i class="fa fa-google-plus"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="card-info-description">
											<p>There’s a lot of opportunity here to work on a wide range of very challenging projects and to grow quickly.</p>
										</div>
									</div>
								</aside>
								
								<aside class="widget widget_ci-callout-widget">
									<div class="callout-wrapper">
										<img class="callout-thumb" src="images/logo-dark.png" alt="">

										<p>
											<strong>Find the right pros for your business. Post a new job today</strong>
										</p>
										<a href="job_post.php" class="btn btn-round btn-transparent">Post a new job</a>
									</div>
								</aside>
							</div>
						</div>
                        <?php } ?>
					</div>
				</div>
			</main>

			<?php include 'footer.php'
			?>
		</div>
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
		</script>
        <script type="text/javascript">
	
        </script>

	</body>
</html>