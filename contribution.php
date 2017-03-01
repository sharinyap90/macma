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
					<div class="mainmenu menu-wrap wrap">
						<ul id="nav-bottom" > 	
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
							<center><h1 style="margin-bottom:15px;">Contribution Form</h1></center>
								<hr>
								
								<div class="col-md-0 col-md-offset-0 col-sm-offset-0">

									<form id="" method="post" action = "addContributionDB.php" class="form-horizontal">
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Release Date</label>
											 <div class="col-sm-3">
											 <input type="date" name = "release_date" class="form-control" required/>
											 </div>
											 <label class="col-sm-2 control-label">Voucher No.</label>
											 <div class="col-sm-3">
											 <input type="text" name = "voucher_no" class="form-control" required/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">To:</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="name" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full Name"/>
											 </div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3 control-label">Type of Contribution</label>
											 <div class="col-sm-5">
											 <select class="form-control" name = "type_of_contribution" required>
												  <option value="" selected="selected"> - Select - </option>
												  <option value="Donation" >Donation Receiver</option>
												  <option value="Donater" >Donater</option>
											 </select>
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Identity Card (IC.No)</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="nric" required data-parsley-type="number" placeholder="901212011234"/>
											 </div>
											</div>	
											
											<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-5">
											<input name="cash_status" type="checkbox" value = "Received" id="cash_status"/>CASH
											</div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-3">
											<input name="cheque_status" type="checkbox" value = "Received" id="cheque_status"/>CHEQUE
											</div>
											</div>
											
											<div class="form-group">
											 <label class="col-sm-3	control-label">Cheque Number</label>
											 <div class="col-sm-5">
											 <input type="text" class="form-control" name="cheque_no" required placeholder=""/>
											 </div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">Cheque Date</label>
											<div class="col-sm-5">
											<input name="cheque_date" type="date" class="form-control" id=""/>
											</div>
											</div>
											
											<br/>
											<div class="row">
											<div class="form-group">
											 <label class="col-sm-3 control-label">Donation Detail</label>
											<div class="col-sm-8">
												<table class="table-bordered table-condensed" id="donationDetail" style="table-layout:auto">
												<thead>
												<tr>
													<th>INVOICE NO</th>
													<th>DETAILS</th>
													<th>TOTAL(RM)</th>
												</tr>
												</thead>
													 <tr>
													   <td><input name="invoice_no" type="text" id="invoiceNo"/></td>
													   <td><input name="donation_details" type="text" id="detail"/></td>
													   <td><input name="total" type="text" id="total"/></td>		  
													 </tr>
												</table>	
												<button class="btn btn-primary" name="add" onclick='addRow();' style="clear:both; float:right; margin:10px 0 0 180%;">Add
											</div>
											</div>
											</div>
											
											<div class="form-group">
											<label class="col-sm-3 control-label">SUBTOTAL (RM)</label>
											<div class="col-sm-5">
											<input type="text" class="form-control" name="subtotal:"/>
											</div>	
											</div>
											
											<hr>
											<div class="panel panel-info">
											<div class="panel-heading">FOR OFFICE USE ONLY</div>
												<div class="panel-body">
													<table class="table table-bordered">
														<tbody>
														  <tr>
															<td>Prepared by:</td>
															<td><input type="text" class="form-control" name="prepared_by"></td>
															<td>Prepare Date</td>
															<td><input type="date" class="form-control" name = "prepared_date"/></td>
														  </tr>
														  <tr>
															<td>Verified by:</td>
															<td><input type="text" class="form-control" name="verified_by"></td>
															<td>Position:</td>
															<td><input type="text" class="form-control" name="position"></td>
															<td>Verify Date</td>
															<td><input type="date" class="form-control" name = "verified_date"/></td>
														  </tr>
														  <tr>
															<td>Approved by:</td>
															<td><input type="text" class="form-control" name="approved_by"></td>
															<td>Chairman</td>
															<td><input type="text" class="form-control" name="chairman"></td>
															<td>Approve Date</td>
															<td><input type="date" class="form-control" name ="approved_date"/></td>
														  </tr>
														</tbody>
													</table>
												</div>	  
											</div>
											
											<div class="panel panel-success">
												  <div class="panel-heading">RECEIVED BY</div>
												<div class="panel-body">
													<div class="form-group">
													<label class="col-sm-2 control-label">Received By</label>
													<div class="col-sm-5">
													<input type="text" class="form-control" name="received_by" placeholder="Full Name"/>
													</div>
													</div>
													
													<div class="form-group">
													<label class="col-sm-2 control-label">NRIC</label>
													<div class="col-sm-5">
													<input type="text" class="form-control" name="receiver_nric" />
													</div>
													</div>
													
													<div class="form-group">
													<label class="col-sm-2 control-label">Date</label>
													<div class="col-sm-5">
													<input type="date" class="form-control" name = "received_date" />
													</div>
													</div>

													 <hr>
													<p style="float:right"> **This is a computer generated document no signature is needed **</p>
												</div>  
											</div>
	 
											 <div class="form-group">
											 <div class="col-sm-offset-3 col-sm-8 m-t-15">
											 <button type="reset" class="btn btn-default m-l-5" style="float:right;">Cancel</button>
											 <button type="submit" name = "submit" class="btn btn-primary" style="float:right; margin:0 15px 0 0;">Submit</button>
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
		   var newRow = document.all("donationDetail").insertRow();

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
