<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$Username = $Password = $Pass = '';

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Pass = MD5($Password);
$sql = "SELECT * FROM users WHERE Username='$Username' AND Password='$Pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$User_Id = $row["User_Id"];
		$Username = $row["Username"];
		session_start();
		$_SESSION['User_Id'] = $User_Id;
		$_SESSION['Username'] = $Username;
	}
	header("Location: http://localhost/Latest%20241220%20Rescue%20Combined/mainPage-F.html");
}
else
{
	echo "Invalid email or password";
}
?>