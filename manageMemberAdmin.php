<?php
 require_once 'dbconfig.php';
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
	
		<div class="fix content_area" >

				<div class="fix top_add_bar" style="height:150px;">
					<div class="addbar_leaderborard"><img src="images/macma logo.jpg"/></div>
				</div>

				<div class="manu_area" >
					<div class="mainmenu menu-wrap wrap">
						<ul id="nav-bottom" >	
							<li class="parent">
							<a>Manage Member</a>
							<ul>
							<li><a href="registerMember.php"   class="active">Add New Member</a></li>
							<li><a href="registerMember.php">Manage Member</a></li>
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
				<div class="fix ">
						<div class="single_page_content fix" >
							<center><h1 style="margin-bottom:15px;">Manage Member</h1></center>
									<div class="col-md-3" style="margin: 0 0 40px 0;float:right;">
									<img src="images/qr sample.png"/>
									</div>
									
									
								
								<div class="col-md-0 col-md-offset-0 col-sm-offset-0">
								<hr>
									<form name="manageMember" method="post" class="form-horizontal" action ="">
											
										<div>
											<div class="input-group col-sm-3 control-label" style=" margin: 0 0 20px 30%; width:30%;">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-search"></i>
											</span>
											<input placeholder="Member ID" class="form-control" type="text" name="Member ID">
											
											</div>
											<div class="col-md-7">
											<input type="submit" class="btn btn-success" value="Submit" style="margin:0 0 0 51%;"/>
											</div>
										</div>

											<div class="form-group" style="clear:both;">
											<hr>
											<label class="col-sm-3 control-label">Registration Date</label>
											 <div class="col-sm-5">
											 <input type="date" class="form-control" name="registerDate" required/>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Type of Membership</label>
											<div class="col-sm-3">
											 <select class="form-control" name="typeMember" required>
												<option value="" selected="selected"> - Select - </option>
												<option value="a">A</option>
												<option value="ab">AB</option>
												<option value="b">B</option>
											 </select>
											 </div>
											 <label class="col-sm-2 control-label" style="overflow:hidden;">Member ID</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name="memberID" required placeholder="Member No"/>
											 </div>
											 </div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label" style="overflow:hidden;">Islam Name</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="IslamName" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label" style="overflow:hidden;">Name before Convert Islam</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="TrueName" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Telephone No.</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name="callNo" required data-parsley-type="number" placeholder="071234567"  />
											 </div>
											 <label class="col-sm-2	control-label">Mobile No.</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name="mobileNo" required data-parsley-type="number" placeholder="01234567890"  />
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Identity Card (IC.No)</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="ic" required data-parsley-type="number" placeholder="901212011234"/>
											 </div>
											</div>	
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">E-Mail</label>
											 <div class="col-sm-5">
											 <input type="email" class="form-control" name="email" data-parsley-trigger="keyup" placeholder="Enter a valid e-mail" />    
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Citizenship</label>
											 <div class="col-sm-3">
											 <select class="form-control" name="citizen" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="Malaysia">Malaysia</option>
												  <option value="Other">Other</option>
											 </select>
											 </div>
											 
											 <label class="col-sm-2 control-label">Other</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" name="citizenOther" placeholder=""/>
											 </div>
											</div>

											<div class="form-group">
											 <label class="col-sm-3 control-label">Gender</label>
											 <div class="col-sm-8">
											<label class="radio-inline col-sm-2">
												<input type="radio" name="gender" value="Male" required data-parsley-required="true">Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="gender" value="Female">Female
											</label>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Marital Status</label>
											 <div class="col-sm-5">
											 <select class="form-control" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="single">Single</option>
												  <option value="married">Married</option>
													<option value="single parent">Single Parent</option>
											 </select>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Date of Birth</label>
											 <div class="col-sm-5">
											 <input type="date" class="form-control" name="dob" required/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Place of Birth</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="placeBirth" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											 <label class="col-sm-1 control-label">Age</label>
											 <div class="col-sm-2">
											 <input type="text" class="form-control" name="age" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Convert Date</label>
											 <div class="col-sm-5">
											 <input type="date" class="form-control" name="covertDate" required/>
											 </div>
											</div>
											 
											<div class="form-group">
											 <label class="col-sm-3 control-label">Place of Convert</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="placeConvert" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Level of Education</label>
											 <div class="col-sm-5">
											 <select class="form-control" name="education" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="Primary Level">Primary Level</option>
												  <option value="Secondary Level">Secondary Level</option>
													<option value="STPM">STPM</option>
													<option value="Matriculation">Matriculation</option>
													<option value="Diploma">Diploma</option>
													<option value="Degree">Degree</option>
													<option value="">Higher Education Level</option>
													<option value="">Other</option>
											 </select>
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Occupation</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="occupation" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>
	
											<div class="form-group">
											 <label class="col-sm-3 control-label">Permanent Address</label>
											 <div class="col-sm-8">
											 <textarea required class="form-control" name="address"></textarea>
											 </div>
											</div>
											 
											<div class="form-group">
											 <label class="col-sm-3 control-label">Name of Successor</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="successor" placeholder="Fullname"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Successor Contact No.</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="successorContact" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Communication Language</label>
											<div class="col-sm-9">
											 <input type="checkbox" id="cbox1" value="malay"> Malay
											 <input type="checkbox" id="cbox1" value="mandarin"> Mandarin
											 <input type="checkbox" id="cbox1" value="english"> English
											 <input type="checkbox" id="cbox1" value="kantonis"> Kantonis
											 <input type="checkbox" id="cbox1" value="hokien"> Hokien
											 <input type="checkbox" id="cbox1" value="hakka"> Hakka
											 <input type="checkbox" id="cbox1" value="tamil"> Tamil
											 <input type="checkbox" id="cbox1" value="other"> Other
											</div>
											</div>
											
											<div class="row">
											<div class="form-group">
											 <label class="col-sm-3 control-label">Children Details	</label>
											<div class="col-sm-8">
												<table class="table-bordered table-condensed" name="child" id="addChild" style="table-layout:auto">
												<thead>
												<tr>
													<th>Children Name</th>
													<th>NRIC / Birth Certificate No.</th>
													<th>Education Level</th>
												</tr>
												</thead>
													 <tr>
													   <td><input name="ChildName" type="text" id="ChildName"/></td>
													   <td><input name="nric" type="text" id="nric"/></td>
													   <td><input name="edu" type="text" id="edu"/></td>		
													   </td>  
													 </tr>
												</table>	
												<button class="btn btn-primary" name="add" onclick='addRow();' style="clear:both; float:right; margin:10px 0 0 180%;">Add</button>
											</div>
											</div>
											</div>
											
											<div class="form-group">
											<center><p><strong>** If married or is a single parent, please fill in below details **</strong></center>	</p>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Partner Name</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="partnerName" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">NRIC</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="partnerIC" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">MACMA NS No. (If applicable)</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="partnerID" placeholder=""/>
											 </div>
											</div>
											
											<div class="panel panel-info">
											<div class="panel-heading">FOR OFFICE USE ONLY</div>
												<div class="panel-body">
													<table class="table table-bordered">
														<tbody>
														  <tr>
															<td>Copy of NRIC</td>
															<td><input name="ic" type="checkbox" value="ICverified"/>Verified</td>
															<td><input name="ic" type="checkbox" value="ICNotVerified"/>Incomplete</td>
														  </tr>
														  <tr>
															<td>Copy of Islam Card</td>
															<td><input name="IslamCard" type="checkbox" value="ISverified"/>Verified</td>
															<td><input name="IslamCard" type="checkbox" value="ISNotVerified"/>Incomplete</td>
														  </tr>
														  <tr>
															<td>Nric Size Photo (x2)</td>
															<td><input name="photo" type="checkbox" value="photoverified"/>Verified</td>
															<td><input name="photo" type="checkbox" value="photoNotVerified"/>Incomplete</td>
														  </tr>
														  <tr>
															<td>Other Document (if applicable)</td>
															<td><input name="ic" type="checkbox" value="verified"/>Yes</td>
															<td><input name="ic" type="checkbox" value="NotVerified"/>No</td>
														  </tr>
														  <tr>
															<td>Date Form Received</td>
															<td><input name="dateForm" type="date"/></td>
														  </tr>
														  <tr>
															<td>Member's Number</td>
															<td><input name="memberNo" type="text" required placeholder="Membership No."/></td>
														  </tr>
														  <tr>
															<td>RECEIPT NO.</td>
															<td><input type="text" name="receiptNo" required placeholder=""/></td>
															</tr>
														</tbody>
													</table>
												</div>	  
											</div>
	 
											 <div class="form-group">
											 <div class="col-sm-offset-3 col-sm-8 m-t-15">
											 <button type="reset" class="btn btn-default m-l-5" style="float:right;">Cancel</button>
											 <button type="submit" class="btn btn-primary" style="float:right; margin:0 15px 0 0;">Submit</button>
											 </div>
											 </div>
												 
										</form>
								</div>
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
