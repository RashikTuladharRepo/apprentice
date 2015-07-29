<?php
	include"includes/database.php";
	if(!isset($_SESSION['username'])||$_SESSION['username']=="")
	{
		header('location:index.php');
		$_SESSION['msg']="Please Login First";
	}
?>
<html>
<head>
	<title>Dashboard | The Apprentice Firm</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/iconFont.css">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>

	<div class="header-wrapper">
		<div class="header">
			<h1>The Apprentice Frim Hotel & Cruising Training Centre (AHCTC)</h1>
"Come & Explore And Be A Part of Education & Fun Where The World Is Your Work Place"
		</div>
	</div>


	<div class="nav-wrapper">
		<div class="userinfo">
			<div class="userinfoleft">
				<span class="icon-accessibility"></span>
				<?php
					echo "Welcome ".ucfirst($_SESSION['username']).",";
				?>
			</div>

			<div class="userinforight">
				<a href="logout.php"><span class="icon-switch"></span>&nbsp;Logout</a>
			</div>

			<div class="clearfix"></div>

		</div>
		<div class="nav">
			<ul>
				<?php include"includes/nav.php";?>
			</ul>
		</div>
	</div>


	<div class="container-wrapper">
		<div class="container">
				<h1>Welcome To The Dashboard For The Apprentice Firm.</h1>
		</div>
	</div>

	<footer>
		<?php include"includes/footer.php"; ?>
	</footer>



</body>
</html>