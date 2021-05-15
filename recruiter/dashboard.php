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
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Dashboard &ndash; Specialty</title>
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
		include 'header.php'
		?>
			
			<div class="page-hero" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">Dashboard</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
            

			<main class="main main-elevated">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-xs-12">
							<div class="content-wrap">
								<article class="entry">
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

										<div id="job-manager-job-dashboard">
											<table class="job-manager-jobs">
												<thead>
													<tr>
														<th class="job_title">Title</th>
														<th class="date">Date Posted</th>
														<th class="expires">Listing Expires</th>
                                                        <th class="apply">Applied</th>
                                                        <th class="status">Status</th>
													</tr>
												</thead>
											<tbody>
                                                
                                                
                                                <?php
                $qry1 = "select * from tbl_jobpost where j_reg_id=".$_SESSION['id']."";
                foreach($conn->query($qry1) as $var)
                {
                ?>
													<tr>
														<td class="job_title">
															<a href="single_job.php?id=<?php echo $var ['j_id']; ?>"><?php echo $var ['j_title']; ?></a>
															<ul class="job-dashboard-actions">
																<li>
																	<a href="job_edit.php?id=<?php echo $var ['j_id']; ?>"> Edit</a>
																</li>
                                                                <li>
																	<a href="job_delete.php?id=<?php echo $var ['j_id']; ?>" onClick="return confirm('Are you sure to delete this')" class="job-dashboard-action-delete">Delete</a>
																</li>
															</ul>
														</td>

														
														<td class="date">
															<?php echo date("d-M-Y",strtotime($var ['date_posted'])); ?>
														</td>
														<td class="expires">
															<?php echo date("d-M-Y",strtotime( $var ['listing_expire'])); ?>
														</td>
                                                       
                                                        <?php
														$qry = "select count(*) as cnt from apply_job where jb_id=".$var['j_id']."";
														foreach($conn->query($qry) as $row)
														{
														?>
                                                        	 <td class="count"><a href="application_details.php?id=<?php echo $var ['j_id']; ?>"><?php echo $row['cnt'];?></a>
                                                            </td>
                                                        <?php } ?>
                                                        <td class="status">
                                                        <?php
														if($var ['j_status'] == 'Active')
														{
														?>
                                                        	 <a href ="status_chng.php?id=<?php echo $var ['j_id']; ?>" class="btn-sm btn-danger"  ><button class="btn btn-sm" style="background-color:#00CC00"> <?php echo $var ['j_status'];?> </button></a>
                                                             <?php } else { ?>
                                                             	 <a href ="status_chng.php?id=<?php echo $var ['j_id']; ?>" class="btn-sm btn-danger"  ><button class="btn btn-sm" style="background-color:#FF0000"> <?php echo $var ['j_status'];?> </button></a>
                                                                 <?php } ?>
                                                             
															
														</td>
													</tr>

												<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</article>
							</div>

							<div class="content-wrap-footer">
								<div class="row">
									<div class="col-md-8 col-xs-12">
										<div class="entry-sharing">
											Share it:
											<a href="#" class="entry-share entry-share-facebook">Facebook</a>
											<a href="#" class="entry-share entry-share-twitter">Twitter</a>
											<a href="#" class="entry-share entry-share-google-plus">Google+</a>
											<a href="#" class="entry-share entry-share-linkedin">LinkedIn</a>
											<a href="#" class="entry-share entry-share-email">Email</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
            <?php 
			include 'footer.php'
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

<!-- Mirrored from www.cssigniter.com/themeforest/specialty/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
</html>