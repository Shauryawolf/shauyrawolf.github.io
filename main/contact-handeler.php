<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$messege = $_POST['messege'];


$email_from = 'shauryameena5@gmail.com';

$email_subject = "New Form Submition"

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Messege: $messege.\n";


$to = "meenagarima63@gmail.com"

$headers = "From $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>