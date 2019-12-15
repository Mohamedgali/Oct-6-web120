<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Mohamed Ali's WEB120 Portal Website</title>
     <meta name="viewport" content="width=device-width" />
     <meta name="robots" content="noindex,nofollow" />
     <meta charset="utf-8" />
     <script src="https://use.fontawesome.com/6a71565c22.js"></script>
     <link rel="stylesheet" href="css/nav.css" />
     <link rel="stylesheet" href="css/portal5.css" />
    </head>
    
    <div class="grid-container"></div>
    <div class="grid-item"></div>
   
    <div class="body">
         <!-- START WRAPPER -->
    
    
    
    
   <main class="wrapper">
     
       
       <header>
     <h1><a href="index.php"><i class="logo fa fa-home"></i>Yusuf’s Home Care Webpage</a></h1>
     <nav>
                <ul class="topnav" id="myTopnav">
                    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
                    <li><a href="index.php" class="selected">Welcome</a></li>
                    <li><a href="about1.php">About Us</a></li>
                    <li><a href="Service.php">Our Service</a></li>
                    <li><a href="contact.php">Contact Us</a></li>

                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> 
                    </li>
                </ul>
            </nav>
     </header>
       
       
     <section>
   <h2 class="pageID">Welcome To Care for Everyone</h2>
         
            <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
         
       <img src="images/black2.jpg" class="desktop" alt=""/>
       <img src="images/rsz_1img_5201.jpg" class="phone" alt="" />
       <img src="images/rsz_1img_5201.jpg" class="tablet" alt="" />

       
       <h2 class="subheader">A little about me!</h2>
       
       <p>Welcome to my Home Care Webpage. My name is Yusuf Yusuf. Born and raised in Somalia. I came to U.S. in 2007. “I always had the ambition to create my own business”. After working different sectors, I decided to go to school and registered at Highline Community College. I graduated with Associate Degree and decided to move to Bellingham, Washington. I continue my education and graduated in 2016 with Bachelor of science in Sociology and minor in Psychology. </p>
<p> I moved to Portland Maine after I graduated and started a job at Gateway Community Services as a Case Manager. In April 2019 I decided to start Home Health Care agency and named Care for Everyone. This company will provide services to elderly and Adults with disability.
</p>
</section>
<!-- END LEFT COL -->   
   
<!-- START Footer -->
   <footer>
            <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Mohamed Ali!</a>, All
                    Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
</div>

</html>