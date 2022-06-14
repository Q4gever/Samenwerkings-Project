<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <title>Login-beheer</title>
  <link rel="stylesheet" type="text/css" href="company.css">
</head>
<?php
include "nav.html";

?>



<body>
<header>
        <h1>MyCandy</h1>
        <!-- hieronder wordt het menu opgehaald. -->
       
    </header>
  <main>

  <form method="post" action="inlogbeheer.php">
  <table class="loginTable">
     <tr>
      <th>BEHEER PANEL LOGIN</th>
     </tr>
     <tr>
      <td>
        <label class="firstLabel">Username:</label>
        <input type="text" name="userid" id="userid" value="" autocomplete="off" />
      </td>
     </tr>
     <tr>
      <td><label>Password:</label>
        <input type="password" name="password" id="password" value="" autocomplete="off" /></td>
     </tr>
     <tr>
      <td>
         <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" />
      </td>
     </tr>
  </table>
</form>

  </main>


</body>