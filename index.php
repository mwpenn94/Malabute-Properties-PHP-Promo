<?php 
  session_start();
 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  } 
 
  

$mysqli = new mysqli("localhost", "root", "", "login system");

$query = "SELECT * FROM testimonials";


$result = $mysqli->query($query) ;
$row_count=mysqli_num_rows($result);





  ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Jason Malabute</title>
   
    
</head>
<body>
    <div class="NavBar">
        <nav>
            <h1 class="logo"><a href="index.html">JASON MALABUTE</a></h1>
            
            <div class="navRight"  id="navRight">
                               
                <h2><a href="contact-me.html">CONTACT ME</a></h2>
                <h2><a href="about-me.html" >MY STORY</a></h2>
            </div>
            <div class="menu-icon"><i class="fas fa-bars"></i></div>
        
            
        </nav> 
           
    </div>
    <div class="mobile-menu-wrapper hide-menu">
        <div class="mobile-menu">
            
            <h2><a href="contact-me.html"  >CONTACT ME</a></h2>
            <h2><a href="about-me.html"  >MY STORY</a></h2>
        </div>
    </div> 
    <div class="about-me-container">
        <h1>Admin Dashboard</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Profession</th>
      <th scope="col">Rating</th>
      <th scope="col">Testimonial</th>
    </tr>
  </thead>
  <tbody>
  <?php  while ($row = mysqli_fetch_array($result)) {
       // $fullname = $row["fullname"];
       // $profession = $row["profession"];
        //$rating = $row["rating"];
       // $testimonial = $row["testimonial"];
        echo "<tr><th >". $row["fullname"] ."</th><td>". $row["profession"] ."</td><td>".  $row["rating"] ."</td><td>".  $row["testimonial"] ."</td></tr>";
       
       
  

/*freeresultset*/
//$result->free();
} ?>
 
   
    
    
    
  </tbody>
</table>
        
            

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