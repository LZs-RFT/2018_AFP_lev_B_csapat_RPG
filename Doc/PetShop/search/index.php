<?php
include_once '../core/database.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--TODO: CSS hozzáadása-->
    </head>
    <body>
        <div class="keres">
            <form action="http://eu.httpbin.org/post" method="post"> 
                <p>Keresés: <input type="text" name="term" /></p><br/>
                <p class="megjegyzes">Keresés a kijelölt tulajdonságok alapján (ha nincs kijelölve semmi, minden tulajdonág alapján keres)</p><br/>
                    <input type="checkbox" name="fajta" value="fajta"> Fajta <br>    
                    <p>Szőrhossz: <select name="szorhossz">
                        <option value="null"></option>
                        <option value="hosszu">Hosszú</option>
                        <option value="kozepes">Közepes</option>
                        <option value="rovid">Rövid</option>
                    </select><br>
                    <p>Méret: <select name="meret">
                        <option value="null"></option>
                        <option value="nagy">Nagy</option>
                        <option value="kozepes">Közepes</option>
                        <option value="kicsi">Kicsi</option>
                    </select><br>
                    <p>Ugatás hangereje: <select name="hangero">
                        <option value="null"></option>
                        <option value="hangos">Hangos</option>
                        <option value="halk">Halk</option>
                    </select><br>
                    <p>Játékosság: <select name="jatekossag">
                        <option value="null"></option>
                        <option value="virgonc">Virgonc</option>
                        <option value="nyugodt">Nyugodt</option>
                        <option value="lusta">Lusta</option>
                    </select><br>                
                <input type="submit" value="Submit" /> 
            </form> 
        </div>
        <div class="content">
            <?php include_once 'content.php'; ?>
        </div>
    </body>


</html>