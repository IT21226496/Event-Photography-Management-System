<?php 
session_start();

if ( isset($_SESSION['user_name'])) {

 
}
else{
    header("Location: index1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dream Art Photography</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<h1>Hello! <?php echo $_SESSION['user_name']; ?>   </h1>
<a href="logout.php">Logout</a>
<p style="color: yellow;font-size: 30px;text-align: center;">To Add New Photos<p> <br><br><a href="add_photos.html">Click Here </a>

</body>
</html>









