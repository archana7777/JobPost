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
        <?php 
		include 'header.php'
		?>
			<div class="page-hero" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">Applicant Details </h1>
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
                                <tr style="color:#6600FF">
                                	<th class="name">NAME</th>
                                    <th class="qua">Qualification</th>
                                     <th class="mobile_no">Mobile_no</th>
                                    <th class="experience">Experience</th>
                                    <th class="address">Address</th>
                                    <th class="status">Status</th>
                                    <th class="resume">Resume</th>
                                    <th class="download">Document</th>
                               </tr>
                                 </thead>
								<tbody>
                                 <?php
								 $qry = "select stud_reg.name,stud_reg.qualification,stud_reg.mobile_no,stud_reg.experience,stud_reg.address,stud_reg.resume,apply_job.* from stud_reg INNER JOIN apply_job ON stud_reg.reg_id=apply_job.stud_id and apply_job.jb_id=".$_GET['id']."";
								foreach($conn->query($qry) as $var)
								{
								?>
                                 <tr>
                                 	<td class="nm" >
                                    <?php echo $var ['name']; ?>
                                    </td>
                                    <td class="qua">
                                    <?php echo $var ['qualification']; ?>
                                    </td>
                                    <td class="mob">
                                    <?php echo $var ['mobile_no']; ?>
                                    </td>
                                    <td class="expr">
                                    <?php echo $var ['experience']; ?>
                                    </td>
                                    <td class="address">
                                    <?php echo $var ['address']; ?>
                                    </td>
                                    
                                     <td class="status">
                                                        <?php
														if($var ['status'] == 'Not Accepted')
														{
														?>
                                                        	 <a href ="app_status.php?id=<?php echo $var['a_id']; ?>" class="btn-sm btn-danger"><button class="btn btn-sm" style="background-color:#FF0000"> <?php echo $var ['status'];?> </button></a>
                                                             <?php } else { ?>
                                                             	 <a href ="app_status.php?id=<?php echo $var['a_id']; ?>" class="btn-sm btn-danger"><button class="btn btn-sm" style="background-color:#00CC00"> <?php echo $var ['status'];?> </button></a>
                                                                 <?php } ?>
                                						
									</td>
                                    <td class="resume">
                                    <?php echo $var ['resume'];?>
                                    </td> 
                                    <td class="download">
                                    <a href="../student_resumes/<?php echo $var ['resume']; ?>" target="_blank"> <button type="submit" class="btn  btn-sm" >Download</button></a>
                                    </td>
                                   
                                </tr>
								<?php
								}
								?>
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