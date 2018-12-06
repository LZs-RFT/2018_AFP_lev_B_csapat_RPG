<?php

ob_start();
session_start();

//PATHS
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

//defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "/templates/front/header.php");
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "/templates/front/");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "/templates/back/");
defined("SEARCH") ? null : define("SEARCH", __DIR__ . "../". DS . "/search/");


//defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", $_SERVER['DOCUMENT_ROOT'] . "/AFP_2018/Doc/PetShop/resources/templates/front/");

?>
