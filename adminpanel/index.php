<?php
	include"includes/database.php";
?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/iconFont.css">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>

<div class="form">
	<form method="post" action="act-login.php">
		<table>
			<tr>
				<td colspan="2" style="text-align:center;"><h2>Admin Login</h2></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center; color:red;">
					<?php
						if(isset($_SESSION['msg']))
						{
							echo $_SESSION['msg'];
							session_unset();
						}
					?>
				</td>
			</tr>
			<tr>
				<td><span class="icon-accessibility"></span>&nbsp;Username</td>
				<td><input type="text" name="username" id="username" placeholder="Enter Your Username" required></td>
			</tr>
			<tr>
				<td><span class="icon-key"></span>&nbsp;Password</td>
				<td><input type="password" name="password" id="password" placeholder="Enter Your Password" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>