<?php
include 'db.php';
if(isset($_SESSION['id']))
{
}
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Notification &ndash; Specialty</title>
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
													<tr style="color:#6600FF">
														<th class="title">Title</th>
														<th class="cname">Company Name</th>
														<th class="date">Posting Date</th>
                                                        <th class="status">Status</th>
													</tr>
												</thead>
											<tbody>
       
                    <?php 
	$qry= "select tbl_jobpost.j_title,tbl_jobpost.c_name,apply_job.posting_date,apply_job.status from tbl_jobpost INNER JOIN apply_job ON tbl_jobpost.j_id=apply_job.jb_id INNER JOIN stud_reg ON apply_job.stud_id=stud_reg.reg_id where apply_job.stud_id=".$_SESSION['s_id']."";
	
	foreach($conn->query($qry) as $var)
	{
	?>
             <tr> <a href ="app_status.php?id=<?php echo $var['stud_id']; ?>"></a>
                                 	<td class="title" >
                                    <?php echo $var ['j_title']; ?>
                                    </td>
                                    <td class="cname">
                                    <?php echo $var ['c_name']; ?>
                                    </td>
                                    <td class="date">
                                    <?php echo $var ['posting_date']; ?>
                                    </td>
                                    <td class="status">
                                    <?php 
										if($var['status']=="Accepted")
										{
										?>
											<font color="#00FF00">Accepted</font>
                                        <?php
										}
										else
										{
										?>
                                        	<font color="#FF0000">Not Accepted</font>
                                        <?php
										}
									?>
                                    </td>
			</tr>
            <?php } ?>
												</tbody>
											</table>
									</div>
								</div>
								</article>
							</div>
						
			<?php 
			include 'footer.php'
			?>
			
		</div-->
		<!-- #page -->
		
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/jquery.mmenu.min.all.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script src="js/jquery.matchHeight.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/scripts.js"></script>
 

	</body>

<!-- Mirrored from www.cssigniter.com/themeforest/specialty/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
</html>