<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<title>Update Opening &ndash; Specialty</title>
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
						<div class="col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">Update your Profile</h1>
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
								<article class="entry">
									<div class="entry-content"> 
                                        <div class="box-message box-message-error" id="error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li><span id="err"></span></li>
													
												</ul>
											</div>
										</div>
                                        <?php 
	$qry= "select * from stud_reg where reg_id=".$_SESSION['s_id']."";
	foreach($conn->query($qry) as $var)
	{
	?>
                                        
										<form action="update.php" method="post" enctype="multipart/form-data" class="form form-submit-listing">
											<div class="form-field form-field-inline">
												<label for="name">Name</label>

												<div class="field">
													<input type="text" id="name" name="name"value="<?php echo $var['name']; ?>">
												</div>
                                              
											</div>
                                           <div class="form-field form-field-inline">
												<label for="job-qualification">Qualification</label>

												<div class="field">
													<input type="text" id="qua" name="qualification"value="<?php echo $var['qualification']; ?>">
												</div>
                                              
											</div>
                                            <div class="form-field form-field-inline">
												<label for="job-qualification">Resume</label>

												<div class="field">
													<input type="file" id="rs" name="resume">
												</div>
                                              
											</div>
                                            
                                            <div class="form-field form-field-inline">
												<label for="job-qualification">Experience</label>

												<div class="field">
													<input type="text" id="exp" name="experience" value="<?php echo $var['experience']; ?>">
												</div>
                                              
											</div>
                                            <div class="form-field form-field-inline">
												<label for="job-description">Address</label>

												<div class="field">
													<textarea id="text" name="address" cols="10" rows="10" value="<?php echo $var['address']; ?>"></textarea>
												</div>
											</div>
                                            <div class="form-field form-field-inline">
                                            	<label for="mobile-no">Mobile no
                                            		</label>
                                            	<div class="field">
                                            		<input type="text" id="mobile_no" onPaste="return false;" name="c_contact" onKeyPress="return validate(event);" minlength="10" maxlength="10"value="<?php echo $var['mobile_no']; ?>"/>
                                                </div>
											</div>
											<button type="submit" class="btn" id="sbmt">Update</button>
										</form>
                                        <?php } ?>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
			</main>
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
        
        <script>
		$(document).ready(function(){
		$("#error").hide();
		$("#sbmt").click(function(){
	var nm = $("#name").val();
	var quali = $("#qua").val();
	var expe = $("#exp").val();
	var addr = $("#add").val();
	var mob_no= $("#mobile_no").val();
	var e_id =$("#email").val();
	if(nm == "")
	{
	$("#error").show();
	$("#err").text("Please enter the name");
	$("#name").css("border","2px solid red");
	return false;
	}
	
	else if(quali == "")
	{
	$("#error").show();
	$("#err").text("Please enter the qualification");
	$("#qua").css("border","2px solid red");
	return false;
	}
	else if(expe == "")
	{
	$("#error").show();
	$("#err").text("Please enter the experience");
	$("#exp").css("border","2px solid red");
	return false;
	}
	else if(addr == "")
	{
	$("#error").show();
	$("#err").text("Please enter the address");
	$("#add").css("border","2px solid red");
	return false;
	}
	else if(mob_no == "")
	{
	$("#error").show();
	$("#err").text("Please enter the mobile-no");
	$("#mobile_no").css("border","2px solid red");
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