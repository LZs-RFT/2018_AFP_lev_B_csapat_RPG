<?php
require_once 'config.php';
function getConnection(){
try {
    $conn = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    //beállítjuk a PDO-t (PHP Data Object), hogya hibát talál a kapcsolódás során a kivételt a catch részben kezelje le
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    return $conn; //visszadjuk a kapcsolatot, hogy később enek a segítségével tudjuk  a querry-et kezelni
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
}
    }
    
function closeConnection($connection){
        $connection = null;
    }
    
function QL_array($query, $params = []){
        $connection = getConnection();//csatlakozunk az adatbázishoz
        $statement = $connection->prepare($query);//előkészítjuk az állítást, azaz olyan mintha begépelnénk az QL utasítást az adatbázis Queryjébe
        $statement->execute($params);//leütjük az adatbázisbeli entert
        $result = $statement->fetchAll();//a resultba lementjük a lekérdezésben kapoott összes adatot
        $statement->closeCursor();//kilépünk a lekérdezésből
        closeConnection($connection);//bezárjuk az adatbázis kapcsolatot
        return $result;
    }
    
function QL_row($query, $params = []){
        $connection = getConnection();
        $statement = $connection->prepare($query);
        $statement->execute($params);
        $result = $statement->fetch();
        $statement->closeCursor();
        closeConnection($connection);        
        return $result;
    }
	
function QL_modification($query, $params = []){
        $connection = getConnection();
        $statement = $connection->prepare($query);
        $statement->execute($params);
        $statement->closeCursor();
        closeConnection($connection);
    }