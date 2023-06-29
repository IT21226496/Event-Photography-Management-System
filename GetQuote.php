<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Get a Quote</title>
        <link rel ="stylesheet" href="css/quotestyles.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Art Photography</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <script src="js/myscript.js"></script>
    </head>

    <body>   
        <!-- header-->
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
<!--End header-->

        <form action="submitQuote.php" method="POST" >
            <h2>Get a Quote </h2>
            <div  class ="form1">
                <label for="fname">Name:</label><br>
                <input type="text" id="first name" name="first_name" placeholder="Enter your first name" required>
                <input type="text" id="last name" name="last_name"placeholder="Enter your last name" required>
                <h1>First Last </h1><br>

                <label for="email">Email:</label><br>
                <input type = "text"  name = "email" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"required><br><br>

                <label for="phone">Phone Number:</label><br>
                <input type = "phone" placeholder="0777777777" name = "phone" pattern="[0-9]{10}" required><br><br>
         
                <label for="companyname">Company Name:</label><br>
                <input type = "text" placeholder="Enter company name" name = "company_name" required><br><br>
        
                <label for="date">Date of service is being requested:</label><br>
                <input type = "date" name = "day" required><br><br>

                <label for="title">Interested Service:</label><br>
                <select name="event" id="Event" required>
                    <option value="select"name="event">Select</option>
                    <option value="Arts"name="event">Arts</option>
                    <option value="Conference"name="event">Conference</option>
                    <option value="Coperative Events"name="event">Coperative Events</option>
                    <option value="Foods and Drinks">Foods and Drinks</option>
                    <option value="Trade Shows"name="event">Trade Shows</option>
                    <option value="Weddings and Engagements"name="event">Weddings and Engagements</option>
                </select><br><br>
              
                <label for="describe">Describe your event:</label><br>
                <textarea id="Describe" name="describe" rows="8" cols="50" required></textarea><br><br>

                <input type="checkbox" class="inputStyle" name="chkterms" id="checkbox" onclick="enableButton()">Agree to terms and conditions
                <input type="submit" value="Submit Form" name="sbutton" id="submitBtn" disabled>
            </div>
        </form>
        <div class ="form2">
            <h3>Call or Instant Email</h3><br>
                 Call us: +61 5 1234 5678<br>
                Email: dreamart123@gmail.com<br>
            <br>
            <h3>Pricing Information</h3><br>
                <a href="Packages.html">Click here</a> to review packages and prices.
        </div>
        <!-- end foorm-->

        <!--start footer-->
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
<!--End footer-->

   </body>
</html>v