<?php
session_start();
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';
require_once 'class/baza.class.php';

$baza = new Baza();
if(isset($_GET["update"]))
{
    $baza->updateDB("UPDATE kozmeticki_proizvod SET brand_id = ".$_GET["brand"].",naziv='".$_GET["naziv"]."',cijena=".$_GET["cijena"].",kolicina=".$_GET["kol"].",trajnost=".$_GET["trajnost"]." WHERE id = ".$_GET["idproizvod"].";");
    switch($_GET["idtip"])
    {
        case 1:
            $baza->updateDB("UPDATE kozmetika_obrve SET nijansa_obrva = '".$_GET["nijansa_obrva"]."',nijansa='".$_GET["nijansa_kozmetike"]."' WHERE kozmeticki_proizvod_id = ".$_GET["idproizvod"].";");
            break;
        case 2:
            $baza->updateDB("UPDATE kozmetika_trepavice SET nijansa_trepavica = '".$_GET["nijansa_trepavica"]."',duzina_trepavica='".$_GET["duzina_trepavica"]."',gustoca_trepavica='".$_GET["gustoca_trepavica"]."',uvijenost_trepavica='".$_GET["uvijenost_trepavica"]."',trusenje='".$_GET["trusenje"]."' WHERE kozmeticki_proizvod_id = ".$_GET["idproizvod"].";");
            break;
        case 3:
            $baza->updateDB("UPDATE kozmetika_lice SET podton='".$_GET["podton"]."',tip_koze='".$_GET["tip_koze"]."',ten='".$_GET["ten"]."',nijansa='".$_GET["nijansa_kozmetike"]."' WHERE kozmeticki_proizvod_id = ".$_GET["idproizvod"].";");
            break;
        case 4:
            $baza->updateDB("UPDATE kozmetika_oci SET boja_ociju='".$_GET["boja_ociju"]."',velicina_ociju='".$_GET["velicina_ociju"]."',nijansa='".$_GET["nijansa_kozmetike"]."' WHERE kozmeticki_proizvod_id = ".$_GET["idproizvod"].";");
            break;
        case 5:
            $baza->updateDB("UPDATE kozmetika_usne SET velicina_usana='".$_GET["velicina_usana"]."',nijansa='".$_GET["nijansa_usana"]."' WHERE kozmeticki_proizvod_id = ".$_GET["idproizvod"].";");
            break;
    }
}
$smarty = new Smarty();
$smarty->assign('title', "Detalji proizvoda");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/productDetail.tpl");
$smarty->display("predlosci/_footer.tpl");
?>

