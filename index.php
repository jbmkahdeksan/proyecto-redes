<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="app">
    <p>You are viewing this on <?php echo gethostname()?></p>
    <div class="login-form">
      <h1>Active Directory Authentication</h1>
      <div class="form">
        <form action="auth.php" method="post">
          <div class="input-container">
            <label>Complete Name</label>
            <input type="text" name="username" required />
          </div>
          <div class="input-container">
            <label>Password</label>
            <input type="password" name="password" required />
          </div>
          <div class="button-container">
            <input type="submit" />
          </div>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <p>Proyecto de Redes - I Ciclo 2022</p>
		<p>Authors: Joaquin Barrientos, Raquel Sanchez and Esteban Salas</p>
	</footer>
</body>

</html>