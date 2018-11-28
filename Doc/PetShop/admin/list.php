<?php
	$query = "SELECT * FROM kutya";
	$kutyak = QL_array($query);
?>
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
		<td><img src="<?php echo $x['kep'] ; ?>" /></td>
		<td><?php echo $x['name'] ; ?></td>
		<td><?php echo $x['fajta'] ; ?></td>
		<td><?php echo $x['szorhossz'] ; ?></td>
		<td><?php echo $x['ugatas'] ; ?></td>
		<td><?php echo $x['meret'] ; ?></td>
		<td><a href="">Szerkesztés</a></td>
		<td><a href="">Törlés</a></td>
	</tr>
<?php } ?>
</table>