<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phonee = $_POST['phonee']
$message = $_POST['message'];
$to = "shopgift331@gmail.com";
$subject = "Contact Mail";
$txt = "name = ". $name . "\r\n message = " . $message . "\r\n email =" . $email . "/r/n Phone = " . $phonee;
$headers = "From: noreply@giftshop.com" . "\r\n" .
"CC: anyone@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:contact.html");
?>