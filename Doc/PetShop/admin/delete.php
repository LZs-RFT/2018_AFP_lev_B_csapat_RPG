<?php
// Megkeresem a kiválasztott kutyát:
$id = $_GET['subject'];
$query = "SELECT * FROM kutya WHERE id=" . $id;
$item = QL_row($query);

//Kutya törlése az adatbázisból
$query = "DELETE FROM kutya WHERE id = '" . $id . "'";
QL_modification($query);
//Főoldal betöltése
echo '<meta http-equiv="refresh" content="0; URL=fooldal.php">';
?>