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
	
<!-- Mirrored from www.cssigniter.com/themeforest/specialty/submit.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Sep 2019 09:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
							<div class="page-hero-content">
								<h1 class="page-title">Submit your opening</h1>
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
										
										<!--<div class="box-message box-message-success">
											<div class="box-message-content">
												<p>Your listing has been received! Thank you for choosing Specialty!</p>
											</div>
										</div>-->

										<!--<div class="box-message box-message-error">
											<div class="box-message-content">
												<p>Some errors occured!</p>

												<ul class="box-message-errors">
													<li>Job title is required</li>
													<li>Description is required</li>
													<li>E-mail or URL is required</li>
												</ul>
											</div>
										</div>-->
                                        
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
                                        
										<form action="job_post_insert.php" method="post" enctype="multipart/form-data" class="form form-submit-listing">
											<div class="form-field form-field-inline">
												<label for="job-title">Job Title</label>

												<div class="field">
													<input type="text" id="job_title" name="j_title">
												</div>
                                              
											</div>
                                          
                                            <div class="form-field form-field-inline">
												<label for="Listing-expire">Listing Expire</label>

												<div class="field">
													<input type="date" id="listing_expire" name="j_expire">
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-location">Location
													<!--<small>(optional)</small>-->
												</label>

                                              
												<div class="field">
													<input type="text" id="job_location"  name="j_loc" value="Bhubaneswar" readonly>
													<!--<span class="field-hint">Leave this blank if location is not important</span>-->
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-type">Job Type</label>

												<div class="field">
													<div class="ci-select">
														<select id="job_type" name="j_type">
															<option value="">Choose a Job Type</option>
															<option value="full-time">Full Time</option>
															<option value="part-time">Part Time</option>
															<option value="contract">Contract</option>
															<option value="freelance">Freelance</option>
														</select>
													</div>
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-category">Job Category</label>

												<div class="field">
                                                <input type="text" id="job_category" name="j_cat" value="IT" readonly>
													<!--<div class="ci-select">
														<select id="job-category">
															<option value="0">Choose a Category</option>
                                                            <option value="marketing">IT</option>
															<option value="marketing">Marketing</option>
															<option value="engineering">Engineering</option>
															<option value="advertisement">Advertisement</option>
														</select>
													</div>-->
												</div>
											</div>
                                            
                                            <div class="form-field form-field-inline">
												<label for="job-qualification">Job Qualification</label>

												<div class="field">
													<input type="text" id="job_qualification" name="j_qualification">
												</div>
                                              
											</div>
                                            
                                            
											<div class="form-field form-field-inline">
												<label for="job-exp">Job Experience</label>

												<div class="field">
													<div class="ci-select">
                                                    
														<select id="job_experience" name="j_exp">
															<option value="">Choose a Job Experience</option>
															<option value="Fresher">Fresher</option>
															<option value="0-6">0-6 month</option>
															<option value="1">1 year</option>
															<option value="2">2 year</option>
                                                            <option value="3">3 year</option>
                                                            <option value="4">4 year</option>
                                                            <option value="5">5 year</option>
														</select>
													</div>
												</div>
											</div>
                                            
                                            <div class="form-field form-field-inline">
												<label for="job-exp">Salary</label>

												<div class="field">
													
														
                                                        <input type="text" id="j_salary" name="j_sal">
															
												
												</div>
											</div>

											<div class="form-field form-field-inline">
												<label for="job-description">Description</label>

												<div class="field">
													<textarea id="job_description" name="j_desc" cols="10" rows="10"></textarea>
												</div>
											</div>
											
											<div class="form-field form-field-inline">
												<label for="job-contact">Vacancy</label>

												<div class="field">
													<input type="number" id="job_vac" name="j_vac">
												</div>
											</div>

											<h2 class="mb-2">Company Details</h2>

											<div class="form-field form-field-inline">
												<label for="job-company-name">Company Name</label>

												<div class="field">
													<input type="text" id="job_company_name" name="c_name" placeholder="Enter the name of your company">
												</div>
											</div>
											
                                            <div class="form-field form-field-inline">
												<label for="job-company-name">Location</label>

												<div class="field">
                                                	<input type="text" id="job_category" name="c_loc" value="BBSR" readonly>
													<!--<input type="text" id="job-company-name" >-->
												</div>
											</div>
											<div class="form-field form-field-inline">
												<label for="job-company-website">Website
													<!--<small>(optional)</small>-->
												</label>

												<div class="field">
													<input type="text" id="job_company_website" name="c_web" placeholder="https:///">
												</div>
											</div>
                                            
											<div class="form-field form-field-inline">
												<label for="job-company-linkedin">Email
													<small>(contact person)</small>
												</label>

												<div class="field">
													<input type="text" id="job_company_linkedin" name="c_mail">
												</div>
											</div>
											
											<div class="form-field form-field-inline">
                                            	<label for="mobile-no">Mobile no
                                            		<small>(contact person)</small>
                                           	 	</label>
                                            	<div class="field">
                                            		<input type="text" value="" id="mobile_no" name="c_contact" onKeyPress="return validate(event);" maxlength="10"/>
                                            	</div>
											</div>
										<!--	<input type="submit" value="Register"  onClick="return mail_chk();"/>-->
											<button type="submit" class="btn" id="sbmt">Submit</button>
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
	var title = $("#job_title").val();
	var date_p = $("#date_posted").val();
	var date_e = $("#listing_expire").val();
	var type = $("#job_type").val();
	var qua = $("#job_qualification").val();
	var expr = $("#job_experience").val();
	var sal = $("#j_salary").val();
	var desc =$("#job_description").val();
	var desc_len = desc.length;
	var vac = $("#job_vac").val();
	var url = $ ("#job_contact").val();
	var cm = $ ("#job_company_name").val();
	var web = $ ("#job_company_website").val();
	var email = $("#job_company_linkedin").val();
	var mob = $ ("#mobile_no").val();

	if(title == "")
	{
	$("#error").show();
	$("#err").text("Please enter job title");
	$("#job_title").css("border","2px solid red");
	return false;
	}
	else if(date_e == "")
	{
	$("#error").show();
	$("#err").text("Please select the job expire date");
	$("#listing_expire").css("border","2px solid red");
	return false;
	}
	else if(type == "")
	{
	$("#error").show();
	$("#err").text("Please select job type");
	$("#job_type").css("border","2px solid red");
	return false;
	}
	else if(qua == "")
	{
	$("#error").show();
	$("#err").text("Please select the Qualification");
	$("#job_qualification").css("border","2px solid red");
	return false;
	}
	else if(expr == "")
	{
	$("#error").show();
	$("#err").text("Please select the job experience");
	$("#job_experience").css("border","2px solid red");
	return false;
	}
	else if(sal == "")
	{
	$("#error").show();
	$("#err").text("Please select the salary of the job");
	$("#j_salary").css("border","2px solid red");
	return false;
	}
	else if(desc == "" || desc_len < 20)
	{
	$("#error").show();
	$("#err").text("Please enter the description minimum 200 characters");
	$("#job_description").css("border","2px solid red");
	return false;
	}
	else if(vac == "")
	{
	$("#error").show();
	$("#err").text("Please select the job vacancy");
	$("#job_vac").css("border","2px solid red");
	return false;
	}
	else if(url == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Application e-mail/URL");
	$("#job_contact").css("border","2px solid red");
	return false;
	}
	else if(cm == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Company Name");
	$("#job_company_name").css("border","2px solid red");
	return false;
	}
	else if(web == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Company website");
	$("#job_company_website").css("border","2px solid red");
	return false;
	}
	else if(email == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Company Email");
	$("#job_company_linkedin").css("border","2px solid red");
	return false;
	}
	else if (mob == "")
	{
	$("#error").show();
	$("#err").text("Please enter the Mobile number");
	$("#mobile_no").css("border","2px solid red");
	return false;
	}
	
	else
	{
	var dateEntered = $("#listing_expire").val(); 
var date = dateEntered.substring(8, 10);
var month = dateEntered.substring(5,7);
var year = dateEntered.substring(0,4);

var dateToCompare = new Date(year, month - 1, date);
var currentDate = new Date();
if (dateToCompare > currentDate) {
    /*alert("Date Entered is greater than Current Date ");*/
}
else {
    alert("Date Entered is lesser than Current Date");
	return false;
}
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