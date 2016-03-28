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
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <?php
    $pageName=basename(__FILE__);
    include("header.php");
    ?>
    <br/><br/><br/><br/>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4" id="contact">
        <h1>Pizza House</h1>
        <p>618 Church St <br/>
        Ann Arbor, MI, 48104 <br/><br/>
        (734) 995-5095</p>

        <h2>Hours</h2>
        <p>Open Everday <br/>
        10:30am - 4:00am</p>
      </div>
      <div class="col-md-4">
        <iframe
          width="600"
          height="450"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAgRb3JkXuiV9UJ7PBNm_rWOt-PGrLNrAg
            &q=Pizza+House,Ann+Arbor+MI&zoom=18">
        </iframe>
      </div>
      <div class="col-md-2"></div>

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