<?php
	//include_once '../core/database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="hu" />
	<link rel="stylesheet" type="text/css" href="public/adminStyle.css" />
	<title>Petshop admin</title>
</head>
<body>
	<div id="container">
		<h1>Petshop admin</h1>
		<div id="menu"><a href="fooldal.php?d=1">Új kutya</a></div>
		<div id="content">
		<?php
		//Az url-ből kiolvasom, hogy melyik menüpontra kattintott a felhasználó:
		if( ! array_key_exists('d', $_GET)) {
			$menunum = 0;
		} else {
			$menunum = $_GET['d'];
		}
		echo $menunum;
		switch($menunum) {
			case 0: include_once 'list.php';
					break;
			case 1: include_once 'create.php';
					break;
			case 2: include_once 'update.php';
					break;
			case 3: include_once 'delete.php';
					break;
			default: include_once 'list.php';
					break;
		}
		?>
	</div>
	</div>
</body>
</html>