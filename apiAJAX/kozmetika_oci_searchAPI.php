<?php
session_start();
$boja_ociju = $_POST["boja_ociju"];
$velicina_ociju = $_POST["velicina_ociju"];

$sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,boja_ociju,velicina_ociju,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_oci ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE (boja_ociju = '$boja_ociju' OR velicina_ociju='$velicina_ociju')";
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
    $proiz["boja_ociju"] = $red->boja_ociju; 
    $proiz["velicina_ociju"] = $red->velicina_ociju; 
    $proiz["nijansa"] = $red->nijansa;
    
    empty($_POST["brand"]) ? $brand = "null" : $brand = $_POST["brand"];
    $sql2 = "INSERT INTO pretraga(korisnik_id,brand_id,cijena,id_tip) VALUES(".$_SESSION["id"].",$brand,".$proiz["cijena"].",".$red->tip_proizvoda_id.");";
    $baza->updateDB($sql2);
    array_push($rezJSON, $proiz);
}
echo json_encode($rezJSON);
?>

