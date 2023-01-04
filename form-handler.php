<?php

$name=$_POST[''];
$visitor_email=$_POST[''];
$subject=$_POST[''];
$message=$_POST[''];

$email_from= 'info@jumilanguageclass.com';

$email_subject='New Form Submission';

$email_body="User Name:$name.\n".
            "User Email:$visitor_email.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n";

$to='1181103201@student.mmu.edu.my';

$header="From: $email_from \r\n";

$header="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body,$headers);

header("Location:contact.html");

?>          