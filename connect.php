<?php

$fname = $_POST["fname"];
echo "First Name: $fname <br><br>";

$lname = $_POST["lname"];
echo "Last Name: $lname <br><br>";

$email = $_POST["email"];
echo "Email: $email <br><br>";

$phone = $_POST["phone"];
echo "Phone: $phone <br><br>";

$conn = new mysqli('localhost','root','','user_db');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} 
else {
    $stmt = $conn->prepare("insert into form  (fname, lname ,email, phone) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $fname, $lname, $email ,$phone);
    $execval = $stmt->execute();
    echo $execval;
    echo " Form Details Succesfully Saved...";
    $stmt->close();
    $conn->close();
}
?>


