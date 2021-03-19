<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learn For Life - Pre-Entry/E1 Assessment</title>
    <link rel="stylesheet" href="assessmentform.css">
  </head>
  <body>
    <header>
      <h1>Learn For Life - Pre-Entry/E1 Assessment</h1>
    </header>

    <div id="mainContainer">
      <form method="POST" action="<?php echo htmlspecialchars("e1assessmentanswers.php");?>">
        <div class="personalDetails">
          <h2>Personal Details</h2>
          <input type="text" name="username" value="Your Name"><br>
          <input type="text" name="phoneno" value="Telephone Number"><br>
          <input type="date" name="todaydate" value="Date"><br>
        </div>

        <div id="question1">
          <h2>1. The Alphabet</h2>
          <h3>Write the correct letters in the empty boxes</h3>
              <input type="text" class="letterInput" name="" value="A" disabled>
              <input type="text" class="letterInput" name="q1b" value="">
              <input type="text" class="letterInput" name="q1c" value="">
              <input type="text" class="letterInput" name="" value="D" disabled>
              <input type="text" class="letterInput" name="" value="E" disabled>
              <input type="text" class="letterInput" name="q1f" value="">
              <input type="text" class="letterInput" name="q1g" value="">
              <input type="text" class="letterInput" name="" value="H" disabled>
              <input type="text" class="letterInput" name="q1i" value="">
              <input type="text" class="letterInput" name="" value="J" disabled>
              <input type="text" class="letterInput" name="" value="K" disabled>
              <input type="text" class="letterInput" name="q1l" value="">
              <input type="text" class="letterInput" name="q1m" value="">
              <input type="text" class="letterInput" name="" value="N" disabled>
              <input type="text" class="letterInput" name="q1o" value="">
              <input type="text" class="letterInput" name="" value="P" disabled>
              <input type="text" class="letterInput" name="q1q" value="">
              <input type="text" class="letterInput" name="" value="R" disabled>
              <input type="text" class="letterInput" name="" value="S" disabled>
              <input type="text" class="letterInput" name="q1t" value="">
              <input type="text" class="letterInput" name="q1u" value="">
              <input type="text" class="letterInput" name="" value="V" disabled>
              <input type="text" class="letterInput" name="q1w" value="">
              <input type="text" class="letterInput" name="q1x" value="">
              <input type="text" class="letterInput" name="" value="Y" disabled>
              <input type="text" class="letterInput" name="q1z" value=""><br>
          </div>

          <div id="question2">
            <h2>2. Write the capital letter next to the letters below.</h2>
              t - <input type="text" class="letterInput" name="q21" value=""><br>
              r - <input type="text" class="letterInput" name="q22"><br>
              b - <input type="text" class="letterInput" name="q23"><br>
              e - <input type="text" class="letterInput" name="q24"><br>
              h - <input type="text" class="letterInput" name="q25"><br>
          </div>

          <div id="question3">
            <h2>3. Put the days of the week in the correct order.</h2>
            <p>Tuesday, Sunday, Thursday, Wednesday, Monday, Saturday, Friday</p>
            <textarea name="q3text" rows="1" cols="80">Write your answer here.</textarea>
          </div>

        <div id="question4">
          <h2>4. Fill in the missing numbers from 1 – 10.</h2>
          <input type="text" class="letterInput" name="q41" value="1" disabled>
          <input type="text" class="letterInput" name="q42" value="">
          <input type="text" class="letterInput" name="q43" value="">
          <input type="text" class="letterInput" name="q44" value="4" disabled>
          <input type="text" class="letterInput" name="q45" value="5" disabled>
          <input type="text" class="letterInput" name="q46" value="">
          <input type="text" class="letterInput" name="q47" value="7" disabled>
          <input type="text" class="letterInput" name="q48" value="">
          <input type="text" class="letterInput" name="q49" value="9" disabled>
          <input type="text" class="letterInput" name="q410" value="">
        </div>

        <div id="question5">
          <h2>5. Fill in the form below.</h2>
          <p>First name: <br><input type="text" name="q5name" value=""></p>
          <p>Surname: <br><input type="text" name="q5surname" value=""></p>
          <p>Date of Birth: <br><input type="text" name="q5dob" value=""></p>
          <p>Address: <br><input type="text" name="q5address" value=""></p>
          <p>Postcode: <br><input type="text" name="q5postcode" value=""></p>
          <p>City: <br><input type="text" name="q5city" value=""></p>
          <p>County: <br><input type="text" name="q5county" value=""></p>
          <p>Country: <br><input type="text" name="q5country" value=""></p>
        </div>

        <div id="question6">
          <h2>6. Write the words in the correct order to make a sentence.</h2>
          <p class="example">Example: on He went Monday: <br><input type="text" name="" value="He went on Monday" disabled></p>
          <p>My is hot coffee: <br><input type="text" name="q61" value=""></p>
          <p>making She tea is: <br><input type="text" name="q62" value=""></p>
          <p>shop went They to the: <br><input type="text" name="q63" value=""></p>
          <p>is running She fast: <br><input type="text" name="q64" value=""></p>
          <p>like I apples eating: <br><input type="text" name="q65" value=""></p>
        </div>

        <div id="question7">
          <h2>7. Write a paragraph about yourself.</h2>
          <p>These questions may help you:<br>
            Where are you from?<br>
            What do you like doing?<br>
            Why do you want to learn English?</p>
            <textarea name="q7text" rows="8" cols="80">Write your paragraph here.</textarea>
        </div>

        <div id="question8">
          <h2>8. You are too ill to go to College. Write a message to your teacher.</h2>
          <textarea name="q8text" rows="8" cols="80">Write your paragraph here.</textarea>
        </div>
        <input type="submit">
      </form>
      </div>
  </body>
</html>
