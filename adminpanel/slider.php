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
	<title>Add Slider Images | The Apprentice Firm</title>
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
				<form method="post" action="#" enctype="multipart/form-data">
					<table>
						<tr>
							<td colspan="2" style="text-align:center;"><h2 style="font-family:rashik;font-size:30px;">Add Slider Images</h2></td>
						</tr>
						<tr>
							<td colspan="2" style="color:red;font-size:14px;">*Please Use Image Of Size width:1250px and Height:500px</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center; color:green;">
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
							<td>Image</td>
							<td><input type="file" name="photo" required></td>
						</tr>
						<!-- <tr>
							<td>Description</td>
							<td><textarea name="description" id="description" placeholder="Description"></textarea></td>
						</tr> -->

						<tr>
							<td></td>
							<td>
								<input type="submit" name="addslider" value="Add Image">
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

	if(isset($_POST['addslider']))
	{
		$file=strtolower(trim($_FILES['photo']['name']));
		$photocheck=explode('.', $file);
		$photoext=strtolower($photocheck[1]);
		$time=time();
		$imagename=$time.$file;

		if($photoext!=""&&$photoext=="jpg"||$photoext=="JPG")
		{
		$sql="insert into tbl_slider values('','$imagename')";
		$qry=mysqli_query($con,$sql) or die(mysql_error());

		if ($qry) {
		move_uploaded_file($_FILES['photo']['tmp_name'], "images/slider/".$imagename);
		$_SESSION['msg']="Slider Image Has Been Uploaded";
		header('location:slider.php');
		}
		else
		{
		$_SESSION['msg']="Slider Image Couldnot Be Uploaded";
		header('location:slider.php');
		}
		}
		else
		{
		$_SESSION['noadd']="Please Use Image File With Extension jpg";
		header('location:slider.php');
		}
	}

?>