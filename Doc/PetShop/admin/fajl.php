<?php
error_reporting(0);
$name = $fajta = $szorhossz = $ugatas = $meret = $kep = "";
if(array_key_exists('feltolt', $_POST)) {
	$safe_filename = preg_replace(array("/\s+/", "/[^-\.\w]+/"),array("_", ""),trim($_FILES['fajl']['name']));
	$safe_filename = rand().$safe_filename;
	move_uploaded_file ($_FILES['fajl']['tmp_name'], "feltoltottfajlok/".$safe_filename);
	$path = "feltoltottfajlok/".$safe_filename;
	if(!empty($path)) {
		$file = fopen($path, "r") or die ("A fájlt nem lehet megnyitni!");
		$row = fgets($file); // Fejléc
		while(!feof($file)) {
			$row = fgets($file);
			$parts = explode(";", $row);
			
			$name = $parts[0];
			$fajta = $parts[1];
			$szorhossz = $parts[2];
			$ugatas = $parts[3];
			$meret = $parts[4];
			$kep = $parts[5];

		//Kutya feltöltése az adatbázisba
		if(!empty($name) && !empty($fajta)) {
			$query = "INSERT INTO kutya(name, fajta, szorhossz, ugatas, meret, kep) VALUES ('" 
			. $name 
			. "', '" . $fajta 
			. "', '" . $szorhossz 
			. "', '" . $ugatas
			. "', '" . $meret
			. "', '" . $kep . "')";
			QL_modification($query);
		//Főoldal betöltése
		echo '<meta http-equiv="refresh" content="0; URL=fooldal.php">';
		}
		}
		fclose($file);
	}
}
?>
<h2>Adatok feltöltése fájlból</h2>
<p>A fájl CSV formátumban legyen.</p>
<form action="" method="POST" enctype="multipart/form-data">
	<label>CSV fájl: </label><input type="file" name="fajl" />
	<input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
	<input type="submit" name="feltolt" value="Feltöltés" />
</form>
<p><a href="fooldal.php?d=0">Vissza a főoldalra!</a></p>