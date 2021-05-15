<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/auth.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Login &ndash; Specialty</title>
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
								<h1 class="page-title">Login </h1>
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
								<div class="box-message box-message-error" id="error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li><span id="err"></span></li>
													
												</ul>
											</div>
								</div>
								<div class="row" style="margin:auto">
									<div class="col-lg-6 col-xs-12">
                                    <form action="login_lg.php" method="post" class="form-login" enctype="multipart/form-data" >
                                    		<h3>Login</h3>
											<div class="form-field">
												<label for="username-login">Email-id</label>
												<input type="text" id="eid" name="eid">
											</div>

											<div class="form-field">
												<label for="username-password">Password</label>
												<input type="password" id="pd" name="pd">
											</div>

											<div class="form-field">
												<label>
													<input type="checkbox" /> Remember me
												</label>
											</div>

											<div class="form-field">
											<button type="submit" id="sbmt" class="btn  btn-sm" >Login</button>
                                            <button style="background-color:#FF0000" type="reset" class="btn1  btn-sm">Reset</button>
											</div>
                                            </form>
                                            <div>
                                            	<h3 style="color:#FF0000;"><small>if you are a new user</small><a href="signup.php"><button style="background-color:#00FF66" type="signup" class="btn2  btn-sm">SignUp</button></a></h3>
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
	<script>
	$(document).ready(function(){
	$("#error").hide();
	$("#sbmt").click(function(){
	var Email = $("#eid").val();
	var password = $("#pd").val();
	if(Email == "")
	{
	$("#error").show();
	$("#err").text("Please enter Email");
	$("#eid").css("border","2px solid red");
	return false;
	}
	else if(password == "")
	{
	$("#error").show();
	$("#err").text("Please enter password");
	$("#pd").css("border","2px solid red");
	return false;
	}
	else
	{
	return true;
	}
	});
		});
		</script>
	</body>
</html>