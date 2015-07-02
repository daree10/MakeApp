<?php
session_start();
if (!($_SESSION["tip_korisnika_id"] == 3 || $_SESSION["tip_korisnika_id"] == 2)) {
    header("Location: index.php");
}
include 'class/brand.class.php';
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
if(isset($_POST["dodaj"]))
{
    $brand = new Brand();
    $brand->setNaziv($_POST["naziv"]);
    $brand->setEmail_kontakt($_POST["email"]);
    $brand->setWeb_site($_POST["web"]);
    $brand->insert();
}
$smarty->assign('title', "Dodavanje branda");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/dodavanje_branda.tpl");
$smarty->display("predlosci/_footer.tpl");
?>
