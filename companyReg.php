<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="css/companyReg.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	  <link rel="stylesheet" type="text/css" href="css/icon.css">
	  <title>Registration Interncamp | Ecell</title>

	</head>

	<body>
	
		<form action="regSuccess.php" id="companyForm" name="companyForm" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="col s12 m4 l2">
							<div class="card-panel hoverable"> 
								<h4>KIIT Entrepreneurship Cell Internship Camp 2016 Registrations</h4>
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">business</i>
										<input id="business" type="text" class="validate" name="name">
										<label for="business">Name of your Startup</label>
									</div>
								</div>  
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">business</i>
										<input id="business" type="text" class="validate" name="about">
										<label for="business">About your Startup</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">http</i>
										<input id="http" type="text" class="validate" name="link">
										<label for="http">Link of startup website</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">location_on</i>
										<input id="location_on" type="text" class="validate" name="location">
										<label for="location_on">Location of your Startup</label>
									</div>
								</div> 
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">library_books</i>
										<input id="library_books" type="text" class="validate" name="poi">
										<label for="library_books">Name of Point of Contact.</label>
									</div>
								</div> 
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">phone</i>
										<input id="icon_telephone" type="tel" class="validate" name="phone">
										<label for="icon_telephone">Contact number of Point of Contact. Please do not enter 0 or +91</label>
									</div>
								</div> 
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">email</i>
										<input id="email" type="email" class="validate" name="mail">
										<label for="email">Mail address of Point of Contact.</label>
									</div>
								</div>
								<div class="row">
							<?php require_once 'navbar.php'; ?>		<div class="input-field col s8">
										<i class="material-icons prefix">email</i>
										<input id="email" type="number" class="validate" name="intern">
										<label for="email">Total number of interns you intend to take?</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<label>Fields in which you wish to recruit interns?</label></br>
										<p>
											<input type="checkbox" id="field1" name="field[]" value="Coder/Developer" />
											<label for="field1">Coder/Developer</label>
										</p>
										<p>
											<input type="checkbox" id="field2" name="field[]" value="Graphic Designer/Videographer/Video editor"/>
											<label for="field2">Graphic Designer/Videographer/Video editor</label>
										</p>
										<p>
											<input type="checkbox" id="field3" name="field[]" value="Marketing/Digital Marketing/Brand Management" />
											<label for="field3">Marketing/Digital Marketing/Brand Management</label>
										</p>
										<p>
											<input type="checkbox" id="field4" name="field[]" value="Sales/Supply Chain Management" />
											<label for="field4">Sales/Supply Chain Management</label>
										</p>
										<p>
											<input type="checkbox" id="field5" name="field[]" value="Content Creation/Blogging" />
											<label for="field5">Content Creation/Blogging</label>
										</p>
										<p>
											<input type="checkbox" id="field6" name="field[]" value="Operations/Front-end or Back-end Logistics" />
											<label for="field6">Operations/Front-end or Back-end Logistics</label>
										</p>
										<p>
											<input type="checkbox" id="field7" name="field[]" value="Human Resource Management" />
											<label for="field7">Human Resource Management</label>
										</p>
										<p>
											<input type="checkbox" id="field8" name="field[]" value="Technical related to Electronics/Electrical" />
											<label for="field8">Technical related to Electronics/Electrical</label>
										</p>
										<p>
											<input type="checkbox" id="field9" name="field[]" value="Technical related to Mechanical/Automobile" />
											<label for="field9">Technical related to Mechanical/Automobile</label>
										</p>
										<p>
											<input type="checkbox" id="field10" name="field[]" value="Technical related to Hardware" />
											<label for="field10">Technical related to Hardware</label>
										</p>
										<p>
											<input type="checkbox" id="field11" name="field[]" value="Bio-Technology" />
											<label for="field11">Bio-Technology</label>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<label>What more do you wish to offer the interns along with the valued internship opportunity?</label></br>
										<p>
											<input type="checkbox" id="stip1" name="stip[]" value="Stipend(Monthly)" />
											<label for="stip1">Stipend(Monthly)</label>
										</p>
										<p>
											<input type="checkbox" id="stip2" name="stip[]" value="Stipend(One-time payment)"/>
											<label for="stip2">Stipend(One-time payment)</label>
										</p>
										<p>
											<input type="checkbox" id="stip3" name="stip[]" value="PPO(Pre placement Offer)" />
											<label for="stip3">PPO(Pre placement Offer)</label>
										</p>
										<p>
											<input type="checkbox" id="stip4" name="stip[]" value="Other Incentives" />
											<label for="stip4">Other Incentives</label>
										</p>
										<p>
											<input type="checkbox" id="stip5" name="stip[]" value="Certificate and letter of recommendation(Compulsory)" />
											<label for="stip5">Certificate and letter of recommendation(Compulsory)</label>
										</p>
									</div> 
								</div> 
								<div class="row">
									<div class="input-field col s8">
										<label>Duration of the internship in your company?</label></br>
										<p>
											<input type="radio" id="duration1" name="duration" value="30 days (or 4 weeks)" />
											<label for="duration1">30 days (or 4 weeks)</label>
										</p>
										<p>
											<input type="radio" id="duration2" name="duration" value="45 days (or 6 weeks)"/>
											<label for="duration2">45 days (or 6 weeks)</label>
										</p>
										<p>
											<input type="radio" id="duration3" name="duration" value="60 days (or 8 weeks)" />
											<label for="duration3">60 days (or 8 weeks)</label>
										</p>
										<p>
											<input type="radio" id="duration4" name="duration" value="6 months(For final year students and virtual internships only)" />
											<label for="duration4">6 months(For final year students and virtual internships only)</label>
										</p>
										<br>
										<p>
											<input type="radio" id="duration5" name="duration" value="">
											<label for="duration5">Other</label><br>
											<input type="text" id="durationlength" class="input-field col s4" placeholder="Enter details if any" disabled="disabled">
										</p>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<label>Do you have an office space for the interns?</label></br>
										<p>
											<input type="radio" id="office1" name="office" value="Yes" />
											<label for="office1">Yes</label>
										</p>
										<p>
											<input type="radio" id="office2" name="office" value="No( If no it will be considered as virtual internship)"/>
											<label for="office2">No( If no it will be considered as virtual internship)</label>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<label>Do you require accommodation during your stay?</label></br>
										<p>
											<input type="radio" id="acco1" name="acco" value="Yes" />
											<label for="acco1">Yes</label>
										</p>
										<p>
											<input type="radio" id="acco2" name="acco" value="No"/>
											<label for="acco2">No</label>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<label>Number of representatives coming down from your end for the selection process?</label></br>
										<p>
											<input type="radio" id="rep1" name="rep" value="One" />
											<label for="rep1">One</label>
										</p>
										<p>
											<input type="radio" id="rep2" name="rep" value="Two"/>
											<label for="rep2">Two</label>
										</p>
										<p>
											<input type="radio" id="rep3" name="rep" value="Three"/>
											<label for="rep3">Three</label>
										</p>
										<p>
											<input type="radio" id="rep4" name="rep" value="Four"/>
											<label for="rep4">Online Interview (Skype, Google Hangout)</label>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s9">
										<div class="file-field input-field">
											<div class="btn">
												<span>File</span>
												<input type="file" name="file">
											</div>
											<div class="file-path-wrapper">
												<input class="file-path validate" type="text" placeholder="Upload the company logo in PNG format(High Definition preferable)">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<p>
											<input type="checkbox" id="confirm" name="confirm" value="Coder/Developer" />
											<label for="confirm">I hereby confirm and accept that I have agreed to the Terms and Conditions and will be hiring interns from Internship Camp 2016</label>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s8">
										<i class="material-icons prefix">mode_edit</i>
										<textarea id="msg" class="materialize-textarea" name="msg"></textarea>
										<label for="msg">We would love to have your suggestions to make this Internship camp better.</label>
									</div>
								</div>
								<button class="btn waves-effect waves-light" name="action" type="submit">Submit
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/companyReg.js"></script>
	
	</body>
</html>
