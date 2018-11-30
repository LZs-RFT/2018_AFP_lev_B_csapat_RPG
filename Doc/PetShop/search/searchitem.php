<?php
define("ADMIN_URL", "http://localhost/Kereses/search/index.php");


if(array_key_exists('term', filter_input_array(INPUT_POST)))
{
    $fajta = "";
    $szorhossz = "";
    $ugatas = "";
    $meret = "";
    
    //filter_input_array(INPUT_POST) instead of $_POST
    if (array_key_exists('fajta',filter_input_array(INPUT_POST)))
    {
        $fajta = "OR fajta LIKE '%".filter_input_array(INPUT_POST)['term']. "%'";
    }
    if (array_key_exists('szorhossz',filter_input_array(INPUT_POST)) && filter_input_array(INPUT_POST)['szorhossz'] !== "null")
    {
        $szorhossz = "OR szorhossz = '".filter_input_array(INPUT_POST)['szorhossz']. "'";
        echo(filter_input_array(INPUT_POST)['szorhossz']);
    }
    if (array_key_exists('ugatas',filter_input_array(INPUT_POST)) && filter_input_array(INPUT_POST)['ugatas'] !== "null")
    {
        $ugatas = "OR ugatas = '".filter_input_array(INPUT_POST)['ugatas']. "'";
        echo(filter_input_array(INPUT_POST)['ugatas']);
    }
    if (array_key_exists('meret',filter_input_array(INPUT_POST)) && filter_input_array(INPUT_POST)['meret'] !== "null")
    {
        $meret = "OR meret = '".filter_input_array(INPUT_POST)['meret']. "'";
        echo(filter_input_array(INPUT_POST)['meret']);
    }
   /* else
    {
        echo "VALAMI ELBASZÓDOTT";
    }*/
    
    $quer="SELECT * FROM kutya WHERE name LIKE '%".filter_input_array(INPUT_POST)['term']. "%'" .$fajta. " " .$szorhossz. " " .$ugatas. " " .$meret. " "; //TODO: módosítani a qurit a létező adatbázishoz
    $result = QL_array($quer);
    echo($quer);
}
// van egy nagy query, a fenti sor, így néz ki ha mindenhol keresünk, ha valamit "bepipálnak" akkor az bekerüla q-ba 


?>
<table border="1">
    <thead>
        <tr>
            <th>Kutya</th>
            <th>Fajta</th>
            <th>Szőrhossz</th>
            <th>Ugatása</th>
            <th>Méret</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row): ?>
        <tr>
            <td> <a href="<?=ADMIN_URL?>?A=itemCard&id=<?=$row['id']?>"><?=$row['name']?></a></td>
            <!-- az adnim url az a weboldal url-je, ami nyilvánosan megjelenik
            az url sávban, ehhez fűződik hozzá a get tömbe az 'A' változó, ami 
            jelzi, hogy a részletes megjelenítésért felelős php-ra navigáljon,
            és az id váltzó, aminek az értéke majd a keresett cucc id je lesz.
            Ez kell ahoz, hogy részleteket meglehessen jeleníteni
            pl.: define admin_url = http://localhost/Projekt/admin/index.php -->
            <td><?=$row['fajta']?></td>
            <td><?=$row['szorhossz']?></td>
            <td><?=$row['ugatas']?></td>
            <td><?=$row['meret']?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
