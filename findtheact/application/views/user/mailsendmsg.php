<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title>Untitled Document</title>

</head>



<body>

<?php echo "Welcome " .$username; ?>

										<br />

										<strong> Dear User, </strong>

										<br />

										<br /> 

										<?php

										if($sentmail)

											{

										?>

										We have sent a confirmational E-Mail to <strong><?php echo  $email;?></strong> with an account activation link. Kindly click on the link or copy and paste the link on to a browser URL to activate your account at American Site Monitoring.

										<br />

										<br />

										<strong> In case you dont get the mail in your inbox </strong>

										<br />

										Kindly check your SPAM folder for the activation mail. In case you find the confirmation mail in yur SPAM folder, kindly add our ID to the trusted E-Mail sender list. 

										<br />

										<br />

										

									</p>

		

																<?php

}

else {

?>

We believe the E-Mail ID you provided is already registered with us.

<?php

	}

?>



</body>

</html>

