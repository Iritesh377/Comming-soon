<?php
//get data from form  
$email= $_POST['email'];
$to = "contact@gemunetwork.com";
$subject = "Mail From Gemu Network";
$txt ="Email = " . $email .;
$headers = "From: noreply@gemunetwork.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>