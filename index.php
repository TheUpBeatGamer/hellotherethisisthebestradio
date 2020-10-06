<!DOCTYPE html>
<?php
	include('_inc/core.php');
?>
<html lang="en">
<!--

This website is developed by Elliott Sheerin for the use of ElliottSheerin.com only.
Any attempt at using this website will result in DMCA removal.

-->
<head>
	<title><?php echo $config->name; ?> &bullet; <?php echo $config->versionNumber; ?></title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="msapplication-TileColor" content="#000">
    <meta name="msapplication-TileImage" content="https://cdn.pbrd.co/images/HBAbPK0.png">
    <meta name="theme-color" content="#000">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="keywords" content="FlareRadio, Flare, Radio, Online Radio, Habbo Retros, Habbo, Retro, Music">
    <meta name="description" content="Flare is a online community radio station aimed at the teen community, providing the greatest hits 24 hours a day, 7 days a week, 365 days of the year. While bringing you the latest hits, you can find the latest news, find out what's going off around the world with our amazing news team."/>
    <meta property="og:title" content="FlareRadio"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://flareradio.net"/>
    <meta property="og:image" content="https://cdn.pbrd.co/images/HDiArgq.png"/>
    <meta property="og:description" content="Flare is a online community radio station aimed at the teen community, providing the greatest hits 24 hours a day, 7 days a week, 365 days of the year."/>
    <meta name="theme-color" content="#000"/>
    <meta name="msapplication-TileColor" content="#000"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="venobox/venobox.css" media="screen" rel="stylesheet" type="text/css">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->favicon; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->favicon; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->favicon; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<style type="text/css">
	   marquee span {
	   margin-right: 100%;
	   }
	   marquee p {
	   white-space:nowrap;
	   margin-right: 1000px;
	   }
	</style>
	<link href="custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navigationbar">
		<div class="container">
			<li class="nav-icon"><a href='Flare.Home' class='web-page'><i class="fa fa-home" aria-hidden="true"></i></a></li>
			<li class="dropbox-handle nav-icon" style="margin-left:-15px;">
				<a>Flare &nbsp;&nbsp;<i class="fa fa-caret-down" style="color:white;"></i></a>
				<div class="dropbox-cont">
					<div class="drop-box">
						<ul>
							<li class="dropbox-item"><a href='Flare.Test' class='web-page'>Test</a></li>
						</ul>
					</div>
				</div>
			</li>
			<li class="nav-icon" style="float:right;"><a href='Flare.Register' class='web-page'><b>Register</b></a></li>
            <li class="nav-icon" style="float:right;"><a href='Flare.Login' class='web-page'><b>Login</b></a></li>
    	</div>
	</nav>
	<div class="header">
		<center>
			<img class="logo" draggable="false" src="">
		</center>
	</div>
    	<div id='content'>
        	<div class="container">
    	    	<div class="box">
    	    		<center>Welcome to FlareRadio!</center>
    	    		<center>Our site is loading so give it a few seconds.</center>
    	    	</div>
    	    </div>
		</div>
    <footer>
    	<div class="container">
    		<div><b>FlareRadio</b> &bullet; Designed & Coded by <b><a href="https://elliottsheerin.com">Beats</a></b></div>
    	</div>
    </footer>
		<script type="text/javascript" src="urlRouting.js"></script>
		  <script>
		    urlRoute
		      .folderUrl('https://alinity.space/v1')
		      .setPreviousCode('Flare.Home')
		      .setBaseUrl('https://alinity.space/v1/')
		      .checkCurrent('https://alinity.space/v1/');
				setTimeout(loadStats, 500);
				setInterval(updateStats, 1000);
            </script>
</body>
</html>