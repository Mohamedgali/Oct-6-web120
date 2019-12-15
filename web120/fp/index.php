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
                    <li><a href="Resources.php">Resources</a></li>
                    <li><a href="contact.php">Contact Us</a></li>

                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> 
                    </li>
                </ul>
            </nav>
        </header>
        
        

        <!-- START LEFT COL -->
        <section>
            <h2 class="pageID">Welcome To Care for Everyone</h2>

            <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
            
            <img src="images/homecare3.jpg" class="tablet" alt="" />



           
                <p> Our personal care and support program is perfect for seniors who are recovering from a recent hospital stay. It allows them to remain at home while they regain their independence, and our caregivers can ensure their specific recovery needs are met.You will have a delightful experience while your stay. 
                    
                </p>
                <p>We work directly with you, your loved one, your family, our caregivers, and a team of health care professionals to provide the correct care. We even vet each of our team members with background checks and drug screenings, so you can feel comfortable allowing them to care for your loved one.</p>
            
        </section>
        <!-- END LEFT COL -->

        <!-- START RIGHT COL -->
        
       
        <aside>
            <h3> Welcome Now</h3>
            <img src="images/inside2.jpg" class="tablet" alt="" />
            <img src="images/Madison.jpg" class="tablet" alt="" />
            <img src="images/inside3.jpg" class="tablet" alt="" />
        </aside>
    <!-- END RIGHT COL -->

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