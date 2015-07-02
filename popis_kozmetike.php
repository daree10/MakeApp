<?php
session_start();
if ($_SESSION["tip_korisnika_id"] != 3) {
    header("Location: index.php");
}
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->assign('title', "Popis kozmetike");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/popis_kozmetike.tpl");
$smarty->display("predlosci/_footer.tpl");
?>

