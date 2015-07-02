
<?php

session_start();
if ($_SESSION["tip_korisnika_id"] != 3) {
    header("Location: index.php");
}
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
require_once 'class/baza.class.php';

$baza = new Baza();
if (isset($_GET["idBrand"])) {
    $idBrand = $_GET["idBrand"];
    if(isset($_POST["izmijeni"]))
    {
        $naziv = $_POST["naziv"];
        $email = $_POST["email"];
        $web = $_POST["web"];
               
        $upit = "UPDATE brand SET naziv = '$naziv',email_kontakt = '$email', web_site = '$web' WHERE id = $idBrand;";
        $baza->updateDB($upit);
        header("Location: popis_branda.php");
    }
    
    $sql = "SELECT id,naziv,email_kontakt,web_site FROM brand WHERE id = $idBrand;";

    $rezultat = $baza->selectDB($sql);

    $red = $rezultat->fetch_object();

    $smarty->assign('id', $red->id);
    $smarty->assign('naziv', $red->naziv);
    $smarty->assign('email', $red->email_kontakt);
    $smarty->assign('web', $red->web_site);
}


$smarty->assign('title', "Uredi branda");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/editBrand.tpl");
$smarty->display("predlosci/_footer.tpl");
?>
