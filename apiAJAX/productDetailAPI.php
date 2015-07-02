<?php
/*
 * 
 * based on product type, data from different tables is fetched
 * 1 product row is fetched based on product id
 * 
 */
require_once '../class/baza.class.php';

$baza = new Baza();
$rezJSON = array();
$sql = "";
switch ($_GET["idtip"]) {
    case 1:
        $sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,nijansa_obrva,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_obrve ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE kozmeticki_proizvod.id = ".$_GET["idproizvod"].";";
        $rezultat = $baza->selectDB($sql);
        while ($red = $rezultat->fetch_object()) {
            $proiz = array("id" => $red->id);
            $proiz["url_slika"] = $red->url_slika;
            $proiz["brandnaziv"] = $red->brandnaziv;
            $proiz["naziv"] = $red->naziv;
            $proiz["cijena"] = $red->cijena;
            $proiz["kolicina"] = $red->kolicina;
            $proiz["trajnost"] = $red->trajnost;
            $proiz["nijansa_obrva"] = $red->nijansa_obrva;
            $proiz["nijansa"] = $red->nijansa;
            array_push($rezJSON, $proiz);
        }
        break;
    case 2:
        $sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,nijansa_trepavica,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,trusenje,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_trepavice ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE kozmeticki_proizvod.id = ".$_GET["idproizvod"].";";
        $rezultat = $baza->selectDB($sql);
        while ($red = $rezultat->fetch_object()) {
            $proiz = array("id" => $red->id);
            $proiz["url_slika"] = $red->url_slika;
            $proiz["brandnaziv"] = $red->brandnaziv;
            $proiz["naziv"] = $red->naziv;
            $proiz["cijena"] = $red->cijena;
            $proiz["kolicina"] = $red->kolicina;
            $proiz["trajnost"] = $red->trajnost;
            $proiz["nijansa_trepavica"] = $red->nijansa_trepavica;
            $proiz["duzina_trepavica"] = $red->duzina_trepavica;
            $proiz["gustoca_trepavica"] = $red->gustoca_trepavica;
            $proiz["uvijenost_trepavica"] = $red->uvijenost_trepavica;
             $proiz["trusenje"] = $red->trusenje;
            array_push($rezJSON, $proiz);
        }
        break;
    case 3:
        $sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,podton,tip_koze,ten,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_lice ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE kozmeticki_proizvod.id = ".$_GET["idproizvod"].";";
        $rezultat = $baza->selectDB($sql);
        while ($red = $rezultat->fetch_object()) {
            $proiz = array("id" => $red->id);
            $proiz["url_slika"] = $red->url_slika;
            $proiz["brandnaziv"] = $red->brandnaziv;
            $proiz["naziv"] = $red->naziv;
            $proiz["cijena"] = $red->cijena;
            $proiz["kolicina"] = $red->kolicina;
            $proiz["trajnost"] = $red->trajnost;
            $proiz["podton"] = $red->podton;
            $proiz["tip_koze"] = $red->tip_koze;
            $proiz["ten"] = $red->ten;
            $proiz["nijansa"] = $red->nijansa;
            array_push($rezJSON, $proiz);
        }
        break;
    case 4:
        $sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,boja_ociju,velicina_ociju,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_oci ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE kozmeticki_proizvod.id = ".$_GET["idproizvod"].";";
        $rezultat = $baza->selectDB($sql);
        while ($red = $rezultat->fetch_object()) {
            $proiz = array("id" => $red->id);
            $proiz["url_slika"] = $red->url_slika;
            $proiz["brandnaziv"] = $red->brandnaziv;
            $proiz["naziv"] = $red->naziv;
            $proiz["cijena"] = $red->cijena;
            $proiz["kolicina"] = $red->kolicina;
            $proiz["trajnost"] = $red->trajnost;
            $proiz["boja_ociju"] = $red->boja_ociju;
            $proiz["velicina_ociju"] = $red->velicina_ociju;
            $proiz["nijansa"] = $red->nijansa;
            array_push($rezJSON, $proiz);
        }
        break;
    case 5:
        $sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,velicina_usana,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_usne ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE kozmeticki_proizvod.id = ".$_GET["idproizvod"].";";
        $rezultat = $baza->selectDB($sql);
        while ($red = $rezultat->fetch_object()) {
            $proiz = array("id" => $red->id);
            $proiz["url_slika"] = $red->url_slika;
            $proiz["brandnaziv"] = $red->brandnaziv;
            $proiz["naziv"] = $red->naziv;
            $proiz["cijena"] = $red->cijena;
            $proiz["kolicina"] = $red->kolicina;
            $proiz["trajnost"] = $red->trajnost;
            $proiz["velicina_usana"] = $red->velicina_usana;
            $proiz["nijansa"] = $red->nijansa;
            array_push($rezJSON, $proiz);
        }
        break;
}
echo json_encode($rezJSON);
?>

