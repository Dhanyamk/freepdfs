<?php //include "core.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--index page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>freepdf's</title>
<meta name="keywords" content="freepdf's" />
<meta name="description" content="The free pdf ebooks collection that's available on internet for free." />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<?php include "header.php";?>
	</div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>freepdfs<!--main heading--></h2>
				<span class="byline"><!--really cool tagline--></br></span> 
				<span class="byline">The free pdf ebooks collection that's available on internet for free.</span>
				<span class="byline"><!--Sheduled to be launch on --></span>  
			</div>
			<ul class="actions">
				<li><a href="<?php echo"$basicshelfs";?>" class="button">start here</a></li>
			</ul>
		</div>
	</div>
	<div id="extra" class="container">
		<div class="title">
			<h2>Please note</h2>
			<span class="byline">The Books here are</span> </div>
		<div id="three-column">
			<div class="boxA">
				<div class="box"> <span class="fa fa-cloud-download"></span>
					<p>Free to download</p>
				</div>
			</div>
			<!--<div class="boxB">
				<div class="box"> <span class="fa fa-cogs"></span>
					<p>Please don't Modify it</p>
				</div>
			</div>-->
			<div class="boxC">
				<div class="box"> <span class="fa fa-user"></span>
					<p>And it is Stickly for personal use</p>
				</div>
			</div>
		</div>
		<ul class="actions2">
			<li><a href="instruction" class="button">more instruction</a></li>
		</ul>
	</div>
	<div id="featured">
		<div class="container">
			<div class="title">
				<h2>contact us</h2>
				<span class="byline">Having problem</span> </div>
			<p>just contact us</p>
		</div>
		<ul class="actions">
			<li><a href="contactus" class="button">contact us</a></li>
		</ul>
	</div>
	<div id="page" class="container">
		<div class="title">
			<h2>About Us</h2>
			<span class="byline">We are the group of students.</span> </div>
		<p> </p>
		<ul class="actions">
			<li><a href="about" class="button">Know more</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
