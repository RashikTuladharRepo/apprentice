<?php
	error_reporting(0);
	include"includes/database.php";
	if(!isset($_SESSION['username'])||$_SESSION['username']=="")
	{
		header('location:index.php');
		$_SESSION['msg']="Please Login First";
	}

	if(isset($_REQUEST['did'])||$_REQUEST['did']!="")
	{
		$sql="delete from tbl_slider where id=".$_REQUEST['did'];
		$qry=mysqli_query($con,$sql);
		if($qry)
		{
			unlink("images/slider/".$_REQUEST['img']);
			$_SESSION['msg']="Your Image Has Been Deleted";
			header('location:sliderimages.php');
		}
		else
		{
			$_SESSION['msg']="Your Image Could Not Deleted";
			header('location:sliderimages.php');	
		}
	}

?>
<html>
<head>
	<title>Slider Images | The Apprentice Firm</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/iconFont.css">
    <link rel="icon" href="images/logo.png" type="image/png">
    <style type="text/css">
    	tr:nth-child(even) {background: grey}
		tr:nth-child(odd) {background: #FFF}
    </style>
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
		<div class="container" style="">
				<form method="post" action="#" enctype="multipart/form-data">
				<h2 style="font-family:rashik;font-size:30px; text-align:center;">Delete Slider Images</h2>
				<br><br>
					<table width="1250px">
						<tr>
							<td colspan="3" style="text-align:center; color:green;">
								<?php
									if(isset($_SESSION['msg']))
									{
										echo $_SESSION['msg'];
										session_unset();
									}
								?>
							</td>
						</tr>
						<tr style="text-align:center; height:100px;">
							<td><strong>Sn</strong></td>
							<td><strong>Image</strong></td>
							<td><strong>Delete</strong></td>
						</tr>
						<?php
							$sql="select * from tbl_slider order by id desc";
							$qry=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($qry))
							{
						?>
						<tr style="text-align:center;">
							<td><?php echo $row['id']; ?></td>
							<td><img src="images/slider/<?php echo $row['image']; ?>" width="400px" height="200px"></td>
							<td><a href="sliderimages.php?did=<?php echo $row['id']; ?>&img=<?php echo $row['image']; ?>" onclick="return confirm('Are You Sure To Delete This Image?')" style="color:red;text-decoration:none;font-size:22px;"><span class="icon-cancel"></span></a></td>
						</tr>
						<?php
							}
						?>
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