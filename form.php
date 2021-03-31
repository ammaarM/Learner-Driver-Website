<?php
    if(!isset($_SESSION)) { // if session hasn't started yet, then start the session
        session_start();
    }
?>

<p>Enter your user details</p>
  <form method="post" action="register.php">
    <fieldset>
      <legend>Create an account</legend>

      <label for="username">Username:</label>
      <input type="text" name="username" id="username" /> <br />

      <label for="firstname">First name:</label>
      <input type="text" name="firstname" id="firstname" /> <br />

      <label for="lastname">Last name:</label>
      <input type="text" name="lastname" id="lastname" /> <br />

      <label for="phone">Mobile phone number:</label>
      <input type="number" name="phone" id="phone" /> <br />

      <label for="email">Email:</label>
      <input type="text" name="email" id="email" /> <br />

      <label for="psw">Password:</label>
      <input type="password" name="psw" id="psw" /> <br />

      <input type="submit" value="Submit" id="regBtn" /> <br />
    </fieldset>
  </form>
<form method="post" action="login.php">
    <fieldset>
      <legend>Log into the website</legend>

      <label for="username">Username:</label>
      <input type="text" name="login_username" id="login_username" /><br>

      <label for="psw">Password:</label>
      <input type="password" name="login_pwd" id="login_pwd" /><br>

      <input type="submit" value="Submit" id="logBtn" />
    </fieldset>
  </form>