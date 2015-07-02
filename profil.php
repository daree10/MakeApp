<?php

session_start();
include 'class/baza.class.php';

$baza = new Baza();
$greska = "";
$uspjeh = "";
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
if (isset($_GET["idKor"])) {
    if ($_SESSION["tip_korisnika_id"] == 1 && $_GET["idKor"] != $_SESSION["id"]) {
        header("Location: profil.php?idKor=" . $_SESSION["id"]);
    }

    if (isset($_POST["change"])) {
        if ($_POST["change"] == "Učini zaposlenikom") {
            $sql33 = "UPDATE korisnik SET tip_korisnika_id = 2 WHERE id = " . $_GET["idKor"] . ";";
        } else {
            $sql33 = "UPDATE korisnik SET tip_korisnika_id = 1 WHERE id = " . $_GET["idKor"] . ";";
        }
        $baza->updateDB($sql33);
    }

    $sql = "SELECT id,email,lozinka,ime,prezime,podton,tip_koze,ten,boja_ociju,velicina_ociju,nijansa_usana,nijansa_obrva,velicina_usana,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,nijansa_trepavica,tip_korisnika_id FROM korisnik WHERE id = " . $_GET["idKor"] . ";";
    $rezultat = $baza->selectDB($sql);
    $red = $rezultat->fetch_object();

    $korime = $red->email;
    $lozinka = $red->lozinka;
    $ime = $red->ime;
    $prezime = $red->prezime;
    $podton = $red->podton;
    $tip_koze = $red->tip_koze;
    $ten = $red->ten;
    $boja_ociju = $red->boja_ociju;
    $velicina_ociju = $red->velicina_ociju;
    $nijansa_usana = $red->nijansa_usana;
    $nijansa_obrva = $red->nijansa_obrva;
    $velicina_usana = $red->velicina_usana;
    $duzina_trepavica = $red->duzina_trepavica;
    $gustoca_trepavica = $red->gustoca_trepavica;
    $uvijenost_trepavica = $red->uvijenost_trepavica;
    $nijansa_trepavica = $red->nijansa_trepavica;
    $tip_korisnika = $red->tip_korisnika_id;

    $smarty->assign('korime', $korime);
    $smarty->assign('lozinka', $lozinka);
    $smarty->assign('ime', $ime);
    $smarty->assign('prezime', $prezime);
    $smarty->assign('podton', $podton);
    $smarty->assign('tip_koze', $tip_koze);
    $smarty->assign('ten', $ten);
    $smarty->assign('boja_ociju', $boja_ociju);
    $smarty->assign('velicina_ociju', $velicina_ociju);
    $smarty->assign('nijansa_usana', $nijansa_usana);
    $smarty->assign('nijansa_obrva', $nijansa_obrva);
    $smarty->assign('velicina_usana', $velicina_usana);
    $smarty->assign('duzina_trepavica', $duzina_trepavica);
    $smarty->assign('gustoca_trepavica', $gustoca_trepavica);
    $smarty->assign('uvijenost_trepavica', $uvijenost_trepavica);
    $smarty->assign('nijansa_trepavica', $nijansa_trepavica);
    $smarty->assign('tip_korisnika', $tip_korisnika);


    if (isset($_POST["izmjeni"])) {
        $novo_korime = $_POST["email"];
        $novo_lozinka = $_POST["lozinka"];
        $novo_lozinka2 = $_POST["lozinka2"];
        $novo_ime = $_POST["ime"];
        $novo_prezime = $_POST["prezime"];
        $novo_podton = $_POST["podton"];
        $novo_tip_koze = $_POST["tip_koze"];
        $novo_ten = $_POST["ten"];
        $novo_boja_ociju = $_POST["boja_ociju"];
        $novo_velicina_ociju = $_POST["velicina_ociju"];
        $novo_nijansa_usana = $_POST["nijansa_usana"];
        $novo_nijansa_obrva = $_POST["nijansa_obrva"];
        $novo_velicina_usana = $_POST["velicina_usana"];
        $novo_duzina_trepavica = $_POST["duzina_trepavica"];
        $novo_gustoca_trepavica = $_POST["gustoca_trepavica"];
        $novo_uvijenost_trepavica = $_POST["uvijenost_trepavica"];
        $novo_nijansa_trepavica = $_POST["nijansa_trepavica"];

        if ($red->email != $novo_korime) {
            $sql = "SELECT * FROM korisnik WHERE email = '$korime' AND id <> " . $_GET["idKor"] . ";";
            $rezultat = $baza->selectDB($sql);
            if ($rezultat->num_rows != 0) {
                $greska .= "Email je zauzet!<br>";
            } else {
                $upit = "UPDATE korisnik SET email = '$novo_korime' WHERE id = " . $_GET["idKor"] . ";";
                $baza->updateDB($upit);
                $smarty->assign('korime', $novo_korime);
                $uspjeh .= "Email ažuriran!<br>";
            }
        }
        if ($red->lozinka != $novo_lozinka && !empty($novo_lozinka)) {
            if ($novo_lozinka != $novo_lozinka2) {
                $greska .= "Lozinke se ne podudaraju!<br>";
            } else {
                $upit = "UPDATE korisnik SET lozinka = '$novo_lozinka' WHERE id = " . $_GET["idKor"] . ";";
                $baza->updateDB($upit);
                $uspjeh .= "Lozinka ažurirana!<br>";
            }
        }
        if ($red->ime != $novo_ime) {
            $upit = "UPDATE korisnik SET ime = '$novo_ime' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('ime', $novo_ime);
            $uspjeh .= "Ime ažurirano!<br>";
        }
        if ($red->prezime != $novo_prezime) {
            $upit = "UPDATE korisnik SET prezime = '$novo_prezime' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('prezime', $novo_prezime);
            $uspjeh .= "Prezime ažurirano!<br>";
        }
        if ($red->podton != $novo_podton) {
            $upit = "UPDATE korisnik SET podton = '$novo_podton' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('podton', $novo_podton);
            $uspjeh .= "Podton ažuriran!<br>";
        }
        if ($red->tip_koze != $novo_tip_koze) {
            $upit = "UPDATE korisnik SET tip_koze = '$novo_tip_koze' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('tip_koze', $novo_tip_koze);
            $uspjeh .= "Tip kože ažuriran!<br>";
        }
        if ($red->ten != $novo_ten) {
            $upit = "UPDATE korisnik SET ten = '$novo_ten' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('ten', $novo_ten);
            $uspjeh .= "Ten ažuriran!<br>";
        }
        if ($red->boja_ociju != $novo_boja_ociju) {
            $upit = "UPDATE korisnik SET boja_ociju = '$novo_boja_ociju' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('boja_ociju', $novo_boja_ociju);
            $uspjeh .= "Boja očiju ažurirana!<br>";
        }
        if ($red->velicina_ociju != $novo_velicina_ociju) {
            $upit = "UPDATE korisnik SET velicina_ociju = '$novo_velicina_ociju' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('velicina_ociju', $novo_velicina_ociju);
            $uspjeh .= "Veličina očiju ažurirana!<br>";
        }

        if ($red->nijansa_usana != $novo_nijansa_usana) {
            $upit = "UPDATE korisnik SET nijansa_usana = '$novo_nijansa_usana' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('nijansa_usana', $novo_nijansa_usana);
            $uspjeh .= "Nijansa usana ažurirana!<br>";
        }

        if ($red->nijansa_obrva != $novo_nijansa_obrva) {
            $upit = "UPDATE korisnik SET nijansa_obrva = '$novo_nijansa_obrva' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('nijansa_obrva', $novo_nijansa_obrva);
            $uspjeh .= "Nijansa obrva ažurirana!<br>";
        }

        if ($red->velicina_usana != $novo_velicina_usana) {
            $upit = "UPDATE korisnik SET velicina_usana = '$novo_velicina_usana' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('velicina_usana', $novo_velicina_usana);
            $uspjeh .= "Veličina usana ažurirana!<br>";
        }
        if ($red->duzina_trepavica != $novo_duzina_trepavica) {
            $upit = "UPDATE korisnik SET duzina_trepavica = '$novo_duzina_trepavica' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('duzina_trepavica', $novo_duzina_trepavica);
            $uspjeh .= "Dužina trepavica ažurirana!<br>";
        }

        if ($red->gustoca_trepavica != $novo_gustoca_trepavica) {
            $upit = "UPDATE korisnik SET gustoca_trepavica = '$novo_gustoca_trepavica' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('gustoca_trepavica', $novo_gustoca_trepavica);
            $uspjeh .= "Gustoća trepavica ažurirana!<br>";
        }

        if ($red->uvijenost_trepavica != $novo_uvijenost_trepavica) {
            $upit = "UPDATE korisnik SET uvijenost_trepavica = '$novo_uvijenost_trepavica' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('uvijenost_trepavica', $novo_uvijenost_trepavicas);
            $uspjeh .= "Uvijenost trepavica ažurirana!<br>";
        }
        if ($red->nijansa_trepavica != $novo_nijansa_trepavica) {
            $upit = "UPDATE korisnik SET nijansa_trepavica = '$novo_nijansa_trepavica' WHERE id = " . $_GET["idKor"] . ";";
            $baza->updateDB($upit);
            $smarty->assign('nijansa_trepavica', $novo_nijansa_trepavica);
            $uspjeh .= "Nijansa trepavica ažurirana!<br>";
        }
    }
}
if (!empty($greska)) {
    $smarty->assign('greska', $greska);
}
if (!empty($uspjeh)) {
    $smarty->assign('uspjeh', $uspjeh);
}
$smarty->assign('title', $korime);
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/profil.tpl");
$smarty->display("predlosci/_footer.tpl");
?>