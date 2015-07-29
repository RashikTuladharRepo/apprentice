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
	<title>Add News | The Apprentice Firm</title>
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
				<form method="post" action="#">
					<table>
						<tr>
							<td colspan="2" style="text-align:center;"><h2 style="font-family:rashik;font-size:30px;">Add Your News</h2></td>
						</tr>
						<tr>
							<td colspan="2" style="color:red;font-size:14px;">* Please Use "&lt;br&gt;&lt;br&gt;" Without Double Quote For A Line Break While Writing The News Description</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center; color:red;">
								<?php
									if(isset($_SESSION['msg']))
									{
										echo $_SESSION['msg'];
										$_SESSION['msg']="";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Your Title</td>
							<td><input type="text" name="title" id="title" placeholder="Your News Title" required></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" id="description" placeholder="Description"></textarea></td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" name="addnews" value="Add News">
								<input type="reset" name="reset" value="Reset">
							</td>
						</tr>

					</table>
				</form>

				<div class="clearfix"></div>
		</div>
	</div>

	<footer>
		<?php include"includes/footer.php"; ?>
	</footer>



</body>
</html>

<?php

	if(isset($_POST['addnews']))
	{
		$title=$_POST['title'];
		$description=$_POST['description'];
 		$date=date("Y/m/d");

		$sql="insert into tbl_news(title,description,date) values('$title','$description','$date')";
		$qry=mysqli_query($con,$sql);
		if ($qry) 
		{
			$_SESSION['msg']="Your News Has Been Added";
			header('location:news.php');
		}
		else
		{
			$_SESSION['msg']="Your News Could Not Be Added";
			header('location:news.php');
		}

	}

?>