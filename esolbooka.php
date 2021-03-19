<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESOL Initial Assessment - Book A</title>
    <link rel="stylesheet" href="assessmentform.css">
  </head>
  <body>
    <header>
      <h1>ESOL Initial Assessment - Book A</h1>
    </header>

    <div id="mainContainer">
      <form  method="POST" action="<?php echo htmlspecialchars("esolbookaanswers.php");?>">
        <div class="personalDetails">
          <h2>Personal Details</h2>
          <input type="text" name="username" value="Your Name"><br>
          <input type="text" name="phoneno" value="Telephone Number"><br>
          <input type="date" name="todaydate" value="Date"><br>
        </div>

        <div id="question1">
          <h2>Task 1</h2>
          <p>Each of the following represents text or icons that you might see on a sign. Using the buttons below, select the option that has the same meaning as the sign.</p>
          <div class="example"> <p> Example - Ladies</p>
            <input type="radio" id="" name="task1q1" value="This Way Out" disabled>
            <label for="This Way Out">This Way Out</label>
            <input type="radio" id="" name="task1q1" value="Information" disabled>
            <label for="Information">Information</label>
            <input type="radio" id="" name="task1q1" value="Emergency Exit" disabled>
            <label for="Emergency Exit">Emergency Exit</label>
            <input type="radio" id="" name="task1q1" value="Push Bar" disabled>
            <label for="Push Bar">Push Bar to Open</label>
            <input type="radio" id="" name="task1q1" value="Women" checked>
            <label for="Women">Women</label>
            <input type="radio" id="" name="task1q1" value="Way In" disabled>
            <label for="Way In">Way In</label>
          </div>
          <div class="radioQuestion">
            <p>Exit</p>
            <input type="radio" id="" name="task1q2" value="This Way Out">
            <label for="This Way Out">This Way Out</label>
            <input type="radio" id="" name="task1q2" value="Information">
            <label for="Information">Information</label>
            <input type="radio" id="" name="task1q2" value="Emergency Exit">
            <label for="Emergency Exit">Emergency Exit</label>
            <input type="radio" id="" name="task1q2" value="Push Bar">
            <label for="Push Bar">Push Bar to Open</label>
            <input type="radio" id="" name="task1q2" value="Women">
            <label for="Women">Women</label>
            <input type="radio" id="" name="task1q2" value="Way In">
            <label for="Way In">Way In</label>
          </div>
          <div class="radioQuestion">
            <p>Fire Exit</p>
            <input type="radio" id="" name="task1q3" value="This Way Out">
            <label for="This Way Out">This Way Out</label>
            <input type="radio" id="" name="task1q3" value="Information">
            <label for="Information">Information</label>
            <input type="radio" id="" name="task1q3" value="Emergency Exit">
            <label for="Emergency Exit">Emergency Exit</label>
            <input type="radio" id="" name="task1q3" value="Push Bar">
            <label for="Push Bar">Push Bar to Open</label>
            <input type="radio" id="" name="task1q3" value="Women">
            <label for="Women">Women</label>
            <input type="radio" id="" name="task1q3" value="Way In">
            <label for="Way In">Way In</label>
          </div>
          <div class="radioQuestion">
            <p>&#9432;</p>
            <input type="radio" id="" name="task1q4" value="This Way Out">
            <label for="This Way Out">This Way Out</label>
            <input type="radio" id="" name="task1q4" value="Information">
            <label for="Information">Information</label>
            <input type="radio" id="" name="task1q4" value="Emergency Exit">
            <label for="Emergency Exit">Emergency Exit</label>
            <input type="radio" id="" name="task1q4" value="Push Bar">
            <label for="Push Bar">Push Bar to Open</label>
            <input type="radio" id="" name="task1q4" value="Women">
            <label for="Women">Women</label>
            <input type="radio" id="" name="task1q4" value="Way In">
            <label for="Way In">Way In</label>
          </div>
          <div class="radioQuestion">
            <p>Entrance</p>
            <input type="radio" id="" name="task1q5" value="This Way Out">
            <label for="This Way Out">This Way Out</label>
            <input type="radio" id="" name="task1q5" value="Information">
            <label for="Information">Information</label>
            <input type="radio" id="" name="task1q5" value="Emergency Exit">
            <label for="Emergency Exit">Emergency Exit</label>
            <input type="radio" id="" name="task1q5" value="Push Bar">
            <label for="Push Bar">Push Bar to Open</label>
            <input type="radio" id="" name="task1q5" value="Women">
            <label for="Women">Women</label>
            <input type="radio" id="" name="task1q5" value="Way In">
            <label for="Way In">Way In</label>
          </div>
          <div class="radioQuestion">
            <p>Push</p>
            <input type="radio" id="" name="task1q6" value="This Way Out">
            <label for="This Way Out">This Way Out</label>
            <input type="radio" id="" name="task1q6" value="Information">
            <label for="Information">Information</label>
            <input type="radio" id="" name="task1q6" value="Emergency Exit">
            <label for="Emergency Exit">Emergency Exit</label>
            <input type="radio" id="" name="task1q6" value="Push Bar">
            <label for="Push Bar">Push Bar to Open</label>
            <input type="radio" id="" name="task1q6" value="Women">
            <label for="Women">Women</label>
            <input type="radio" id="" name="task1q6">
            <label for="Way In">Way In</label>
            </div>
        </div>

        <div id="question2">
          <h2>Task 2. The Alphabet</h2>
          <h3>Write the correct letters in the empty boxes</h3>
          <input type="text" class="letterInput" name="" value="A" disabled>
          <input type="text" class="letterInput" name="q2b" value="">
          <input type="text" class="letterInput" name="q2c" value="">
          <input type="text" class="letterInput" name="" value="D" disabled>
          <input type="text" class="letterInput" name="" value="E" disabled>
          <input type="text" class="letterInput" name="q2f" value="">
          <input type="text" class="letterInput" name="q2g" value="">
          <input type="text" class="letterInput" name="" value="H" disabled>
          <input type="text" class="letterInput" name="q2i" value="">
          <input type="text" class="letterInput" name="" value="J" disabled>
          <input type="text" class="letterInput" name="" value="K" disabled>
          <input type="text" class="letterInput" name="q2l" value="">
          <input type="text" class="letterInput" name="q2m" value="">
          <input type="text" class="letterInput" name="" value="N" disabled>
          <input type="text" class="letterInput" name="q2o" value="">
          <input type="text" class="letterInput" name="" value="P" disabled>
          <input type="text" class="letterInput" name="q2q" value="">
          <input type="text" class="letterInput" name="" value="R" disabled>
          <input type="text" class="letterInput" name="" value="S" disabled>
          <input type="text" class="letterInput" name="q2t" value="">
          <input type="text" class="letterInput" name="q2u" value="">
          <input type="text" class="letterInput" name="" value="V" disabled>
          <input type="text" class="letterInput" name="q2w" value="">
          <input type="text" class="letterInput" name="q2x" value="">
          <input type="text" class="letterInput" name="" value="Y" disabled>
          <input type="text" class="letterInput" name="q2z" value=""><br>
          </div>

          <div id="question2">
            <h2>Task 3</h2>
            <p class="example">I work with a man called Salah. Salah is from Somalia. He is tall. He has black hair. He has black skin. He has brown eyes. He works hard.</p>
            <p>Say whether the statement below is true or false by clicking the appropriate button.</p>
            <p>1. Salah is from Somlaia.</p>
            <input type="radio" id="" name="task3q1" value="true">
            <label for="true">True</label><br>
            <input type="radio" id="" name="task3q1" value="false">
            <label for="false">False</label><br>
            <p>2. Salah is short.</p>
            <input type="radio" id="" name="task3q2" value="true">
            <label for="true">True</label><br>
            <input type="radio" id="" name="task3q2" value="false">
            <label for="false">False</label><br>
            <p>3. Salah has blue eyes.</p>
            <input type="radio" id="" name="task3q3" value="true">
            <label for="true">True</label><br>
            <input type="radio" id="" name="task3q3" value="false">
            <label for="false">False</label><br>
            <p>4. Salah works hard.</p>
            <input type="radio" id="" name="task3q4" value="true">
            <label for="true">True</label><br>
            <input type="radio" id="" name="task3q4" value="false">
            <label for="false">False</label><br>
            <p>5. Salah has black hair.</p>
            <input type="radio" id="" name="task3q5" value="true">
            <label for="true">True</label><br>
            <input type="radio" id="" name="task3q5" value="false">
            <label for="false">False</label><br>
          </div>


          <div id="question4">
            <h2>Task 4</h2>
            <h3>Personal Information Form</h3>
            <p>Please fill in the form below.</p>
            <p>First name: <br><input type="text" name="q4name" value=""></p>
            <p>Surname: <br><input type="text" name="q4surname" value=""></p>
            <p>Title:</p>
            <input type="radio" name="q4title" value="Miss">
            <label for="Miss">Miss</label>
            <input type="radio" name="q4title" value="Ms">
            <label for="Ms">Ms</label>
            <input type="radio" name="q4title" value="Mrs">
            <label for="Mrs">Mrs</label>
            <input type="radio" name="q4title" value="Mr">
            <label for="Mr">Mr</label>
            <input type="radio" name="q4title" value="Dr">
            <label for="Dr">Dr</label>
            <input type="radio" name="q4title" value="Other">
            <label for="Other">Other</label>
            <p>Date of Birth: <br><input type="text" name="q4dob" value=""></p>
            <p>Address: <br><input type="text" name="q4address" value=""></p>
            <p>Postcode: <br><input type="text" name="q4postcode" value=""></p>
            <p>City: <br><input type="text" name="q4city" value=""></p>
            <p>County: <br><input type="text" name="q4county" value=""></p>
          </div>


          <div id="question5">
            <h2>Task 5</h2>
            <div class="example">
              <h3>Memorandum</h3>
              <p>To: New Students</p>
              <p>From: ESOL Tutors</p>
              <h3>Rights and Responsibilities</h3>
              <p>Please phone and let us know if you are sick and unable to come to college.</p>
              <p>Learn for Life 0114 2559080</p>
              <p>Fir Vale Centre 0114 2603584</p>
              <p>Walkley Centre 0114 2603563</p>
              <p>If you are a shift worker let us know about your shift pattern so we know to save
              your place in the class.</p>
              <p>Let your tutor know about your holidays before you go away so we know to save your
              place in class. If you do not tell us about your reasons for missing classes you may be
              withdrawn from the course. If you don’t want to attend classes any more, please let us
              know – tell your tutor or phone in.</p>
            </div>
            <div>
              <h3>Answer these questions</h3>
              <p>1. What must you do if you are sick?</p>
              <input type="radio" id="" name="task51" value="Tell a friend">
              <label for="Tell a friend">Tell a friend</label>
              <input type="radio" id="" name="task51" value="Phone the college">
              <label for="Phone the college">Phone the college</label>
              <input type="radio" id="" name="task51" value="Get a job">
              <label for="Get a job">Get a job</label><br>
              <p>2. What may happen if you don’t tell the College why you are missing classes?</p><br>
              <input type="text" name="q52" value="">
              <p>3. If you are a student at Fir Vale Centre which number should you ring if you
    can't come to class?</p><br>
            <input type="text" name="q53" value="">
            </div>
          </div>

          <div id="question6">
            <h2>Task 6</h2>
            <h3>Write about what you like doing in your free time.</h3>
            <textarea rows="8" cols="80" name="q6text">Write your paragraph here.</textarea>
          </div>

          <div id="question7">
            <h2>Task 7</h2>
            <h3>Write about what you did last weekend.</h3>
            <textarea rows="8" cols="80" name="q7text">Write your paragraph here.</textarea>
          </div>

          <div id="question8">
            <h2>Task 8</h2>
            <h3>Write about what you might do when you finish your English course.</h3>
            <textarea rows="8" cols="80" name="q8text">Write your paragraph here.</textarea>
          </div>
          <input type="submit">
      </form>
      </div>
  </body>
</html>
