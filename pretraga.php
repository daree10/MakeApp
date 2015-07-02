
<?php

session_start();
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';
include 'class/baza.class.php';
$smarty = new Smarty();
$baza = new Baza();

$podton = "";
$tip_koze = "";
$ten = "";
$boja_ociju = "";
$velicina_ociju = "";
$tip_kapka = "";
$nijansa_obrva = "";
$velicina_usana = "";
$duzina_trepavica = "";
$gustoca_trepavica = "";
$uvijenost_trepavica = "";
$nijansa_trepavica = "";
$tip_korisnika = "";
if (isset($_POST["pokupi"])) {
    $sql = "SELECT podton,tip_koze,ten,boja_ociju,velicina_ociju,tip_kapka,nijansa_obrva,velicina_usana,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,nijansa_trepavica,tip_korisnika_id FROM korisnik WHERE id = " . $_SESSION["id"] . ";";
    $rezultat = $baza->selectDB($sql);
    $red = $rezultat->fetch_object();

    $podton = $red->podton;
    $tip_koze = $red->tip_koze;
    $ten = $red->ten;
    $boja_ociju = $red->boja_ociju;
    $velicina_ociju = $red->velicina_ociju;
    $tip_kapka = $red->tip_kapka;
    $nijansa_obrva = $red->nijansa_obrva;
    $velicina_usana = $red->velicina_usana;
    $duzina_trepavica = $red->duzina_trepavica;
    $gustoca_trepavica = $red->gustoca_trepavica;
    $uvijenost_trepavica = $red->uvijenost_trepavica;
    $nijansa_trepavica = $red->nijansa_trepavica;
    $tip_korisnika = $red->tip_korisnika_id;
}
$smarty->assign('podton', $podton);
$smarty->assign('tip_koze', $tip_koze);
$smarty->assign('ten', $ten);
$smarty->assign('boja_ociju', $boja_ociju);
$smarty->assign('velicina_ociju', $velicina_ociju);
$smarty->assign('tip_kapka', $tip_kapka);
$smarty->assign('nijansa_obrva', $nijansa_obrva);
$smarty->assign('velicina_usana', $velicina_usana);
$smarty->assign('duzina_trepavica', $duzina_trepavica);
$smarty->assign('gustoca_trepavica', $gustoca_trepavica);
$smarty->assign('uvijenost_trepavica', $uvijenost_trepavica);
$smarty->assign('nijansa_trepavica', $nijansa_trepavica);
$smarty->assign('tip_korisnika', $tip_korisnika);

$smarty->assign('title', "Barbie.NET pretraga");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/pretraga.tpl");
$smarty->display("predlosci/_footer.tpl");
?>


