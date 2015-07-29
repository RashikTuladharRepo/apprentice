<!--Created By Rashik Tuladhar-->
<?php
include"includes/database.php";

$username = $_POST['username'];
$password = $_POST['password'];


//below four commands are sql injection which stops extra characters as input
$user = stripslashes($username);
$pass = stripslashes($password);
$user1 = mysqli_real_escape_string($con,$user);
$pass1 = md5(mysqli_real_escape_string($con,$pass));


$sql="select * from tbl_login";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);


if($row['username']==$user1 && $row['password']==$pass1)
{
    $_SESSION['username']=$row['details'];
//    print"<script>window.location.href='dashboard.php'</script>";
    header('location:dashboard.php');
}
else
{
    $_SESSION['msg'] = 'Invalid Username and Password';
//    print "<script>window.location.href='index.php'</script>";
    header('location:index.php');
}









?>