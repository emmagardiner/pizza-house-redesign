<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

	<title>Gift Card Form</title>

<!-- <script src="names.js"></script> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> -->
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

    <div class="galleria">
      <img src="pizzahousefront.jpg" alt="Pizza House Front" data-title="Pizza House" data-description="Ann Arbor"/>
      <img src="restuarantview.jpg" alt="Pizza House Indoor" data-title="Pizza House Interior"/>
      <img src="indoorseating.jpg" alt="Pizza House Indoor 2" data-title="Pizza House Interior"/>
      <img src="indoorseating2.jpg" alt="Pizza House Indoor 3" data-title="Pizza House Interior"/>
      <img src="indoorseating3.jpg" alt="Pizza House Indoor 4" data-title="Pizza House Interior"/>
      <img src="indoorseating4.jpg" alt="Pizza House Indoor 5" data-title="Pizza House Interior"/>
    </div>
    <script>
      Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
      Galleria.run('.galleria');
    </script>

    <br/><br/>

  <div id="content">
    <form class="pure-form pure-form-aligned" method="post" action="process2.php">
    <h2>Make a Reservation</h2>

    <label>First name: <input type="text" id="first_name" placeholder="John" name="first_name" required></label>
    <label>Last name: <input type="text" id="last_name" placeholder="Smith" required></label>
    <label>Date of Reservation: <input id="date-of-reservation" class="date-picker" required="required" type="text" name="date-of-reservation" placeholder="12/10/2014"> </label>
    <label>Time of Reservation:
      <select>
        <option value="five">5:00pm</option>
        <option value="five-thirty">5:30pm</option>
        <option value="six">6:00pm</option>
        <option value="six-thirty">6:30pm</option>
        <option value="seven">7:00pm</option>
        <option value="seven-thirty">7:30pm</option>
        <option value="eight">8:00pm</option>
        <option value="eight-thirty">8:30pm</option>
        <option value="nine">9:00pm</option>
        <option value="nine-thirty">9:30pm</option>
      </select>
    </label>
    <label>Number of people in your party: 
      <select>
        <option value="one">1</option>
        <option value="two">2</option>
        <option value="three">3</option>
        <option value="four">4</option>
        <option value="five">5</option>
        <option value="six">6</option>
        <option value="seven">7</option>
        <option value="eight">8</option>
        <option value="nine">9</option>
        <option value="ten">10</option>
      </select>
    </label>
    <!-- <label>Email: <input type="text" placeholder="jsmith@yahoo.com"></label>
    <label>Confirm Email: <input type="text" placeholde="jsmith@yahoo.com"></label> -->
    <label>Your Email:</label>
    <input type="email" id="email_addr" name="email" placeholder="jsmith@yahoo.com" required>
    <label>Confirm Email:</label>
    <input type="email" id="email_addr_repeat" name="email_addr_repeat" placeholder="jsmith@yahoo.com" required oninput="check(this)">
    <br/><br/>
    <input type="submit" value="Submit Form"/>
    </form>
  </div>



		<br /> <br />

      <?php
      include("footer.php")
      ?>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>