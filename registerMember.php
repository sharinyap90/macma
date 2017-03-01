<?php
 include_once 'dbconfig.php';
?>
	
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>MACMA Negeri Sembilan</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="font/font.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">		
	</head>
	

	<body>
		<div class="fix header_area">
			<div class="fix wrap header">
				<div class="logo floatleft">
					<h1>MACMA NS</h1>
				</div>
				<div class="manu floatright">
					<ul id="nav-top">
					<li><a href="staffIndex.php">Home</a></li>	
					<li><a>Hello, <?=isset($_SESSION['username'])? $_SESSION['username'] : 'Guest' ?></a></li>
					<?php 
						if(isset($_SESSION['user'])){
						?>
						<li style="float:right;"><a href="staffLogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						<?php
						}else{
						?>
						<li style="float:right;"><a href="staffLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<?php
						}
					?>
					</ul>
				</div>
			</div>
		</div>
		
		<!--Clean template by WpFreeware.com-->
	
		<div class="fix content_area">

				<div class="fix top_add_bar" style="height:150px;">
					<div class="addbar_leaderborard"><img src="images/macma logo.jpg"/></div>
				</div>

				<div class="manu_area">
					<div class="mainmenu menu-wrap wrap ">
						<ul id="nav-bottom"> 	
							<li class="parent class="content">
							<a>Manage Member</a>
							<ul>
							<li><a href="registerMember.php"   class="active">Add New Member</a></li>
							<li><a href="manageMemberAdmin.php">Manage Member</a></li>
							</ul></li>
							<li><a href="contribution.php">Contribution</a></li>
							<li><a href="visitInfo.php">Visit Information</a></li>
							<li><a href="event.php">Event</a></li>
							<li><a href="attendance.php">Attendance</a></li>
							<li><a href="generateReport.php">Generate Report</a></li>
						</ul>
					</div>
				</div>
			<div class="fix wrap content_wrapper">
				<div class="row">
				
						<div class="single_page_content fix" >
							<center><h1 style="margin-bottom:15px;">New Member Registration</h1></center>
								<hr>
								
								<div class="col-md-0 col-md-offset-0 col-sm-offset-0">

									<form id="" method="post" class="form-horizontal" action = "addMemberDB.php">
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Registration Date</label>
											 <div class="col-sm-5">
											 <input type="date" class="form-control" name = "registration_date" required/>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Type of Membership</label>
											<div class="col-sm-3">
											 <select class="form-control" name="type_of_membership" required>
												<option value="" selected="selected"> - Select - </option>
												<option value="A - Chinese Muslim">A</option>
												<option value="AB - Child/ Grandchildren">AB</option>
												<option value="B - Federate">B</option>
											 </select>
											 </div>
											 <label class="col-sm-2 control-label" style="overflow:hidden;">Membership ID</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name="membership_no" required placeholder="Member No"/>
											 </div>											   
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label" style="overflow:hidden;">Islam Name</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="islam_name" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label" style="overflow:hidden;">Name before Convert Islam</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="name_before_islam" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Telephone No.</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name = "tel_no" required data-parsley-type="number" placeholder="071234567"  />
											 </div>
											 <label class="col-sm-2	control-label">Mobile No.</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name = "hp_no" required data-parsley-type="number" placeholder="01234567890"  />
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Identity Card (IC.No)</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="nric" required data-parsley-type="number" placeholder="901212011234"/>
											 </div>
											</div>	
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">E-Mail</label>
											 <div class="col-sm-5">
											 <input type="email" name = "email" class="form-control" data-parsley-trigger="keyup" placeholder="Enter a valid e-mail" />    
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Citizenship</label>
											 <div class="col-sm-3">
											 <select class="form-control" name = "citizenship" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value = "Malaysia" >Malaysia</option>
												  <option value = "Other" >Other</option>
											 </select>
											 </div>
											 <label class="col-sm-2 control-label">Other</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" placeholder=""/>
											 </div>
											</div>

											<div class="form-group">
											 <label class="col-sm-3 control-label">Gender</label>
											 <div class="col-sm-8">
											<label class="radio-inline col-sm-2">
												<input type="radio" name="gender" value = "Male" required data-parsley-required="true">Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="gender" value = "Female">Female
											</label>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Marital Status</label>
											 <div class="col-sm-5">
											 <select class="form-control" name = "marital_status" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="Single">Single</option>
												  <option value="Married">Married</option>
													<option value="Single Parent">Single Parent</option>
											 </select>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Date of Birth</label>
											 <div class="col-sm-5">
											 <input type="date" name = "date_of_birth" class="form-control" required/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Place of Birth</label>
											 <div class="col-sm-5">
											 <input type="text" name = "place_of_birth" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											 <label class="col-sm-1 control-label">Age</label>
											 <div class="col-sm-2">
											 <input type="text" name = "age" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Convert Date</label>
											 <div class="col-sm-5">
											 <input type="date" name = "convert_date" class="form-control" required/>
											 </div>
											</div>
											 
											<div class="form-group">
											 <label class="col-sm-3 control-label">Place of Convert</label>
											 <div class="col-sm-5">
											 <input type="text" name = "place_convert" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Level of Education</label>
											 <div class="col-sm-5">
											 <select class="form-control" name = "level_of_education" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="Primary Level">Primary Level</option>
												  <option value="Secondary Level">Secondary Level</option>
													<option value="STPM">STPM</option>
													<option value="Matriculation">Matriculation</option>
													<option value="Diploma">Diploma</option>
													<option value="Degree">Degree</option>
													<option value="Higher Educational Level">Higher Education Level</option>
													<option value="Other">Other</option>
											 </select>
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Occupation</label>
											 <div class="col-sm-5">
											 <input type="text" name = "occupational" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>

											<div class="form-group">
											 <label class="col-sm-3 control-label">Permanent Address</label>
											 <div class="col-sm-8">
											 <textarea required class="form-control" name = "address"></textarea>
											 </div>
											 </div>
											 
											<div class="form-group">
											 <label class="col-sm-3 control-label">Name of Successor</label>
											 <div class="col-sm-5">
											 <input type="text" name = "successor_name" class="form-control" placeholder="Fullname"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Successor Contact No.</label>
											 <div class="col-sm-5">
											 <input type="text" name = "successor_tel_no" class="form-control" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Communication Language</label>
											 <div class="col-sm-9">
											 <input type="checkbox" id="cbox1" name = "communication_language" value="Malay; "> Malay
											 <input type="checkbox" id="cbox2" name = "communication_language" value="Mandarin; "> Mandarin
											 <input type="checkbox" id="cbox3" name = "communication_language" value="English; "> English
											 <input type="checkbox" id="cbox4" name = "communication_language" value="Cantonese; "> Cantonese
											 <input type="checkbox" id="cbox5" name = "communication_language" value="Hokkien; "> Hokkien
											 <input type="checkbox" id="cbox6" name = "communication_language" value="Hakka; "> Hakka
											 <input type="checkbox" id="cbox7" name = "communication_language" value="Tamil; "> Tamil
											 <input type="checkbox" id="cbox8" name = "communication_language" value="Other; "> Other
											</div>
											</div>
											
											<div class="row">
											<div class="form-group">
											 <label class="col-sm-3 control-label">Children Details	</label>
											<div class="col-sm-8">
												<table class="table-bordered table-condensed" id="addChild" style="table-layout:auto">
												<thead>
												<tr>
													<th>Children Name</th>
													<th>NRIC / Birth Certificate No.</th>
													<th>Education Level</th>
												</tr>
												</thead>
													 <tr>
													   <td><input name="child_name" type="text" id="child_name"/></td>
													   <td><input name="child_nric" type="text" id="child_nric"/></td>
													   <td><input name="child_educational_level" type="text" id="child_educational_levelu"/></td>		
													   </td>  
													 </tr>
												</table>	
												<button class="btn btn-primary" name="add" onclick='addRow();' style="clear:both; float:right; margin:10px 0 0 180%;">Add
											</div>
											</div>
											</div>
											
											<div class="form-group">
											<center><p><strong>** If married or is a single parent, please fill in below details **</strong></center>	</p>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Partner Name</label>
											 <div class="col-sm-5">
											 <input type="text" name = "partner_name" class="form-control" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">NRIC</label>
											 <div class="col-sm-5">
											 <input type="text" name = "partner_nric" class="form-control" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">MACMA NS No. (If applicable)</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" placeholder=""/>
											 </div>
											</div>
											
											<div class="panel panel-success">
												  <div class="panel-heading">I agreed to REGISTER as the member of MACMA NS with appointed fees of: </div>
												<div class="panel-body">1. REGISTRATION FEES RM5.00/- (Once Only)
												  <br/>
												  2. ANNUAL FEES RM5.00/- YEAR (Payment based on number of years required)
												  <br/>
												  3. LIFETIME FEES RM200./-
												  <br/>
												  4. IF YOU WISH TO CONTINUE YOUR MEMBERSHIP, PAYMENT IS AT LEAST RM10/-
												 <br/><br/>
												 ** Please attach with <strong>Identity Card</strong>, <strong>Islamic Card</strong> and <strong>2 piece of photos</strong> for membership card and member's file.
												  <br/><br/>
													<center><div class="well" class="form-group">
													 <label>REGISTRATION FEES = RM</label>
													 <input type="text" name = "registration_fees" value="5.00" readonly />
													 <br/><br/>
													 <label>YEARLY FEES = RM</label>
													 <input type="text" name = "yearly_fees" required placeholder=""/>
													 <hr>
													 <label>TOTAL FEES = RM</label>
													 <input type="text" name = "total_fees" required placeholder=""/>
													 <br/></br>
													 <label>RECEIPT NO.</label>
													 <input type="text" required placeholder=""/>
													 </div></center>
													 <hr>
													<p style="float:right"> **This is a computer generated document no signature is needed **</p>
												</div>
												  
											</div>
											
											<div class="panel panel-info">
											<div class="panel-heading">FOR OFFICE USE ONLY</div>
												<div class="panel-body">
													<table class="table table-bordered">
														<tbody>
														  <tr>
															<td>Copy of NRIC</td>
															<td><input name="copy_of_nric" type="checkbox" id="ICverified" value = "Verified"/>Verified</td>
															<td><input name="copy_of_nric" type="checkbox" id="ICNotVerified" value = "Incomplete"/>Incomplete</td>
														  </tr>
														  <tr>
															<td>Copy of Islam Card</td>
															<td><input name="copy_of_islam_card" type="checkbox" id="verified" value = "Verified"/>Verified</td>
															<td><input name="copy_of_islam_card" type="checkbox" id="NotVerified" value = "Incomplete"/>Incomplete</td>
														  </tr>
														  <tr>
															<td>Nric Size Photo (x2)</td>
															<td><input name="nric_size_photo" type="checkbox" id="photoverified" value = "Verified"/>Verified</td>
															<td><input name="nric_size_photo" type="checkbox" id="photoNotVerified" value = "Incomplete"/>Incomplete</td>
														  </tr>
														  <tr>
															<td>Other Document (if applicable)</td>
															<td><input name="other_document" type="checkbox" id="ICverified" value ="Yes" />Yes</td>
															<td><input name="other_document" type="checkbox" id="ICNotVerified" value = "No"/>No</td>
														  </tr>
														  <tr>
															<td>Date Form Received</td>
															<td><input name="date_form_received" type="date"/></td>
														  </tr>
														</tbody>
													</table>
												</div>	  
											</div>
	 
											 <div class="form-group">
											 <div class="col-sm-offset-3 col-sm-8 m-t-15">
											 <button type="reset" class="btn btn-default m-l-5" style="float:right;">Cancel</button>
											 <button type="submit" class="btn btn-primary" name = "submit" style="float:right; margin:0 15px 0 0;">Submit</button>
											 </div>
											 </div>
												 
										</form>
								</div>
						</div>	
				
				</div>
				
			</div>
				<div class="fix bottom_add_bar" style="height:150px;">
					<div class="addbar_leaderborard"><center><img src="images/macma logo2.jpg"/></center></div>
				</div>
				
		</div>
		
		<!--Clean template by WpFreeware.com-->

		<div class="fix footer_area">
			<div class="wrap">
			<div class="fix copyright_text floatleft">
				<p>Copyright (c) 2016 Sharin Yap</p>
			</div>
			<div class="fix social_area floatright">
				<ul>
					<li><a href="" class="feed"></a></li>
					<li><a href="" class="facebook"></a></li>
					<li><a href="" class="twitter"></a></li>
					<li><a href="" class="drible"></a></li>
					<li><a href="" class="flickr"></a></li>
					<li><a href="" class="pin"></a></li>
					<li><a href="" class="tumblr"></a></li>
				</ul>
			</div>
			</div>
		</div>
		
		<script type="text/javascript" src="js/placeholder_support_IE.js"></script>
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		
		<script type="text/javascript">
			selectnav('nav-top', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
			
			selectnav('nav-bottom', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});			
		</script>		
		<script src="http://code.jquery.com/jquery.js"></script>	
		
		<script>
			var today = new Date;
			document.getElementById('time').innerHTML= today.toDateString();
		</script>
		
		<script>
		function addRow()
		{
		   //add a row to the rows collection and get a reference to the newly added row
		   var newRow = document.all("addChild").insertRow();

		   var oCell = newRow.insertCell();
		   oCell.innerHTML = "<input type='text' name='select'>";

		   oCell = newRow.insertCell();
		   oCell.innerHTML = "<input type='text' name='title'>";
		   
		   oCell = newRow.insertCell();
		   oCell.innerHTML = "<input type='text' name='title'>";
  
		}
		</script>
	</body>
</html>
