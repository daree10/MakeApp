
<?php

session_start();
if ($_SESSION["tip_korisnika_id"] != 3) {
    header("Location: index.php");
}
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
require_once 'class/baza.class.php';

$baza = new Baza();
if (isset($_GET["idType"])) {
    $idType = $_GET["idType"];
    if(isset($_POST["izmijeni"]))
    {
        $naziv = $_POST["naziv"];
        $opis = $_POST["opis"];
               
        $upit = "UPDATE tip_korisnika SET naziv = '$naziv',opis = '$opis' WHERE id = $idType;";
        $baza->updateDB($upit);
        header("Location: popis_tipova_kor.php");
    }
    
    $sql = "SELECT id,naziv,opis FROM tip_korisnika WHERE id = $idType;";

    $rezultat = $baza->selectDB($sql);

    $red = $rezultat->fetch_object();

    $smarty->assign('id', $red->id);
    $smarty->assign('naziv', $red->naziv);
    $smarty->assign('opis', $red->opis);

}


$smarty->assign('title', "Uredi tip korisnika");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/editUserType.tpl");
$smarty->display("predlosci/_footer.tpl");
?>

