<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form action="/pages/loginbd.php" method="POST">
      <div class="txt_field">
        <input type="email" name="email" id="email" required>
        <span></span>
        <label>E-mail</label>
      </div>
      <div class="txt_field">
        <input type="password" name="senha" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass">Forgot the password?</div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Don't have an account? <a href="../pages/register.php">Subscribe</a>
      </div>
    </form>
  </div>

</body>

</html>