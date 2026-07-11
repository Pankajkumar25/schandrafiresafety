<?php
$to      = 'nitinak432@gmail.com';
$subject =$_POST['email'];
$Nm=$_POST['name'];
$mobile =$_POST["mobile"];
$msg =$_POST["requirement"];
$message = "\r\n Name " . $Nm . "\r\n Phone: ". $mobile  . "\r\n Email:" . $subject . "\r\n Message: ". $msg  . "\r\n";

$headers = array(
    'From' => 'S.Chandrafire.com',
    'Reply-To' => 'S.Chandrafire.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

if(mail($to, $subject,$message,$headers))
{
        header("Location : thank_you.html");
}
else{
        echo("Server error");
}

?>