<?php

$EmailFrom = "smith.melonya@gmail.com";
$EmailTo = "smith.melonya@gmail.com";
$Subject = "729 Solutions Test";
$fName = Trim(stripslashes($_POST['fName'])); 
$lName = Trim(stripslashes($_POST['lName'])); 
$email = Trim(stripslashes($_POST['email'])); 
$message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $fName;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lName;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.php\">";
}

?>