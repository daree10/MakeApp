<?php
session_start();
$nijansa_trepavica = $_POST["nijansa_trepavica"];
$duzina_trepavica = $_POST["duzina_trepavica"];
$gustoca_trepavica = $_POST["gustoca_trepavica"];
$uvijenost_trepavica = $_POST["uvijenost_trepavica"];

$sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,nijansa_trepavica,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,trusenje,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_trepavice ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE (nijansa_trepavica = '$nijansa_trepavica' OR duzina_trepavica='$duzina_trepavica' OR gustoca_trepavica='$gustoca_trepavica' OR uvijenost_trepavica='$uvijenost_trepavica')";
if(!empty($_POST["brand"]))
{
    $brandId = $_POST["brand"];
    $sql .= " AND brand_id = $brandId;";
}
else
{
    $sql .= ";";
}
require_once '../class/baza.class.php';

$baza = new Baza();

$rezultat = $baza->selectDB($sql);

$rezJSON = array();

while($red = $rezultat->fetch_object())
{
    $proiz = array("id"=>$red->id);
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
    
    empty($_POST["brand"]) ? $brand = "null" : $brand = $_POST["brand"];
    $sql2 = "INSERT INTO pretraga(korisnik_id,brand_id,cijena,id_tip) VALUES(".$_SESSION["id"].",$brand,".$proiz["cijena"].",".$red->tip_proizvoda_id.");";
    $baza->updateDB($sql2);
    array_push($rezJSON, $proiz);
}
echo json_encode($rezJSON);
?>