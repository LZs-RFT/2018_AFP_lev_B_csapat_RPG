<?php
if (array_key_exists('term', $_POST)){
    include_once 'searchitem.php';
}
if(array_key_exists('A', $_GET) && $_GET['A']==='itemCard'){
    include_once 'itemcard.php';
}
?>
