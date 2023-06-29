<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
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







  <center><h1 style="color:orangered;">My profile</h1></center>

<div class="container2">
   

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="src\image\default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
      <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
   </div>

</div>
















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