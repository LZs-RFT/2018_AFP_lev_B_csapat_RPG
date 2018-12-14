<?php
	$query = "SELECT * FROM kutya";
	$kutyak = QL_array($query);
?>
<p class="menu"><a href="fooldal.php?d=1">Új kutya</a></p>
<p class="menu"><a href="fooldal.php?d=4">Feltöltés fájlból</a></p>
<table>
	<!-- Fejléc -->
	<tr>
		<th>Kép</th>
		<th>Név</th>
		<th>Fajta</th>
		<th>Szőrhossz</th>
		<th>Ugatás</th>
		<th>Méret</th>
		<th></th>
		<th></th>
	</tr>
	<!-- Adatok kilistázása az adatbázisból -->
<?php foreach($kutyak as $x) { ?>
	<tr>
		<td><img src="<?php echo $x['kep'] ; ?>" width="200" /></td>
		<td><?php echo $x['name'] ; ?></td>
		<td><?php echo $x['fajta'] ; ?></td>
		<td><?php echo $x['szorhossz'] ; ?></td>
		<td><?php echo $x['ugatas'] ; ?></td>
		<td><?php echo $x['meret'] ; ?></td>
		<!-- A módosításhoz és a törléshez a linken keresztül átadom az id-t.-->
		<td><a href="fooldal.php?d=2&subject=<?php echo $x['id']; ?>">Szerkesztés</a></td>
		<td><a href="fooldal.php?d=3&subject=<?php echo $x['id']; ?>">Törlés</a></td>
	</tr>
<?php } ?>
</table>