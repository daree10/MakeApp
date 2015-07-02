<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: prijava.php");
}
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->assign('title', "Početna");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/index.tpl");
$smarty->display("predlosci/_footer.tpl");
?>