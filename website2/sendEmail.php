<?php 
$name = $_POST['username'];
$uemail = $_POST['email'];
$contact = $_POST['mobile'];
$message = $_POST['comment'];

$mail_to = 'natasharaut1012@gmail.com';
$subject = 'Message from site Visitor' .$name;

$body_message = 'From: '.$name ."\n";
$body_message =  'E-mail: '.$uemail ."\n";
$body_message = 'From: '.$contact ."\n";
$body_message =  'Message: ' .$message ."\n";

$headers = 'From' .$uemail."\r\n";
$headers = 'Reply-To' .$uemail."\r\n";

$mail_status = mail($mail_to,$subject,$body_message,$headers);
 
if($mail_status){ ?>
    <script language="javascript" type="text/javascript">
    alert('Thank you for the message. we will contact you shortly.');
    window.location ='https://knowmyblog.000webhostapp.com/';
    </script>
    <?php
}
else { ?>
 <script language="javascript" type= "text/javascript">
 alert ('Message failed. Please, send an email to natasha');
 window.location ='https://knowmyblog.000webhostapp.com/';


}


}
