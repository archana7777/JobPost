<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/auth.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Register &ndash; Specialty</title>
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
								<h1 class="page-title">Register Account</h1>
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
                                <div class="col-lg-6 col-xs-12" style="margin:auto">
										<form action="signup_insert.php" class="form-register" method="post" enctype="multipart/form-data">
											<h3>Register</h3>
											<div class="form-field">
												<label for="name">Name</label>
												<input type="text" id="name" name="name">
											</div>
                                            <div class="form-field">
												<label for="qualification">Qualification</label>
												<input type="text" id="qualification" name="qualification">
											</div>
                                             <div class="form-field">
												<label for="resume">Resume</label>
												<input type="file" id="resume" name="resume">
											</div>
                                            <div class="form-field">
                                            	<label for="mobile-no">Mobile no
                                            		<small>(contact person)</small>
                                           	 	</label>
                                            		<input type="text" id="mobile_no" name="mobile_no" onKeyPress="return validate(event);" maxlength="10"/>
                                            	</div>
                                             <div class="form-field">
												<label for="email-register">E-mail</label>
												<input type="email" id="e_id" name="e_id">
											</div>

											<div class="form-field">
												<label for="username-register">Password</label>
												<input type="password" id="pwd" class="pwd" name="pwd" value="" >
											</div>

											<div class="form-field">
												<label for="password-register">confirm Password</label>
												<input type="password" id="c_pwd" class="c_pwd" name="c_pwd" value="">
											</div>

											<div class="form-field">
												 <input type="submit" class="login" id="sbmt"  value="Register"/>
                                            </div>
                                            
										</form>
                                       <!-- <script type="text/javascript">
										
										function mail_chk()
										{
										var pd=document.getElementById("pwd").value;
										var c_pd=document.getElementById("c_pwd").value;
								
											if(pd != c_pd)
											{
												alert("password should be match");
												return false;
											}
											else
											{
												return true;
											}
										}
										
										</script>-->
                                        <div>
                                            	<h3 style="color:#FF0000;"><small>if you are already registered</small> <a href="login.php"><button style="background-color:#00FF66;"type="signin" class="btn2 btn-sm">SignIn</button></a></h3>
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
	var Name = $("#name").val();
	var Qualification = $("#qualification").val();
	var Resume = $("#resume").val();
	var Mobileno = $("#mobile_no").val();
	var Email = $("#e_id").val();
	var password = $("#pwd").val();
	var c_password = $("#c_pwd").val();
	if(Name == "")
	{
	$("#error").show();
	$("#err").text("Please enter Name");
	$("#name").css("border","2px solid red");
	return false;
	}
		else if(Qualification == "")
	{
	$("#error").show();
	$("#err").text("Please enter Qualification");
	$("#qualification").css("border","2px solid red");
	return false;
	}
	else if(Resume == "")
	{
	$("#error").show();
	$("#err").text("Please Upload Resume");
	$("#resume").css("border","2px solid red");
	return false;
	}
	else if(Mobileno == "")
	{
	$("#error").show();
	$("#err").text("Please Enter Mobile no");
	$("#mobile_no").css("border","2px solid red");
	return false;
	}
	else if(Email == "")
	{
	$("#error").show();
	$("#err").text("Please Enter Email");
	$("#e_id").css("border","2px solid red");
	return false;
	}
	else if(password == "")
	{
	$("#error").show();
	$("#err").text("Please enter password");
	$("#pwd").css("border","2px solid red");
	return false;
	}
	else if(c_password == "")
	{
	$("#error").show();
	$("#err").text("Please enter confirm password");
	$("#c_pwd").css("border","2px solid red");
	return false;
	}
	else if(password != c_password)
	{
	alert("password should be match");
	return false;
	}
	else
	{
	return true;
	}
	});
		});
		</script>
        
	//<script>
//	$(document).ready(function(){
//	$("#error").hide();
//	$("#sbmt").click(function(){
//	
//	var Name = $("#name").val();
//	var Qualification = $("#qualification").val();
//	var Resume = $("#resume").val();
//	var Mobile no = $("#mobile_no").val();
//	var Email = $("#e_id").val();
//	var password = $("#pwd").val();
//	var c_password = $("#c_pwd").val();
//	if(Name == "")
//	{
//	$("#error").show();
//	$("#err").text("Please enter Name");
//	$("#name").css("border","2px solid red");
//	return false;
//	}
//	else if(Qualification == "")
//	{
//	$("#error").show();
//	$("#err").text("Please enter Qualification");
//	$("#qualification").css("border","2px solid red");
//	return false;
//	}
//	else if(Resume == "")
//	{
//	$("#error").show();
//	$("#err").text("Please Upload Resume");
//	$("#resume").css("border","2px solid red");
//	return false;
//	}
//	else if(Mobile no == "")
//	{
//	$("#error").show();
//	$("#err").text("Please Enter Mobile no");
//	$("#mobile_no").css("border","2px solid red");
//	return false;
//	}
//	else if(Email == "")
//	{
//	$("#error").show();
//	$("#err").text("Please Enter Email");
//	$("#e_id").css("border","2px solid red");
//	return false;
//	}
//	else if(password == "")
//	{
//	$("#error").show();
//	$("#err").text("Please enter password");
//	$("#pwd").css("border","2px solid red");
//	return false;
//	}
//	else if(c_password == "")
//	{
//	$("#error").show();
//	$("#err").text("Please enter confirm password");
//	$("#c_pwd").css("border","2px solid red");
//	return false;
//	}
//	else
//	{
//	return true;
//	}
//		});
//		});
//		</script>
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
</html>