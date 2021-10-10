<?php


$mysqli = new mysqli("localhost", "root", "", "login system");

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$fullname = $mysqli->real_escape_string($_POST['fullname']);
$profession = $mysqli->real_escape_string($_POST['profession']);
$rating = $mysqli->real_escape_string($_POST['rating']);
$testimonial = $mysqli->real_escape_string($_POST['testimonial']);


$query = "INSERT INTO testimonials (fullname, profession, rating, testimonial)
            VALUES ('{$fullname}','{$profession}','{$rating}','{$testimonial}')";

$mysqli->query($query);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="main.css">
    <title>Jason Malabute</title>
   
    
</head>
<body>
    <div class="NavBar">
        <nav>
            <h1 class="logo"><a href="index.html">JASON MALABUTE</a></h1>
            
            <div class="navRight"  id="navRight">
                <h2><a href="login.php">LOGIN</a></h2>                    
                <h2><a href="contact-me.html">CONTACT ME</a></h2>
                <h2><a href="about-me.html" >MY STORY</a></h2>
            </div>
            <div class="menu-icon"><i class="fas fa-bars"></i></div>
        
            
        </nav> 
           
    </div>
    <div class="mobile-menu-wrapper hide-menu">
        <div class="mobile-menu">
            <h2><a href="login.php">LOGIN</a></h2>
            <h2><a href="contact-me.html"  >CONTACT ME</a></h2>
            <h2><a href="about-me.html"  >MY STORY</a></h2>
        </div>
    </div> 
    <div class="about-me-container">
        <h1>YOU HAVE SUCCESSFULLY SUBMITTED A TESTIMONIAL, THANK YOU</h1>
        <div class="bio">
                   
        </div>
       
            

    </div>
   
    <div class="quote">
          <h3>"We become what we think about." -Earl Nightingale</h3>
    </div>
    <div class="links">
          <ul>
              <li><a href="https://podcasts.apple.com/us/podcast/15-the-jason-patrick-interview/id1503184253?i=1000479040903" target="_blank">podcast</a></li>
              <li><a href="https://www.biggerpockets.com/member-blogs/13653-jason-malabute-s-investing-journey" target="_blank">blog</a></li>
              <li><a href="about-me.html">my story</a></li>
              <li><a href="contact-me.html">contact me</a></li>
          </ul>
    </div>
    <footer>
        <div class="social-media">
            <ul>
                <li><a href="https://m.facebook.com/profile.php?id=100070982033578&_rdr" target="_blank"><i class="fab fa-facebook"></i></a></li>
              
                <li><a href="https://instagram.com/jasonmalabute?igshid=1qlby6ahcn198" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/jason-malabute-cpa-mba-31649550/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://vm.tiktok.com/ZMedhtghv/" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                <li><a href="https://mobile.twitter.com/jasonmalabute" target="_blank"><i class="fab fa-twitter"></i></a></li>              
            </ul>
            <a href="https://www.biggerpockets.com/member-blogs/13653-jason-malabute-s-investing-journey" target="_blank"><img src="https://images.squarespace-cdn.com/content/v1/578d631e59cc68eeb0cb8104/1469043257016-8OP6IHMXP3LE1QQY6RG7/image-asset.png?format=300w" style=" width: 100.772%; height: 100%; "></a>
      </div>
      <div class="copyright">
        <p style="text-align:center;white-space:pre-wrap;" class="">Copyright Jason Malabute 2019 |&nbsp;<a href="privacy-policy.html">PRIVACY POLICY</a>/<a href="terms-conditions.html">Terms and conditions</a></p>
      </div>
    </footer>
    
    
    <script src="https://kit.fontawesome.com/fc9e053d84.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>