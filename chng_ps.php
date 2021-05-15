<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/auth.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Login / Register &ndash; Specialty</title>
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
		include 'header.php';
		}
		?>
			
			<div class="page-hero" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">Change Password</h1>
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

								
									<div class="col-lg-6 col-xs-12">
										<form action="chng_ps_cd.php" class="form-register" method="post" enctype="multipart/form-data">
											<!--<h3>Change Password</h3>-->

											<div class="form-field">
												<label for="username-register">Old Password</label>
												<input type="password" id="pwd"  class="pwd" name="pwd" value=""  required >
											</div>
											<div class="form-field">
												<label for="username-register">New Password</label>
												<input type="password" id="n_pwd" class="n_pwd" name="n_pwd" value=""  required >
											</div>

											<div class="form-field">
												<label for="password-register">confirm Password</label>
												<input type="password" id="c_pwd" class="c_pwd" name="c_pwd" value=""  required>
											</div>

											<div class="form-field">
												<!--<button type="submit" class="btn">Register</button>-->
                                                <input type="submit" class="login" id="lg" value="Update" onClick="return mail_chk()"/>
											</div>
										</form>
                                       <script type="text/javascript">
										
										function mail_chk()
										{
									var od=document.getElementById("pwd").value;
									var pd=document.getElementById("n_pwd").value;
									var c_pd=document.getElementById("c_pwd").value;
											if(od == "" )
											{
												alert("enter current password");
												return false;
											}
											else if(pd == "" )
											{
												alert("enter new password");
												return false;
											}
												else if(c_pd == "" )
											{
												alert("enter confirm password");
												return false;
											}
											else if(pd != c_pd)
											{
												alert("new password and confirm password must be same");
												return false;
											}
											else
											{
												return true;
											}
										}
										
										</script>
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

<!-- Mirrored from www.cssigniter.com/themeforest/specialty/auth.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:25 GMT -->
</html>