<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mohamed Ali's WEB120 Portal website</title>
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="noindex,nofollow" />
        <meta charset="utf-8">
        <script src="https://use.fontawesome.com/6a71565c22.js"></script>
       <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
    </head>

   <div class="grid-container"></div>
    <div class="grid-item"></div>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
    
<header>
  <nav>
    <ul class="topnav" id="myTopnav">
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
      <li><a href="template.php">About Us</a></li>
      <li><a href="Service.php">Our Service</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
  <img src="images/desktop1.jpeg" class="desktop" alt=""/>
       <img src="images/home.jpeg" class="phone" alt="" />
       <img src="images/Madison.jpg" class="tablet" alt="" />
<div class="par">
 <p>  My experience so far has been delightful! Because it is very challenging and I'm learning new things about myself... For example, I'm learning how to work with a team and also, how to meet deadlines...
</p>
 
 <p> However, now I feel that I have found something that I want to be passionate about which is computer programming.</p>
</div>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside> 
 <h3>Right Column</h3>
 <img src="images/kkk.jpg" class="phone" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Mohamed Ali!</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>


