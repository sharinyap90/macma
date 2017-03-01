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
						<li><a href="index.php">Home</a></li>
						<li><a href="single.html">News</a></li>
						<li><a href="about.html">Activity</a></li>
						<li><a href="contact.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<!--Clean template by WpFreeware.com-->
	
		<div class="fix content_area">

				<div class="fix top_add_bar" style="height:150px;">
					<div class="addbar_leaderborard"><img src="images/macma logo.jpg" /></div>
				</div>

				
				<div class="manu_area">
					<div class="mainmenu menu-wrap wrap">
						<ul id="nav-bottom">
							<li style="float:right;"><a href="staffLogin.php">Administrator Login</a></li>
							<li style="float:right;"><a href="memberLogin.php">Member Login</a></li>
						</ul>
					</div>
				</div>
			<div class="fix wrap content_wrapper">
				<div class="row">
				
					<div class="fix main_content floatright" >
						<div class="single_page_content fix" style="height:50%;">
							<center><h1 style="margin-bottom:70px;">Admin Login</h1></center>
								<div class="col-md-8 col-md-offset-2 col-sm-offset-2">
									
									<center><form name="adminLogin" action = "staffLoginValidate.php" method = 'POST'>
										
										<div class="input-group" style=" margin: 0 0 20px 0;">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span>
											<input placeholder="Username" class="form-control" type="text" name="adminUsername">
										</div>
										
										<div class="input-group">
											<span class="input-group-addon">
												<i class="glyphicon glyphicon-user"></i>
											</span>
											<input type="password" class="form-control" name="adminpassword" placeholder="password"/>
										</div>
										<br/>
										<div class="col-md-12">
										<input type="submit" class="submit btn-primary" value="Submit" style="margin:20pt 0 0 70%;"/>
										</div>
										
									</form>
								</div>
						</div>	
					</div>
					<div class="row" style="width:100%;">
					<div class="fix sidebar floatleft">
						<div class="fix single_sidebar col-md-12 col-md-offset-1 col-sm-offset-2">
							<div class="popular_post fix">
								<h2>Popular</h2>
								
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
								
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
								<div class="fix single_popular">
									<img src="images/popular.png" class="floatleft"/>
									<h2>Vestibum Malesuada Etiam Magna</h2>
									<p>12 Nov, 2012</p>
								</div>
							</div>
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
	</body>
</html>
