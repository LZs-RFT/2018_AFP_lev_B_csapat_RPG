<?php 
 if(array_key_exists('id', $_GET)){
        $query = "SELECT * FROM kutya WHERE id = ".$_GET['id']; //ide maj a heys query kell
        $item = QL_row($query);
    }
    ?>
<table border="1">  <!-- amint meglesz az adatbázis, módósítani kell, hogy mindent kilistázzn az adott elemről -->
    <thead>
        <tr>
            <th>Név</th>
            <th>Fajta</th>
            <th>Szőrhossz</th>
            <th>Ugatása</th>
            <th>Méret</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><label><?=$item['name']?></td>
            <td><label><?=$item['fajta']?></td>
            <td><label><?=$item['szorhossz']?></td>
            <td><label><?=$item['ugatas']?></td>
            <td><label><?=$item['meret']?></td>
        </tr>
    </tbody>
</table>