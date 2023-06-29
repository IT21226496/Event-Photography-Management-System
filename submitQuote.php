<!DOCTYPE html>
<html>
    <head>
    <title>Dream Art Photography</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/quotestyles.css">

        <script src="js/myscript.js"></script>
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

<br><br><br>






     <h4>Form Submitted Successfully</h4> <br> <br><br> 
    <div class ="form3">

    <?php
$first_name = $_POST["first_name"];
echo "First Name: $first_name <br><br>";

$last_name = $_POST["last_name"];
echo "Last Name: $last_name <br><br>";

$email = $_POST["email"];
echo "Email: $email <br><br>";

$phone = $_POST["phone"];
echo "Phone Number: $phone <br><br>";

$day = $_POST["day"];
echo "Date of service is being requested: $day <br><br>";

$event = $_POST["event"];
echo "Interested Service: $event <br><br>";

$describe = $_POST["describe"];
echo "Describe your event: $describe <br><br>";

$conn = new mysqli('localhost','root','','user_db');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into quote  (first_name, last_name,email, phone) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi", $first_name, $last_name, $email ,$phone);
    $execval = $stmt->execute();
    echo $execval;
    echo " Form Details Succesfully Saved...<br><br><br>";
    $stmt->close();
    $conn->close();
}
?>

<br>

<center>
<a href="Packages.html">Click here</a> to proceed your Payment.
</center>

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








     
  