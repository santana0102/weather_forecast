<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../css/register.css">
</head>

<body>
  <div class="container">
    <div class="center">
      <h1>Register</h1>
      <?php
      $erro = filter_input(INPUT_GET, "erro", FILTER_SANITIZE_SPECIAL_CHARS);
      switch ($erro) {
        case 1:
          echo '<div class="txt_field"><div class="alert alert-danger" role="alert">E-mail Não Encotrado</div></div>';
          break;
        case 2:
          echo '<div class="txt_field"><div class="alert alert-danger" role="alert">Senha Inválida</div><div>';
          break;
      }
      ?>
      <form method="post" action="../pages/useraddbd.php">
        <div class="txt_field">
          <input type="text" name="nome" id="nome" required>
          <span></span>
          <label>Name</label>
        </div>

        <div class="txt_field">
          <input type="email" name="email" id="email" required>
          <span></span>
          <label>E-mail</label>
        </div>

        <div class="txt_field">
          <input type="password" name="passwd" id="passwd" required>
          <span></span>
          <label>Password</label>
        </div>

        <input type="submit" value="Cadastrar">
        <div class="signup_link">
          Already have an account? <a href="../pages/login.php">Make login</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>