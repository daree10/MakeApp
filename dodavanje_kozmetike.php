<?php
session_start();
if (!($_SESSION["tip_korisnika_id"] == 3 || $_SESSION["tip_korisnika_id"] == 2)) {
    header("Location: index.php");
}
require 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();
require_once 'class/baza.class.php';

$baza = new Baza();
if (isset($_POST["dodaj"])) {
    $brandId = $_POST["brand"];
    $productTypeId = $_POST["tip_proizvoda"];
    $naziv = $_POST["naziv"];
    $cijena = $_POST["cijena"];
    $kolicina = $_POST["kol"];
    $trajnost = $_POST["trajnost"];

    $target_file = "img/no_pic.jpg";
    if (!empty($_FILES["slika"]["name"])) {
        include_once 'class/uploadSlike.class.php';

        $uploadSlike = new UploadSlike($naziv, 'img/', $_FILES["slika"]["name"], $_FILES["slika"]["size"], $_FILES["slika"]["tmp_name"]);
        $uploadSlike->uploadImg();
        $target_file = $uploadSlike->getPath();
    }
    
    $rezultat = $baza->updateDB("INSERT INTO kozmeticki_proizvod(brand_id,url_slika,tip_proizvoda_id,naziv,cijena,kolicina,trajnost) VALUES("
            . "$brandId,"
            . "'$target_file',"
            . "$productTypeId,"
            . "'$naziv',"
            . "$cijena,$kolicina,$trajnost);");

    $insertId = $baza->insertId;

    $sql = "";
    switch ($productTypeId) {
        case 1:
            $nijansaObrva = $_POST["nijansa_obrva"];
            $nijansa = $_POST["nijansa_kozmetike"];
            $sql = "INSERT INTO kozmetika_obrve(kozmeticki_proizvod_id,nijansa_obrva,nijansa) VALUES($insertId,'$nijansaObrva','$nijansa')";
            break;
        case 2:
            $nijansa_trepavica = $_POST["nijansa_trepavica"];
            $duzina_trepavica = $_POST["duzina_trepavica"];
            $gustoca_trepavica = $_POST["gustoca_trepavica"];
            $uvijenost_trepavica = $_POST["uvijenost_trepavica"];
            $trusenje = $_POST["trusenje"];
            $sql = "INSERT INTO kozmetika_trepavice(kozmeticki_proizvod_id,nijansa_trepavica,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,trusenje) VALUES("
                    . "$insertId,"
                    . "'$nijansa_trepavica','$duzina_trepavica','$gustoca_trepavica','$uvijenost_trepavica','$trusenje');";
            break;
        case 3:
            $podton = $_POST["podton"];
            $tip_koze = $_POST["tip_koze"];
            $ten = $_POST["ten"];
            $nijansa = $_POST["nijansa_kozmetike"];
            $sql = "INSERT INTO kozmetika_lice(kozmeticki_proizvod_id,podton,tip_koze,ten,nijansa) VALUES($insertId,'$podton','$tip_koze','$ten','$nijansa');";
            break;
        case 4:
            $boja_ociju = $_POST["boja_ociju"];
            $velicina_ociju = $_POST["velicina_ociju"];
            $nijansa = $_POST["nijansa_kozmetike"];
            $sql = "INSERT INTO kozmetika_oci(kozmeticki_proizvod_id,boja_ociju,velicina_ociju,nijansa) VALUES($insertId,'$boja_ociju','$velicina_ociju','$nijansa');";
            break;
        case 5:
            $velicina_usana = $_POST["velicina_usana"];
            $nijansa = $_POST["nijansa_usana"];
            $sql = "INSERT INTO kozmetika_usne(kozmeticki_proizvod_id,velicina_usana,nijansa) VALUES($insertId,'$velicina_usana','$nijansa');";
            break;
    }
    $baza->updateDB($sql);
}
$smarty->assign('title', "Dodavanje kozmetike");
$smarty->display("predlosci/_header.tpl");
$smarty->display("predlosci/_navig.tpl");
$smarty->display("predlosci/dodavanje_kozmetike.tpl");
$smarty->display("predlosci/_footer.tpl");
?>


