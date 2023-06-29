<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dream Art Photography</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
<div class="dropdwn">
            <div class="container1">
           
          <nav>
            <img class="logo" src="image/logo1.png" alt="">

            <ul>
                <li><a href="index.html">Home</a></li>
                
                <li><a href="gallery.html">Gallery</a>
                     <ul>
                         <li><a href="art.html">Art</a></li>
                         <li><a href="conference.html">Conference</a></li>
                         <li><a href="cooperativeevents.html">Cooperative Events</a></li>
                         <li><a href="food&drinks.html">Food & drinks</a></li>
                         <li><a href="tradeshow.html">Trade Show</a></li>
                         <li><a href="wedding&engagement.html">Weddings & Engagement</a></li>
                     </ul>
                </li>
                
                <li><a href="aboutus.html">About Us</a>
                    <ul>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="partners.html">Partners</a></li>
                        <li><a href="opportunities.html">Opportunities</a></li>
                    </ul>
                </li>

                <li><a href="feedback.html">Feedback</a></li>

                <li><a href="contact.html">Contact</a>
                    <ul>
                        <li><a href="GetQuote.php">Get a Quote</a></li>
                        <li><a href="Packages.html">Pricing Information</a></li>      
                    </ul>
                </li>

                <li><a href="Access.html">Access</a>
                    <ul>
                        <li><a href="register.php">Client</a></li>
                        <li><a href="index1.php">Admin</a></li>    
                    </ul>
                </li>   
            
            </ul>
         </nav>
        </div>
        </div>  










   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="Sign Up" class="btn" id="mySignupBtn">
      <p>already have an account? <a href="login.php">Sign In now</a></p>

   </form>

</div>
<script src="js/app.js"></script>
<footer class="footer">
         <div class="container">
             <div class="row">

                 <div class="footer-col">
                    <h2>Gallery</h2>
                    <ul>
                        <li><a href="art.html">Art</a></li>
                        <li><a href="conference.html">Conference</a></li>
                        <li><a href="cooperativeevents.html">Cooperative Events</a></li>
                        <li><a href="food&drinks.html">Food & drinks</a></li>
                        <li><a href="tradeshow.html">Trade Show</a></li>
                        <li><a href="wedding&engagement.html">Weddings & Engagement</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="partners.html">Partners</a></li>
                        <li><a href="opportunities.html">Opportunities</a></li>    
                    </ul>
                </div>

                <div class="footer-col">
                    <h2>Contacts</h2>
                    <ul>
                        <li><a href="getaquote.html">Get a Quote</a></li>
                        <li><a href="pricingInformation.html">Pricing Information</a></li>      
                    </ul>
                </div>

                <div class="footer-col">
                    <h2>Access</h2>
                    <ul>
                        <li><a href="client.html">Client</a></li>
                        <li><a href="admin.html">Admin</a></li>    
                    </ul>
                </div>

                <div class="footer-col">
                    <h2>Follow us</h2>
                    <div class="social-links">                 
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>   

                </div>

             </div>
         </div>
        
         <p>@Copyright . Dream Art Photography Pvt.Ltd . All Right Reserved.</p>
        
     </footer>  

       <div style="margin: top 500px""></div>  



</body>
</html>