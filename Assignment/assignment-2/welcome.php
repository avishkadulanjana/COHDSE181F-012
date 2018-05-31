<html>
<head>
</head>
<title>Details</title>
<body>
<style>
body{
	background-image:url(IMG_0359.jpg);
	font-size:30px;
	font-style:oblique;
	font:"Times New Roman", Times, serif;
	color:#9B292B;
	im
	
}
</style>
</body>
</html>

<?php
//echo "";
if(isset($_COOKIE["user"]))
{
	$user=$_COOKIE["user"];
	echo"welcome,$user"."<br/>";
	
}
else
{
	header('Location:Login.php');
}
echo'<input type=\'submit\' name=\'btnLogout\' value=\'Logout\'>';
if(isset($_POST['btnLogout']))
{
	setcookie("user","$user",time()-360);
	header("Refresh:0");
}

?>