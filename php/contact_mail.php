<?php
    
 /*   ini_set('SMTP', "***.com");
    ini_set('smtp_port', "25");
    ini_set('sendmail_from', "xxx@xxx.com");
*/
$name=$_POST['name'];
$phno=$_POST['phno'];
$mail=$_POST['mail'];
$msg=$_POST['msg'];
echo $name;
if($name!='' && $phno !='' && $mail!= '' && $msg != '')
{
    $emailTo = 'hr.minture.io@gmail.com'; //email address
    $replyTo='technokicks2020@gmail.com';
    $subject ='Request Information';
    $body = "Subject: $name \r\n\r\n Phno: $phno \r\n\r\n mail: $mail \r\n\r\n Message: $msg \r\n\r\n ";
    $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To:.$replyTo.';
    
    $result=mail($emailTo, $subject, $body, $headers);
    if($result==true)
    {
        echo "Thank you ";
        
    }
    else
    {
        echo "Sorry something went to wrong ";
    }
}
?>