<?php
include 'db.php';
if(isset($_SESSION['id']))
{
}
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
						<div class="col-xs-12">
                        	<h1 class="page-title">Apply Now !!!</h1>
                           </div>
							<div class="page-hero-content">
								<div class="item-listing">
                             <?php 
							$qry= "select * from tbl_jobpost where j_id=".$_GET['id']."";
							foreach($conn->query($qry) as $var)
							{
							?>
                           <p class="page-title">
									<b><a href="find_job.php?id=<?php echo $var ['j_id']; ?>"><?php echo $var ['j_title']; ?></a></b>
						   </p>
                           <?php
						   }
						   ?>
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
                                </div>
                                
                                        <div class="box-message box-message-error" id="error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li><span id="err"></span></li>
													
												</ul>
											</div>
										</div>
                                        
                                        <form action="apply_job_insert.php" method="post" enctype="multipart/form-data" class="form form-submit-listing">
											<div class="form-field form-field-inline">
												<label for="job-title">Name</label>

												<div class="field">
													<input type="text" id="nm" name="nm">
												</div>
                                              
											</div>
                                            <input type="hidden" name="jb_id" value="<?php echo $_GET['id']; ?>">
                                          
                                            
                                            <div class="form-field form-field-inline">
												<label for="job-qualification">Qualification</label>

												<div class="field">
													<input type="text" id="qua" name="qua">
												</div>
                                              
											</div>
                                            
                                            
											<div class="form-field form-field-inline">
												<label for="job-exp">Experience (if any)</label>

												<div class="field">
													<div class="ci-select">
                                                    
														<select id="exp" name="exp">
															<option value="">Choose Experience</option>
															<option value="Fresher">Fresher</option>
															<option value="6">6 month</option>
															<option value="1">1 year</option>
                                                            <option value="2">2 year</option>
                                                            <option value="3">3 year</option>
                                                            <option value="4">4 year</option>
                                                            <option value="5">5 year</option>
                                                            <option value="6">6 year</option>
														</select>
													</div>
												</div>
											</div>
                                            
                                            <div class="form-field form-field-inline">
												<label for="job-exp">Academic Year</label>

												<div class="field">
                                                	<div class="ci-select">
                                                	<select id="ac" name="ac">
															<option value="">Choose Academic Year</option>
                                                     <?php
													
													 for($i= 2000; $i<= 2019; $i++)
													 {
													 	?>
														 <option value="<?php echo $i ; ?>"><?php echo $i ;?></option>
                                                      <?php  
													}
													?>
													</select>
												</div>
											</div>
                                           </div>
                                           
                                            <div class="form-field form-field-inline">
												<label for="job-qualification">Upload Resume</label>

												<div class="field">
													<input type="file"  name="ur" id="ur"/><br/><br/>
												</div>
                                            </div>
										  <button type="submit" class="btn" id="sbmt">Submit</button>
                                            <a href="single_job.php?id=<?php echo $_GET['id']; ?>"> <button type="button" class="btn">Back</button> 
                                            	</a>
										</form>
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
	var name = $("#nm").val();
	var qua = $("#qua").val();
	var expr = $("#exp").val();	
	var acd = $("#ac").val();
	var ure = $ ("#ur").val();
	if(name == "")
	{
	$("#error").show();
	$("#err").text("Please enter Name");
	return false;
	}
	else if(qua == "")
	{
	$("#error").show();
	$("#err").text("Please select the Qualification");
	$("#qua").css("border","2px solid red");
	return false;
	}
	else if(expr == "")
	{
	$("#error").show();
	$("#err").text("Please select the experience");
	$("#exp").css("border","2px solid red");
	return false;
	}
	else if(acd == "")
	{
	$("#error").show();
	$("#err").text("Please select Experience");
	$("#ac").css("border","2px solid red");
	return false;
	}
	
	else if (ure == "")
	{
	$("#error").show();
	$("#err").text("Please Upload the Resume");
	$("#ur").css("border","2px solid red");
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
	
        </script>

	</body>
</html>