<?php
include 'db.php';

?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:19:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Home &ndash; Specialty</title>
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
			
			<div class="page-hero page-hero-lg" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="page-hero-content">
								<h2 class="page-title">
									<span class="text-theme">Work there.</span> Find the dream job
									<br> you’ve always wanted.
								</h2>
								<!--<p class="page-subtitle">
									<span class="text-theme">405</span> new jobs in the last
									<span class="text-theme">7</span> days. Search now.
								</p>-->
							</div>
						</div>
					</div>
				</div>

				
					<div class="form-filter-header">
						<a href="#" class="form-filter-dismiss">&times;</a>
					</div>

					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-xs-12">
								<label for="job-location" class="sr-only">Job Location</label>
								<input type="text" id="job-location" placeholder="Location" value="Bhubaneswar" readonly>
							</div>
                            <div class="col-lg-3 col-xs-12">
								<label for="job-description" class="sr-only">Job Description</label>
							<input type="text" id="srch_key" placeholder="e.g. Php Developer">
							</div>
							<!--<div class="col-lg-3 col-xs-12">
								<!--<label for="job-category" class="sr-only">Job Category</label>
								<div class="ci-select">
									<select id="job-category">
										<option value="0">Category</option>
										<option value="1">Full Time</option>
										<option value="2">Part Time</option>
										<option value="3">Internship</option>
										<option value="4">Freelance</option>
										<option value="5">Contract</option>
									</select>
								</div>
							</div>-->
							<div class="col-lg-3 col-xs-12">
								<button class="btn btn-block" id="srch">Search</button>
							</div>
						</div>
					</div>
			
			</div>

			<main class="main">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-xs-12" id="result1">
							<h3 class="section-title">
                            <?php
							$qry = "select count(*) as cnt from tbl_jobpost where j_status='Active'";
							foreach($conn->query($qry) as $row)
							{
							?>
                         <span id="cnt">  <b><?php echo $row['cnt'];?></b> jobs found</span>
                     
                            <?php } ?>
							<div class="item-listing" id="result">
                             <?php
							$qry1 = "select * from tbl_jobpost where j_status='Active'";
							foreach($conn->query($qry1) as $var)
							{
							?>
								<div class="list-item">
									<div class="list-item-main-info">

										<p class="list-item-title">
											<a href="single_job.php?id=<?php echo $var ['j_id']; ?>"><?php echo $var ['j_title']; ?></a>
										</p>

										<div class="list-item-meta">
                                        	<a href="#" class="list-item-tag item-badge job-type-full-time"><?php echo $var ['j_type']; ?></a>
											<span class="list-item-company"><?php echo $var ['c_name']; ?></span>
											</div>
                                        </div>

									<div class="list-item-secondary-info">
										<p class="list-item-location?id=<?php echo $var ['j_id']; ?>"><?php echo $var ['j_loc']; ?></p>
										<time class="list-item-time" datetime="2017-01-01?id=<?php echo $var ['j_id']; ?>"><?php echo date("d-M-Y",strtotime( $var ['listing_expire'])); ?></time>
									</div>
                             </div>
							<?php } ?>
								
								<!--<div class="list-item-secondary-wrap">
									<a href="#" class="btn btn-round btn-white btn-transparent">Load More Jobs</a>
								</div>-->
							</div>
						</div>

						<div class="col-xl-3 col-lg-4 col-xs-12">
							<div class="sidebar-wrap">
								<div class="sidebar-wrap-header">
									<a href="#" class="sidebar-wrap-dismiss">&times;</a>
								</div>
								<div class="sidebar">
									<div class="widget widget_ci-filters-widget">
										<h3 class="widget-title">Job Type</h3>
										<ul class="item-filters-array">
											<li class="item-filter">
												<input type="checkbox" id="filter-1" class="checkbox-filter" checked>
												<label class="checkbox-filter-label" for="filter-1">
													<span class="item-filter-tag item-filter-tag-badge?id=<?php echo $var ['j_id']; ?>"><?php echo $var ['j_type']; ?>
														<!--<span class="item-filter-tag-bg job-type-full-time"></span>-->
													</span>
												</label>
											</li>
											<!--<li class="item-filter">
												<input type="checkbox" id="filter-2" class="checkbox-filter" checked>
												<label class="checkbox-filter-label" for="filter-2">
													<span class="item-filter-tag item-filter-tag-badge">
														Part Time
														<span class="item-filter-tag-bg job-type-part-time"></span>
													</span>
												</label>
											</li>
											<li class="item-filter">
												<input type="checkbox" id="filter-3" class="checkbox-filter">
												<label class="checkbox-filter-label" for="filter-3">
													<span class="item-filter-tag item-filter-tag-badge">
														Freelance
														<span class="item-filter-tag-bg job-type-freelance"></span>
													</span>
												</label>
											</li>
											<li class="item-filter">
												<input type="checkbox" id="filter-4" class="checkbox-filter">
												<label class="checkbox-filter-label" for="filter-4">
													<span class="item-filter-tag item-filter-tag-badge">
														Contract
														<span class="item-filter-tag-bg job-type-contract"></span>
													</span>
												</label>
											</li>-->
										</ul>
									</div>
									<!--<div class="widget widget_ci-filters-widget">
										<!--<h3 class="widget-title">Compensation</h3>-->
										<!--<ul class="item-filters-array">-->
											<!--<li class="item-filter">
												<input type="checkbox" id="filter-11" class="checkbox-filter">
												<label class="checkbox-filter-label" for="filter-11">
													<span class="item-filter-tag?id=<?php echo $var ['j_id']; ?>"><?php echo $var ['j_sal'];  ?></span>
												</label>
											</li>-->
											<!--<li class="item-filter">
												<input type="checkbox" id="filter-22" class="checkbox-filter" >
												<label class="checkbox-filter-label" for="filter-22">
													<span class="item-filter-tag">$50,001 - $75,000</span>
												</label>
											</li>
											<li class="item-filter">
												<input type="checkbox" id="filter-33" class="checkbox-filter">
												<label class="checkbox-filter-label" for="filter-33">
													<span class="item-filter-tag">$75,001 - $100,000</span>
												</label>
											</li>
											<li class="item-filter">
												<input type="checkbox" id="filter-44" class="checkbox-filter">
												<label class="checkbox-filter-label" for="filter-44">
													<span class="item-filter-tag">Over $100,000</span>
												</label>
											</li>-->
										<!--</ul>
									</div>-->
									<aside class="widget widget_ci-callout-widget">
										<div class="callout-wrapper">
											<img class="callout-thumb" src="images/logo-dark.png" alt="">

											<p>
												<strong>Find the right pros for your business. Post a new job today</strong>
											</p>

											<p class="text-secondary">From just
												<strong>$199</strong> for
												<strong>60 days</strong>
											</p>

											<a href="reg.php" class="btn btn-round btn-transparent">Post a new job</a>
										</div>
									</aside>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<div class="mobile-triggers">
				<a href="#" class="mobile-trigger form-filter-trigger">
					<i class="fa fa-search"></i> Search
				</a>

				<a href="#" class="mobile-trigger sidebar-wrap-trigger">
					<i class="fa fa-navicon"></i> Filters
				</a>
			</div>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
		$(document).ready(function(){
		$("#srch").click(function(){
		var val = $("#srch_key").val();
		if(val == "")
		{
		swal("Enter key word to search e.g. php");
		return false;
		}
		else
		{
		$.ajax({
		type:"post",
		datatype:"html",
		url:"search.php",
		data:{val:val},
		success:function(response){
		
	$("#result").empty().append(response);
	$("#cnt").empty();
		}
		})
		}
		
	
	
		});
		});
		</script>

	</body>

<!-- Mirrored from www.cssigniter.com/themeforest/specialty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:09 GMT -->
</html>