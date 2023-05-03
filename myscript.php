<?php

//var_dump($_GET);

echo $_GET['name'];

echo $_POST['par'];

echo strlen($_GET['name']);


echo str_replace($_GET['name'],"***", "ho scritto un paragrafo corto");
?>