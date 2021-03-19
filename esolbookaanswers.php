<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESOL Initial Assessment - Book A</title>
    <link rel="stylesheet" href="./assets/css/assessmentform.css">
  </head>
  <body>
    <header>
      <h1>ESOL Initial Assessment - Book A</h1>
    </header>
    <?php
    // Strips whitespace and special characters from user submitted answers
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      //Sets up an empty string variable for the email body
      $email_body_text = "";

      //Gets all the user submitted variables from the form and runs it through the test_input function
      //If no data was inputted, uses a default value.
      //Personal details
      if(isset($_POST['username'])){
        $username = test_input($_POST["username"]);
      }else{
        $username = "Name not set in POST Method";
      }
      if(isset($_POST['phoneno'])){
        $phoneno = test_input($_POST["phoneno"]);
      }else{
        $phoneno = "Phone number not set in POST Method";
      }
      if(isset($_POST['todaydate'])){
        $todaydate = test_input($_POST["todaydate"]);
      }else{
        $todaydate = "Name not set in POST Method";
      }
      //Question 1 answers
      if(isset($_POST['task1q2'])){
        $task1q2 = test_input($_POST['task1q2']);
      }
      if(isset($_POST['task1q3'])){
        $task1q3 = test_input($_POST['task1q3']);
      }
      if(isset($_POST['task1q4'])){
        $task1q4 = test_input($_POST['task1q4']);
      }
      if(isset($_POST['task1q5'])){
        $task1q5 = test_input($_POST['task1q5']);
      }
      if(isset($_POST['task1q6'])){
        $task1q6 = test_input($_POST['task1q6']);
      }
      // Question 3 answers
      if(isset($_POST['q2b'])){
        $q2b = test_input($_POST["q2b"]);
      }else{
        $q2b = "#";
      }
      if(isset($_POST['q2c'])){
        $q2c = test_input($_POST["q2c"]);
      }else{
        $q2c = "#";
      }
      if(isset($_POST['q2f'])){
        $q2f = test_input($_POST["q2f"]);
      }else{
        $q2f = "#";
      }
      if(isset($_POST['q2g'])){
        $q2g = test_input($_POST["q2g"]);
      }else{
        $q2g = "#";
      }
      if(isset($_POST['q2i'])){
        $q2i = test_input($_POST["q2i"]);
      }else{
        $q2i = "#";
      }
      if(isset($_POST['q2l'])){
        $q2l = test_input($_POST["q2l"]);
      }else{
        $q2l = "#";
      }
      if(isset($_POST['q2m'])){
        $q2m = test_input($_POST["q2m"]);
      }else{
        $q2m = "#";
      }
      if(isset($_POST['q2o'])){
        $q2o = test_input($_POST["q2o"]);
      }else{
        $q2o = "#";
      }
      if(isset($_POST['q2q'])){
        $q2q = test_input($_POST["q2q"]);
      }else{
        $q2q = "#";
      }
      if(isset($_POST['q2t'])){
        $q2t = test_input($_POST["q2t"]);
      }else{
        $q2t = "#";
      }
      if(isset($_POST['q2u'])){
        $q2u = test_input($_POST["q2u"]);
      }else{
        $q2u = "#";
      }
      if(isset($_POST['q2w'])){
        $q2w = test_input($_POST["q2w"]);
      }else{
        $q2w = "#";
      }
      if(isset($_POST['q2x'])){
        $q2x = test_input($_POST["q2x"]);
      }else{
        $q2x = "#";
      }
      if(isset($_POST['q2z'])){
        $q2z = test_input($_POST["q2z"]);
      }else{
        $q2z = "#";
      }
      //Question 3 answers
      if(isset($_POST['task3q1'])){
        $task3q1 = test_input($_POST['task3q1']);
      }
      if(isset($_POST['task3q2'])){
        $task3q2 = test_input($_POST['task3q2']);
      }
      if(isset($_POST['task3q3'])){
        $task3q3 = test_input($_POST['task3q3']);
      }
      if(isset($_POST['task3q4'])){
        $task3q4 = test_input($_POST['task3q4']);
      }
      if(isset($_POST['task3q5'])){
        $task3q5 = test_input($_POST['task3q5']);
      }
      //Question 4 answers
      if(isset($_POST['q4title'])){
        $q4title = test_input($_POST['q4title']);
      }
      if(isset($_POST['q4name'])){
        $q4name = test_input($_POST['q4name']);
      } else {
        $q4name = "#";
      }
      if(isset($_POST['q4surname'])){
        $q4surname = test_input($_POST['q4surname']);
      } else {
        $q4surname = "#";
      }
      if(isset($_POST['q4dob'])){
        $q4dob = test_input($_POST['q4dob']);
      } else {
        $q4dob = "#";
      }
      if(isset($_POST['q4address'])){
        $q4address = test_input($_POST['q4address']);
      } else {
        $q4address = "#";
      }
      if(isset($_POST['q4postcode'])){
        $q4postcode = test_input($_POST['q4postcode']);
      } else {
        $q4postcode = "#";
      }
      if(isset($_POST['q4city'])){
        $q4city = test_input($_POST['q4city']);
      } else {
        $q4city = "#";
      }
      if(isset($_POST['q4county'])){
        $q4county = test_input($_POST['q4county']);
      } else {
        $q4county = "#";
      }
      //Question 5 answers
      if(isset($_POST['task51'])){
        $task51 = test_input($_POST['task51']);
      }
      if(isset($_POST['q52'])){
        $q52 = test_input($_POST['q52']);
      } else {
        $q52 = "#";
      }
      if(isset($_POST['q53'])){
        $q53 = test_input($_POST['q53']);
      } else {
        $q53 = "#";
      }
      //Question 6 answers
      if(isset($_POST['q6text'])){
        $q6text = test_input($_POST['q6text']);
      } else {
        $q6text = "#";
      }
      //Question 7 answers
      if(isset($_POST['q7text'])){
        $q7text = test_input($_POST['q7text']);
      } else {
        $q7text = "#";
      }
      //Question 8 answers
      if(isset($_POST['q8text'])){
        $q8text = test_input($_POST['q8text']);
      } else {
        $q8text = "#";
      }
      //Personal details added to email text
      $email_body_text .= "<h2>Personal Details</h2> Name: " . $username . "<br> Telephone Number: " . $phoneno . "<br> Date Completed: " . $todaydate . "<br>";
      //Question 1 answers added to email text
      $email_body_text .= "<h3>Task 1</h3>";
      $email_body_text .= "<p>Each of the following represents text or icons that you might see on a sign. Using the buttons below, select the option that has the same meaning as the sign.</p>";
      $email_body_text .= "<p><strong>Exit</strong></p>";
      $email_body_text .= "The user selected: " . $task1q2 . "<br>";
      $email_body_text .= "The correct answer was This Way Out";
      $email_body_text .= "<p><strong>Fire Exit</strong></p>";
      $email_body_text .= "The user selected: " . $task1q3 . "<br>";
      $email_body_text .= "The correct answer was Emergency Exit";
      $email_body_text .= "<p><strong>&#9432;</strong></p>";
      $email_body_text .= "The user selected: " . $task1q4 . "<br>";
      $email_body_text .= "The correct answer was Information";
      $email_body_text .= "<p><strong>Entrance</strong></p>";
      $email_body_text .= "The user selected: " . $task1q5 . "<br>";
      $email_body_text .= "The correct answer was Way In";
      $email_body_text .= "<p><strong>Push</strong></p>";
      $email_body_text .= "The user selected: " . $task1q6 . "<br>";
      $email_body_text .= "The correct answer was Push Bar to Open";
      //Question 2 answers added to email text
      $email_body_text .= "<h3>Task 2</h3>";
      $email_body_text .= "<p>The user submitted answers were: <br>" . $q2b . "\t - (Correct answer: B) <br>";
      $email_body_text .= $q2c . "\t - (Correct answer: C) <br>";
      $email_body_text .= $q2f . "\t - (Correct answer: F) <br>";
      $email_body_text .= $q2g . "\t - (Correct answer: G) <br>";
      $email_body_text .= $q2i . "\t - (Correct answer: I) <br>";
      $email_body_text .= $q2l . "\t - (Correct answer: L) <br>";
      $email_body_text .= $q2m . "\t - (Correct answer: M) <br>";
      $email_body_text .= $q2o . "\t - (Correct answer: O) <br>";
      $email_body_text .= $q2q . "\t - (Correct answer: Q) <br>";
      $email_body_text .= $q2t . "\t - (Correct answer: T) <br>";
      $email_body_text .= $q2u . "\t - (Correct answer: U) <br>";
      $email_body_text .= $q2w . "\t - (Correct answer: W) <br>";
      $email_body_text .= $q2x . "\t - (Correct answer: X) <br>";
      $email_body_text .= $q2z . "\t - (Correct answer: Z) <br></p>";
      //Question 3 answers added to email text
      $email_body_text .= "<h3>Task 3</h3>";
      $email_body_text .= "<p>I work with a man called Salah. Salah is from Somalia. He is tall. He has black hair. He has black skin. He has brown eyes. He works hard.</p>";
      $email_body_text .= "<p>1. Salah is from Somlaia.</p>";
      $email_body_text .= "The user selected: " . $task3q1 . "<br>";
      $email_body_text .= "The correct answer was True";
      $email_body_text .= "<p>2. Salah is short.</p>";
      $email_body_text .= "The user selected: " . $task3q2 . "<br>";
      $email_body_text .= "The correct answer was False";
      $email_body_text .= "<p>3. Salah has blue eyes.</p>";
      $email_body_text .= "The user selected: " . $task3q3 . "<br>";
      $email_body_text .= "The correct answer was False";
      $email_body_text .= "<p>4. Salah works hard.</p>";
      $email_body_text .= "The user selected: " . $task3q4 . "<br>";
      $email_body_text .= "The correct answer was True";
      $email_body_text .= "<p>5. Salah has black hair.</p>";
      $email_body_text .= "The user selected: " . $task3q5 . "<br>";
      $email_body_text .= "The correct answer was True";
      //Question 4 answers added to email text
      $email_body_text .= "<h3>Task 4</h3>";
      $email_body_text .= "<h3>Personal Information Form</h3>";
      $email_body_text .= "<p>First name: " . $q4name . "</p>";
      $email_body_text .= "<p>Surname: " . $q4surname . "</p>";
      $email_body_text .= "<p>Title: ". $q4title . "</p>";
      $email_body_text .= "<p>Date of Birth: " . $q4dob . "</p>";
      $email_body_text .= "<p>Address: " . $q4address . "</p>";
      $email_body_text .= "<p>Postcode: " . $q4postcode . "</p>";
      $email_body_text .= "<p>City: " . $q4city . "</p>";
      $email_body_text .= "<p>County: " . $q4county . "</p>";
      //Question 5 answers added to email text
      $email_body_text .= "<h3>Task 5</h3>";
      $email_body_text .= "<h3>Answer these questions</h3>";
      $email_body_text .= "<p>1. What must you do if you are sick?</p>";
      $email_body_text .= "The user selected: " . $task51 . "<br>";
      $email_body_text .= "The correct answer was Phone the College.";
      $email_body_text .= "<p>2. What may happen if you do not tell the College why you are missing classes?</p>";
      $email_body_text .= "The user wrote: <br> " . $q52 . "<br>";
      $email_body_text .= "<p>3. If you are a student at Fir Vale Centre which number should you ring if you can't come to class?</p>";
      $email_body_text .= "The user wrote: <br> " . $q53 . "<br>";
      //Question 6 answers added to email text
      $email_body_text .= "<h3>Task 6</h3>";
      $email_body_text .= "<h3>Write about what you like doing in your free time.</h3>";
      $email_body_text .= "The user wrote: <br>";
      $email_body_text .= $q6text;
      //Question 8 answers added to email text
      $email_body_text .= "<h3>Task 7</h3>";
      $email_body_text .= "<h3>Write about what you did last weekend.</h3>";
      $email_body_text .= "The user wrote: <br>";
      $email_body_text .= $q7text;
      //Question 8 answers added to email text
      $email_body_text .= "<h3>Task 8</h3>";
      $email_body_text .= "<h3>Write about what you might do when you finish your English course.</h3>";
      $email_body_text .= "The user wrote: <br>";
      $email_body_text .= $q8text;

      //Specify the email as HTML and send it with the appropriate headers
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= "From: $username";
      $sent = mail('learnforlifeuk@gmail.com', 'Completed ESOL Book A', $email_body_text, $headers);

      #Thank user for submitting their form, or notify them of a problem
       if ($sent) {

       ?><html>
       <head>
       <title>Thank You</title>
       </head>
       <body>
       <h1>Thank You</h1>
       <p>Your form has been submitted!</p>
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
</html>
