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
				
				<div class="manu_area" style="margin:0 0 30px 0;">
					<div class="mainmenu menu-wrap wrap"">
						<ul id="nav-bottom">
							<li><a href="manageMemberMember.php">View Profile</a></li>
							<li><a href="#">Event</a></li>
						</ul>
					</div>
				</div>
				
		<div class="fix wrap content_wrapper" >
			<div class="row">
				<div class="fix">
					
					<div class="fix main_content floatright" style="margin:0 0 0 10pt;">
						<div class="single_page_content fix">
							<div class="col-md-12 col-md-offset-0 col-sm-offset-0">

								<h1>Head News</h1>
								<div class="single_post_meta fix">
								<p style="color:red">Today's date is :<span id="time"> </p>
								</div>	
								
								<img src="images/single_feature_img.png" class="single_feature_img" alt=""/>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum.</p>
								<div class="more_post">
								
								</div>
							</div>	
						</div>	
					</div>
					
					<div class="row" >
					
					<div class="fix sidebar floatleft col-md-12 col-md-offset-1 col-sm-offset-2" >
						<div class="fix single_sidebar">
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
						
						<form role="search">
						<div class="fix single_sidebar">	
								<h2>Search</h2>
								<input  class="form-control"  type="text" placeholder="Search and hit enter"/>
						</div>
						</form>	
						
						<div class="fix single_sidebar">
							<h2>Categories</h2>
							<a href="">photography(5)</a>
							<a href="">food(9)</a>
							<a href="">Salads(4)</a>
							<a href="">spicy(3)</a>
							<a href="">Wine(5)</a>
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
