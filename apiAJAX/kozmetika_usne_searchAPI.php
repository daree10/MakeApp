<?php
session_start();
$velicina_usana = $_POST["velicina_usana"];
$nijansa = substr($_POST["nijansa_usana"],0,-3);

$sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,velicina_usana,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_usne ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE (velicina_usana = '$velicina_usana' OR nijansa LIKE '$nijansa%')";
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
    $proiz["velicina_usana"] = $red->velicina_usana; 
    $proiz["nijansa"] = $red->nijansa; 
    
    empty($_POST["brand"]) ? $brand = "null" : $brand = $_POST["brand"];
    $sql2 = "INSERT INTO pretraga(korisnik_id,brand_id,cijena,id_tip) VALUES(".$_SESSION["id"].",$brand,".$proiz["cijena"].",".$red->tip_proizvoda_id.");";
    $baza->updateDB($sql2);
    array_push($rezJSON, $proiz);
}
echo json_encode($rezJSON);
?>

