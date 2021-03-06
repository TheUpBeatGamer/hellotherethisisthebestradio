<!DOCTYPE html>
<?php
	include('_inc/core.php');
?>
<html lang="en">
<!--

This website is developed by Elliott Sheerin for the use of KeyFM.net only.
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
    <meta name="keywords" content="">
    <meta name="description" content=""/>
    <meta property="og:title" content="KeyFM"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://keyfm.net"/>
    <meta property="og:image" content="https://cdn.pbrd.co/images/HDiArgq.png"/>
    <meta property="og:description" content=""/>
    <meta name="theme-color" content="#000"/>
    <meta name="msapplication-TileColor" content="#000"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="venobox/venobox.css" media="screen" rel="stylesheet" type="text/css">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->favicon; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->favicon; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->favicon; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navigationbar">
		<div class="container">
			<li class="nav-icon"><a href='Key.Home' class='web-page'><i class="fa fa-home" aria-hidden="true"></i></a></li>
			<li class="dropbox-handle nav-icon" style="margin-left:-15px;">
				<a>Key &nbsp;&nbsp;<i class="fa fa-caret-down" style="color:white;"></i></a>
				<div class="dropbox-cont">
					<div class="drop-box">
						<ul>
							<li class="dropbox-item"><a href='Key.Test' class='web-page'>Test</a></li>
						</ul>
					</div>
				</div>
			</li>
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
    	    		<center>Welcome to KeyFM!</center>
    	    		<center>Our site is loading so give it a few seconds.</center>
    	    	</div>
    	    </div>
		</div>
    <footer>
    	<div class="container">
    		<div><b>KeyFM</b> &bullet; Designed & Coded by <b><a href="https://elliottsheerin.com">Elliott</a></b></div>
    	</div>
    </footer>
		<script type="text/javascript" src="urlRouting.js"></script>
		  <script>
		    urlRoute
		      .folderUrl('/v1')
		      .setPreviousCode('Key.Home')
		      .setBaseUrl('https://alinity.space/v1/')
		      .checkCurrent('https://alinity.space/v1/');
				setTimeout(loadStats, 500);
				setInterval(updateStats, 1000);
            </script>
</body>
</html>