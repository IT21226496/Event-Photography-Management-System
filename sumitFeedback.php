<?php
$feedback_txt = $_POST['feedback_txt'];

$conn = new mysqli('localhost','root','','user_db');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into feed2(feedback_txt) values(?)");
    $stmt->bind_param("s",$feedback_txt);
    $execval = $stmt->execute();
    echo $execval;
    echo " Thank you for your feedback. We\'ll appreciate!";
    $stmt->close();
    $conn->close();
}
?>
