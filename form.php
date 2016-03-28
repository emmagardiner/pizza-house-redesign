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

  <script>

  function check(input) {
   if (input.value != document.getElementById('email_addr').value) {
      input.setCustomValidity('The two email addresses must match.');
    } else {
    // input is valid -- reset the error message
      input.setCustomValidity('');
    }
  }
  </script>
<!-- <script src="names.js"></script> -->
</head>
<body>
  <!-- Navigation bar -->
 <?php
 $pageName=basename(__FILE__);
 include("header.php");
 ?>
	
	
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

<div class="container" id="pizzahouse">
    <img class="logo" src="pizzahouse.png" id ="logo"></img>
    <h1>Pizza House</h1>   
</div>
	<div id="content" class="giftcard">
		<form class="pure-form pure-form-aligned" method="post" action="process.php">
		<h2>Gift Card Form</h2>
    <h3>General Information</h3>
		<label>First name: <input type="text" id="first_name" placeholder="John" name="first_name" required></label>
		<label>Last name: <input type="text" id="last_name" placeholder="Smith" required></label>
		<label>Giftcard Amount
			<select>
				<option value="ten">10</option>
        <option value="fifteen">15</option>
        <option value="twenty">20</option>
        <option value="twenty five">25</option>
				<option value="fifty">50</option>
			</select>
		</label>
		<label>Quantity
			<select>
				<option value="one">1</option>
				<option value="two">2</option>
        <option value="three">3</option>
        <option value="four">4</option>
        <option value="five">5</option>
			</select>
		</label>
		<!-- <label>Email: <input type="text" placeholder="jsmith@yahoo.com"></label>
		<label>Confirm Email: <input type="text" placeholde="jsmith@yahoo.com"></label> -->
    <label>Email:</label>
    <input type="email" id="email_addr" name="email" placeholder="jsmith@yahoo.com" required>
    <label>Confirm Email:</label>
    <input type="email" id="email_addr_repeat" name="email_addr_repeat" placeholder="jsmith@yahoo.com" required oninput="check(this)">
    <br/><br/>
    <h3>Personalize Your Message</h3>
		<label>To <input type="text" placeholder="Jane"></label>
		<label>From <input type="text" placeholder="John"></label>
		<label>Message <input type="text"></label> <br />
		<input type="submit" value="Submit Form"/>
    </form>
	</div>
<!-- <div id = "content">
<h1> Wines Science Olympiad Coach Registration </h1>
<p>
Thank you for being part of the Science Olympiad!  
 </p>
<form method="GET"
      action="http://www.cnn.com">
 
<h2>General Info </h2>
  <label>Full name:
  <input type="text" id="full_name" name="full_name" placeholder="Jane Doe" required></label>
  
  <label>Event to coach:
      <select id="NameDropDown" name="D1"></select> 
  </label>

  Would  you like to coach a second team?<br/>            
  <button type="button" onclick="openMe()">Yes</button>
<button type="button"  onclick="closeMe()">No</button>
     
 
<div id = "secondTeam" class ="gone">
  <fieldset>
  <label>2nd event to coach:
      <select id="NameDropDown2" name="D2"></select>
      </fieldset>
</div>  

<div style="clear:left"></div>
  <label>Preferred email address:</label>
  <input type="email" id="email_addr" name="email_addr" required>

  <label>Repeat email address:</label>
  <input type="email" id="email_addr_repeat" name="email_addr_repeat" required oninput="check(this)">

  <label>Cell phone number for day of event emergencies:</label>
  <input type="tel" id="cell" name = "cell"
  placeholder="(734)555-0000" name="cell" required>
  
<p> 
Thank you for your commitment to coaching an event.
GO WINES!
 </p>
  <input type="submit" value="Submit Form" /> 
</form>
</div> -->
		<br /> <br />

  <!-- Footer -->
<?php
include("footer.php");
?>

</body>
</html>