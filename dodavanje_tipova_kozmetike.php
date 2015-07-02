<?php

session_start();
if ($_SESSION["tip_korisnika_id"] != 3) {
    header("Location: index.php");
}
require_once 'class/baza.class.php';

$baza = new Baza();
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
if (isset($_POST["dodaj"])) {
    $naziv = $_POST["naziv"];
    $opis = $_POST["opis"];
    $sql = "INSERT INTO tip_proizvoda(id,naziv,opis) VALUES(default,'$naziv','$opis');";
    $baza->updateDB($sql);
    header("Location: popis_tipova_kozmetike.php");
}

$smarty->assign('title', "Dodavanje tipa");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/dodavanje_tipova_kozmetike.tpl");
$smarty->display("predlosci/_footer.tpl");
?>

