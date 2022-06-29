<?php

$ldap_dn = "cn=" . $_POST["username"] . ",cn=Users,dc=redes,dc=com";
$ldap_password = $_POST["password"];

$ldap_con = ldap_connect("redes10.australiacentral.cloudapp.azure.com")  or die("Could't connect the AD server");;
ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

$ldap_status = (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)) ? '<h2 style="color: green;">Authenticated</h2>' : '<h2 style="color: red;">Invalid credentials</h2>';
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="app">
		<p>You are viewing this on <?php echo gethostname() ?></p>
		<div class="login-form" style="text-align: center;">
			<h1>Active Directory Authentication</h1>
			<?php echo $ldap_status ?>
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