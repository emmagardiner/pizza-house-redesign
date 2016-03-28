<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="galleria/galleria-1.4.2.min.js"></script>

</head>
<body>
<?php
    $pageName=basename(__FILE__);
	include("header.php");
?>
<div class="container" id="pizzahouse">
    <img class="logo" src="pizzahouse.png" id ="logo"></img>
    <h1>Pizza House</h1>   
</div>

	<div>
	<div class="galleria" id="menu">
      <img src="menu1.jpg" alt="menu1"/>
      <img src="menu2.jpg" alt="menu2"/>
      <img src="menu3.jpg" alt="menu3"/>
      <img src="menu4.jpg" alt="menu4"/>
      <img src="menu5.jpg" alt="menu5"/>
      <img src="menu6.jpg" alt="menu6"/>
      <img src="menu7.jpg" alt="menu7"/>
      <img src="menu8.jpg" alt="menu8"/>
      <img src="menu9.jpg" alt="menu9"/>
    </div>
    <script>
      Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
      Galleria.configure({
    	lightbox: true
		});
      Galleria.run('.galleria');

    </script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
	<br/><br/>

<?php
    include("footer.php");
?>
	
</body>
</html>