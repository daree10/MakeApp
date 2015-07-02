<?php
session_start();
include 'class/baza.class.php';
$baza = new Baza();

require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
if (isset($_POST["prijava"])) {
    $korime = $_POST["email"];
    $sql = "SELECT id,email,lozinka,tip_korisnika_id,ime,prezime FROM korisnik WHERE email = '$korime';";
    $greska = "";
    $rezultat = $baza->selectDB($sql);
    $red = $rezultat->fetch_object();
    if ($rezultat->num_rows == 0) {
        $greska .= "Provjerite unesene podatke";
    } else {
        if ($red->lozinka != $_POST["lozinka"]) {
            $greska .= "Provjerite lozinku";
        }
    }

    if (empty($greska)) {
        $_SESSION["ime"] = $red->ime;
        $_SESSION["prezime"] = $red->prezime;
        $_SESSION["email"] = $red->email;
        $_SESSION["id"] = $red->id;
        $_SESSION["tip_korisnika_id"] = $red->tip_korisnika_id;
        header("Location: index.php");
    }
}
if(!empty($greska))
{
    $smarty->assign('greska',$greska);
}
$smarty->assign('title', "Prijava");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/prijava.tpl");
$smarty->display("predlosci/_footer.tpl");

?>