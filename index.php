<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
<div class="container">
    <div class="container" id ="container1">
        <div class="container" id="carousel1">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval = "false">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="pizza1.png" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="salad.png" alt="Second slide">
                    </div>
                    <div class="item">
                        <img src="wings.png" alt="Third slide">
 
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
             <div class="main-text hidden-xs">
                <div class="container text-center">
                    <h1>
                        A slice of <span id = "chicago">Chicago</span> in your hometown
                    </h1>
                </div>
            </div>
        </div>
            
    </div>
</div>
</div>
<div id="push">
</div>
<div class = "container" id = "container2">
	<div class="col-md-12 text-center">
		<h1>Good Food &amp; Great Service</h1><br>
		<p>Famous Chicago and Sicilian deep dish and traditional pizzas, pasta, chipatis, and everything in between</p>
		<button type="button" class="btn btn-default" id ="orderbutton">ORDER NOW</button>
	</div>
	<div class = "locations">
	</div>
</div>
<div class = "container" id = "container3">
	<div class="container text-center" id ="locations">
		<img class ="img-responsive img-circle" src="IMG_1848.jpg" alt ="pizza" id="circle1">
		<h4>Locations in</h4>
		<h2>ANN ARBOR</h2>
		<h2> &amp; </h2>
		<h2>EAST LANSING</h2>
		<p class = "italic">Dining in and delivery to 4AM</p>
        <img class ="img-responsive img-circle" src="20111220-sfincione-sicilian-pizza-making-30.jpg" alt ="pizza" id="circle2">
	</div>
</div>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<?php
    include("footer.php");
?>
</body>


</html>