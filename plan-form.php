<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

    // Your code here to handle a successful verification

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$radioQuestion = $_POST['radioQuestion'];
$propertySize = $_POST['propertySize'];
$radioQuestion2 = $_POST['radioQuestion2'];
$spaces = $_POST['spaces'];
$limitations = $_POST['limitations'];
$entertain = $_POST['entertain'];
$travel = $_POST['travel'];
$energy = $_POST['energy'];
$smartphone = $_POST['smartphone'];
$achieve = $_POST['achieve'];
$control = $_POST['control'];



$email_from = "$email";//<== update the email address
$email_subject = "New AVSI Guide Plan";
$email_body = "You have received a new request for a quote from the user $fName $lName.\n".
              "Here are the details:\n First Name: $fName \n Last Name: $lName \n Email: $email
              \n What type of automation project are you planning? $radioQuestion 
              \n What is the square footage of your of your property? approximately $propertySize square feet
              \n What is your time frame to begin your automation project? $radioQuestion2
              \n What spaces are involved in your automation project? $spaces
              \n Does anyone in your family have physical limitations that should be considered? $limitations
              \n Do you entertain alot? $entertain 
              \n Do you travel often or spend alot of time away from home? $travel
              \n Is energy efficiency important to you? $energy
              \n Are you a smartphone or tablet user(iOS or Android)? $smartphone
              \n What do you want to achieve with your automation project? $achieve
              \n What do you want to control? $control";
              


    
$to = "rc.nato94@gmail.com";//<== email
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: basics.html');
?>