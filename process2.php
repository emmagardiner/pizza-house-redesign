<?php
    $filename = "GiftCardOrders.csv";
    $exists = (file_exists($filename));

 	$handle = fopen($filename, 'a');
	$msg = "Thank you for your reservation.\n";//EMail message
	$stringToAdd="";	//File into

	if (!$exists){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";
		}
		$stringToAdd.="\n";
		$new=False;
		fwrite($handle, $stringToAdd);
	}
	// $stringToAdd="";
	// foreach($_POST as $name => $value) {
	// 	print "$name : $value<br>";
	// 	$msg .="$name : $value\n";
	// 	$stringToAdd.="$value,";
	// }
	// $stringToAdd.="\n";

	fwrite($handle, $stringToAdd);
	//now close the file
	fclose($handle); 
	$to = $_POST["email"];
	$headers = "From: ". $_POST["first_name"] ."<".$_POST["email"]. ">\r\n";
	
	mail($to, 'Registration', $msg,$headers);



	// echo "An email has been sent to your account.";
?>

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
    include("header.php");
    ?>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <br /> <br />

 -->
 <div id="process">
  <h3> An email has been sent to your account </h3>
  </div>
 
    <br /> <br />

  <!-- Footer -->
  <?php
    include("footer.php");
  ?>
</body>
</html>