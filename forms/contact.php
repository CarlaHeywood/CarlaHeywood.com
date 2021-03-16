<?php
  $from = $_POST['email'];
  $name = $_POST['name'];
  $subject = "New Website Contact";
  $message = "Name: " . $_POST['name'] . "\n\n" . "Email: ". $_POST['email'] ."\n\n" . "Subject: " . $_POST['subject'] ."\n\n" . "Message: " . $_POST['message'];
  //$message2 = "Thank you for reaching out and connecting!!\n\nI have recieved your message and will get back to you as soon as possible.\nHere is the message you left:\n\n" . $_POST['message'] . "\n\nTalk soon!";
  $headers = "From: Carla Heywood <noreply@carlaheywood.com>\r\n";

  if( mail("carlaheywood24@gmail.com",$subject,$message,$headers) ){
    //mail($email,"Confirming Contact - CarlaHeywood.com",$message2,$headers);
    echo 'Thank you for reaching out and connecting!!<br>I have recieved your message and will get back to you as soon as possible.';
  }
  else {
    die ('Please try again.');
  }
?>




