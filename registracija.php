<?php

session_start();
include 'class/baza.class.php';
$baza = new Baza();

require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

if (isset($_POST["registracija"])) {
    $korime = $_POST["email"];
    $lozinka = $_POST["lozinka"];
    $lozinka2 = $_POST["lozinka2"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];

    $greska = "";

    if (empty($korime) || empty($lozinka) || empty($ime) || empty($prezime)) {
        $greska .= "Email, lozinka, ime i prezime su obavezna polja!<br>";
    }

    $sql = "SELECT * FROM korisnik WHERE email = '$korime'";
    $rezultat = $baza->selectDB($sql);
    $red = $rezultat->fetch_object();
    if ($rezultat->num_rows != 0) {
        $greska .= "Email je zauzet!<br>";
    }
    if ($lozinka != $lozinka2) {
        $greska .= "Lozinke se ne podudaraju!<br>";
    }

    /*
     * 
     * neobavezni podaci
     * 
     */
    $podton = $_POST["podton"];
    $tip_koze = $_POST["tip_koze"];
    $ten = $_POST["ten"];
    $boja_ociju = $_POST["boja_ociju"];
    $velicina_ociju = $_POST["velicina_ociju"];
    $nijansa_usana = $_POST["nijansa_usana"];
    $nijansa_obrva = $_POST["nijansa_obrva"];
    $velicina_usana = $_POST["velicina_usana"];
    $duzina_trepavica = $_POST["duzina_trepavica"];
    $gustoca_trepavica = $_POST["gustoca_trepavica"];
    $uvijenost_trepavica = $_POST["uvijenost_trepavica"];
    $nijansa_trepavica = $_POST["nijansa_trepavica"];

    if (empty($greska)) {
        include_once 'class/korisnik.class.php';

        $korisnik = new Korisnik();
        $korisnik->setEmail($korime);
        $korisnik->setLozinka($lozinka);
        $korisnik->setIme($ime);
        $korisnik->setPrezime($prezime);

        $korisnik->setPodton($podton);
        $korisnik->setTipkoze($tip_koze);
        $korisnik->setTen($ten);
        $korisnik->setBojaociju($boja_ociju);
        $korisnik->setVelicinaociju($velicina_ociju);
        $korisnik->setNijansausana($nijansa_usana);
        $korisnik->setNijansaobrva($nijansa_obrva);
        $korisnik->setVelicinausana($velicina_usana);
        $korisnik->setDuzinatrepavica($duzina_trepavica);
        $korisnik->setGustocatrepavica($gustoca_trepavica);
        $korisnik->setUvijenosttrepavica($uvijenost_trepavica);
        $korisnik->setNijansatrepavica($nijansa_trepavica);

        $korisnik->setTipkorisnika(1);

        $korisnik->insert();

        if (isset($_SESSION["id"])) {
            header("Location: popis_korisnika.php");
        } else {
            header("Location: prijava.php");
        }
    }
}
if (!empty($greska)) {
    $smarty->assign('greska', $greska);
}
$smarty->assign('title', "Registracija");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/registracija.tpl");
$smarty->display("predlosci/_footer.tpl");
?>