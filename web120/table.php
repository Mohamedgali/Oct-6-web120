<!DOCTYPE html>
<html>
<head>
<title>Mohamed Ali's WEB120 Portal website</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/table.css" />

</head> 

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Mohamed Ali's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
        <li><a href="table.php">table</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Mohamed Ali</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
   <!-- this is the new code!-->
    
    

<table id= "mainContent">
    <thead>
    
  <tr>
    <th>Name</th>
    <th>Description and base ingredients</th>
    <th>Cost</th>
  </tr>
        </thead>
    <tbody>
  <tr>
    <td>Hotdog</td>
    <td>A grilled or steamed link-sausage sandwich</td>
    <td>$6</td>
  </tr>
  <tr>
    <td>Burger </td>
    <td>A sandwich of cooked patties of ground meat.</td>
    <td>$15</td>
  </tr>
  <tr>
    <td>Taco</td>
    <td>Wheat tortilla topped with a filling. </td>
    <td>$5</td>
  </tr>
  <tr>
    <td>Chicken wings</td>
    <td>Deep-fried wigs then dipped in a sauce</td>
    <td>$12</td>
  </tr>
    <tr>
    <td>Egg roll</td>
    <td>Chopped pork fillings inside a wrapped </td>
    <td>$7</td>
  </tr>
        <tr>
    <td>Salad</td>
    <td>Mixture of pieces of vegetables or fruit. </td>
    <td>$9</td>
  </tr>
    </tbody>
    </table>
	

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
</html>
