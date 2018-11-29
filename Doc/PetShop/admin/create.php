<?php
$name = $fajta = $szorhossz = $ugatas = $meret = $safe_filename ="";
$nameerr = $fajtaerr = "";

if(array_key_exists('insert', $_POST)) {
	//Kép elérési útjának mentése, és kép mappába töltése
	$safe_filename = preg_replace(array("/\s+/", "/[^-\.\w]+/"),array("_", ""),trim($_FILES['kep']['name']));
	$safe_filename = rand().$safe_filename;
	move_uploaded_file ($_FILES['kep']['tmp_name'], "../public/images/".$safe_filename);

	if(empty($_POST['name'])) {
		$nameerr = "Adjon nevet a kutyának!";
	} else {
		$name = test_input($_POST['name']);
	}
	if(empty($_POST['fajta'])) {
		$fajtaerr = "Adja meg a kutya fajtáját!";
	} else {
		$fajta = test_input($_POST['fajta']);
	}
	$szorhossz = test_input($_POST['szorhossz']);
	$ugatas = test_input($_POST['ugatas']);
	$meret = test_input($_POST['meret']);
			
	if(!empty($safe_filename) && !empty($name) && !empty($fajta)) {
		//Kutya feltöltése az adatbázisba
		$query = "INSERT INTO kutya(name, fajta, szorhossz, ugatas, meret, kep) VALUES ('" 
		. $name 
		. "', '" . $fajta 
		. "', '" . $szorhossz 
		. "', '" . $ugatas
		. "', '" . $meret
		. "', '../public/images/" . $safe_filename . "')";
		QL_modification($query);
		//Főoldal betöltése
		echo '<meta http-equiv="refresh" content="0; URL=fooldal.php">';
	}
}

function test_input($data) {
	// Szóközök, speciális karakterek eltávolítása
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div id="insert">
	<h2>Új kutya feltöltése</h2>
	<p class="error">* Kötelezően kitöltendő mezők</p>
	<form action="" method="POST" enctype="multipart/form-data">
		<label>Név: </label>
		<input type="text" name="name" /><span class="error"> * <?php echo $nameerr; ?></span><br />
		<label>Fajta: </label>
		<input type="text" name="fajta" /><span class="error"> * <?php echo $fajtaerr; ?></span><br />
		<label>Szőrhossz: </label>
		<select name="szorhossz">
            <option value="null"></option>
            <option value="hosszu">Hosszú</option>
            <option value="kozepes">Közepes</option>
            <option value="rovid">Rövid</option>
        </select><br />                   
        <label>Ugatás hangereje: </label>
		<select name="ugatas">
            <option value="null"></option>
            <option value="hangos">Hangos</option>
            <option value="halk">Halk</option>
        </select><br />
        <label>Méret: </label>
		<select name="meret">
            <option value="null"></option>
            <option value="nagy">Nagy</option>
            <option value="kozepes">Közepes</option>
            <option value="kicsi">Kicsi</option>
        </select><br />
		<label>Kép: </label><input type="file" name="kep" /><br />
		<input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
		<input type="submit" name="insert" value="Hozzáad" />
	</form>
	<p><a href="fooldal.php?d=0">Vissza a főoldalra!</a></p>
</div>