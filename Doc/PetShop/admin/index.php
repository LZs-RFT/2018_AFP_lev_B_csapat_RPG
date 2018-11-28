<?php
if (array_key_exists('login', $_POST)) {
	if($_POST['username'] == "admin" && $_POST['password'] == "jelszó") {
		echo '<meta http-equiv="refresh" content="0; URL=fooldal.php">';
	} else {
		echo "Érvénytelen felhasználónév vagy jelszó!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="hu" />
	<link rel="stylesheet" type="text/css" href="public/adminStyle.css" />
	<title>Admin</title>
</head>
<body>
	<div id ="belepes">
		<h1>Admin belépés</h1>
		<form action="" method="POST">
			<label>Felhasználónév: </label><input type="text" name="username" /><br />
			<label>Jelszó: </label><input type="password" name="password" /><br />
			<input type="submit" name="login" value="Belépés" />
		</form>
	</div>
</body>
</html>