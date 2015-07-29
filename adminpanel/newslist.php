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
		$sql="delete from tbl_news where id=".$_REQUEST['did'];
		$qry=mysqli_query($con,$sql);
		if($qry)
		{
			$_SESSION['msg']="Your News Has Been Deleted";
			header('location:newslist.php');
		}
		else
		{
			$_SESSION['msg']="Your News Could Not Deleted";
			header('location:newslist.php');	
		}
	}

?>
<html>
<head>
	<title>News Lists | The Apprentice Firm</title>
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
				<h2 style="font-family:rashik;font-size:30px; text-align:center;">News Lists</h2>
				<br><br>
					<table width="1250px">
						<tr>
							<td colspan="3" style="text-align:center; color:green;">
								<?php
									if(isset($_SESSION['msg']))
									{
										echo $_SESSION['msg'];
										// $_SESSION['msg']="";
									}
								?>
							</td>
						</tr>
						<tr style="text-align:center; height:100px;">
							<td><strong>Sn</strong></td>
							<td><strong>News Title</strong></td>
							<td><strong>Date Created</strong></td>
							<td><strong>Delete</strong></td>
						</tr>
						<?php
							$sql="select * from tbl_news order by id desc";
							$qry=mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($qry))
							{
						?>
						<tr style="text-align:center;">
							<td><?php echo $row['id']; ?></td>
							<td><?php echo substr($row['title'], 0,50)."...."; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td><a href="newslist.php?did=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure To Delete This News?')" style="color:red;text-decoration:none;font-size:22px;"><span class="icon-cancel"></span></a></td>
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