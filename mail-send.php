<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      #Receive user input
      $user_name = $_POST['user-name'];
      $user_input_text = $_POST['mail-text'];
      $mail_text = "The users name is: <h1>" . $user_name . "</h1> \n" . "Their message is: " . $user_input_text;

      #Send email
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: $user_name";
      $sent = mail('garethhughes81@googlemail.com', 'PHP Email Test', $mail_text, $headers);

      #Thank user or notify them of a problem
       if ($sent) {

       ?><html>
       <head>
       <title>Thank You</title>
       </head>
       <body>
       <h1>Thank You</h1>
       <p>Thank you for your feedback.</p>
       </body>
       </html>
       <?php

       } else {

       ?><html>
       <head>
       <title>Something went wrong</title>
       </head>
       <body>
       <h1>Something went wrong</h1>
       <p>We could not send your feedback. Please try again.</p>
       </body>
       </html>
       <?php
       }
    ?>
  </body>
</html>
