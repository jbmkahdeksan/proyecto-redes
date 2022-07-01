<?php
	function auth() {
		$host = "redes10.australiacentral.cloudapp.azure.com";
		$ldap_dn = "cn=" . $_POST["username"] . ",cn=Users,dc=redes,dc=com";
		$ldap_password = $_POST["password"];

		$ldap_con = ldap_connect($host, 389) or die("<p>Couldn't connect to the AD Server</p>");
		@ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
		return (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) ?
				'<h3 style="color: green;">Authenticated</h3>' :
				'<h3 style="color: red;">Invalid credentials</h3>';
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>PROYECTO-REDES</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body>
	<div class="app">
		<p>You are viewing this on <?php echo gethostname() ?></p>
		<div class="login-form" style="text-align: center;">
			<h1>Active Directory Authentication</h1>
			<?php echo auth(); ?>
			<div class="button-container">
				<a href="index.php">Return to homepage</a>
			</div>
		</div>
	</div>
	</div>
	<footer>
		<p>Proyecto de Redes - I Ciclo 2022</p>
		<p>Authors: Joaquin Barrientos, Raquel Sanchez and Esteban Salas</p>
	</footer>
</body>

</html>