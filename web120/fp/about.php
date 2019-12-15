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
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="Service.php">Our Service</a></li>
                    <li><a href="contact.php">Contact Us</a></li>

                    <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
        </header>

        <!-- START LEFT COL -->
        <section>

            <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
            <img src="images/black2.jpg" class="tablet" alt="" />
            <p>Welcome to my portal page. My name is Mohamed Ali I’m from Seattle, and I also lived in Oregon and
            California. I guess I love the North West very much. This is my second quarter at Seattle Central College
            and I’m a student of programming program. I have been interests in programming since last year. Finally, I
            made the right decision to enroll at Seattle Central. I have a lot of interests in learning programming,
            because I wanted to start a new career in a field that is in demand. I also, I want to gain great experience
            on how computers work. Before taking any classes I knew nothing about computers. However, I feel now that
            I’m on the right track to fulfill my goals in life. I want to create my own websites and create my own
            portfolio</p>
                <p> I know it’s a long journey, but I want to enjoy the process of Learning. In my spare time I enjoyed hiking
            and outdoor activities. I’m a big fan of soccer I have been playing soccer since I was a kid. However, now I
            feel that I have found something that I want to be passionate about which is computer programming.
                </p>
            

            
            
           
        </section>
    <!-- END LEFT COL -->
        <!-- START RIGHT COL -->

       

        <!-- END RIGHT COL -->

    



       <!-- START Footer -->
        <footer>
            <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Mohamed Ali!</a>, All
                    Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small>
            </p>
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