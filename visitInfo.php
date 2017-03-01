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
				<div class="fix ">
						<div class="single_page_content fix" >
							<center><h1 style="margin-bottom:15px;">Visit Information Form</h1></center>
								<hr>
								
								<div class="col-md-0 col-md-offset-0 col-sm-offset-0">

									<form id="" method="post" class="form-horizontal">
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Visitation Date</label>
											 <div class="col-sm-5">
											 <input type="date" class="form-control" required/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label" style="overflow:hidden;">Islam Name</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="name" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label" style="overflow:hidden;">Name before Convert Islam</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="name" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Telephone No.</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" required data-parsley-type="number" placeholder="071234567"  />
											 </div>
											 <label class="col-sm-2	control-label">Mobile No.</label>
											 <div class="col-sm-3">
											 <input type="text" class="form-control" required data-parsley-type="number" placeholder="01234567890"  />
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
											 <input type="email" class="form-control" data-parsley-trigger="keyup" placeholder="Enter a valid e-mail" />    
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Citizenship</label>
											 <div class="col-sm-3">
											 <select class="form-control" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option>Malaysia</option>
												  <option>Other</option>
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
												<input type="radio" name="gender" required data-parsley-required="true">Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="gender">Female
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
											 <input type="date" class="form-control" required/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Place of Birth</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											 <label class="col-sm-1 control-label">Age</label>
											 <div class="col-sm-2">
											 <input type="text" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Convert Date</label>
											 <div class="col-sm-5">
											 <input type="date" class="form-control" required/>
											 </div>
											</div>
											 
											<div class="form-group">
											 <label class="col-sm-3 control-label">Place of Convert</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Occupation</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder=""/>
											 </div>
											</div>

											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Permanent Address</label>
											 <div class="col-sm-8">
											 <textarea required class="form-control"></textarea>
											 </div>
											 </div>
											 
											 <div class="form-group">
											 <label class="col-sm-3 control-label">Report Summary</label>
											 <div class="col-sm-8">
											 <textarea required class="form-control"></textarea>
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
