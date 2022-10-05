<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
$address = $_POST['address'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$date = $_POST['date'];
$baloon = $_POST['baloon'];
$custom = $_POST['custom'];
$code = $_POST['code'];
$text = $_POST['text'];
$email = $_POST['email'];
$to = "shopgift331@gmail.com";
$subject = "Order Mail";
$txt = "name = ". $name . "\r\n subject =" . $subject . "\r\n phone = " . $phone . "\r\n payment =" . $payment . "\r\n address =" . $address . "\r\n city =" . $city . "\r\n zip =" . $zip . "\r\n date =" . $date . "\r\n baloon =" . $baloon . "\r\n code = p-001" . $code . "\r\n text =" . $text . "\r\n email =" . $email . "/r/n Custom Text = " . $custom;
$headers = "From: noreply@flowersgiftshop.com" . "\r\n" .
"CC: anyone@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thanks.html");
?>