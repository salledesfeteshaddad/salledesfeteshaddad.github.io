<?php
$name=$_Post['Nom'];
$visitor_email=$_Post['E-mail'];
$message=$_Post['Votre message ici ...'];
 $email_from='lysahaddad7@gmail.com';
 $email_subject="New Form Submission";
 $email_body="User Name: $name.\n".
                "User Email:$visitor_email.\n".
                    "User Message: $message.\n";
$to = "salledesfetes.haddad06@gmail.com";
$headers= "from: $email_from\r\n";
$headers.="reply-To: $visitor_emai \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:index.html");
?>