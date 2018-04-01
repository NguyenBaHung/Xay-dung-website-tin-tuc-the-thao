<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web tin tuc the thao</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../overide/overide.css">
	<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="script/ajax.js"></script>
	<style type="text/css" media="screen">
	.menu ul li
	{
		float: left;
	}
</style>
</head>
<body>
	
	<div class="wapper">
		<?php
			include('../app/header.php');
			include('../app/menu.php');
			include('../app/content.php');
			
		?>
		<div class="clear"></div>
		<?php 
			include('../app/footer.php'); 
		?>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow36.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

</html>