<?php
/*
 * 
 * searchAPI, based on characteristics fetches products from table kozmetika_lice
 * 
 */
session_start();
$podton = $_POST["podton"];
$tip_koze = $_POST["tip_koze"];
$ten = $_POST["ten"];

$sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,kozmeticki_proizvod.naziv,cijena,kolicina,trajnost,podton,tip_koze,ten,nijansa,tip_proizvoda_id FROM kozmeticki_proizvod JOIN kozmetika_lice ON(kozmeticki_proizvod_id = kozmeticki_proizvod.id) JOIN brand ON(brand_id = brand.id) WHERE (podton = '$podton' OR tip_koze='$tip_koze' OR ten = '$ten')";
/*
 * 
 * if brand is not empty search by brand
 * 
 */
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
    $proiz["podton"] = $red->podton; 
    $proiz["tip_koze"] = $red->tip_koze; 
    $proiz["ten"] = $red->ten; 
    $proiz["nijansa"] = $red->nijansa;
    /*
     * 
     * every search request is logged into table pretraga
     * 
     */
    empty($_POST["brand"]) ? $brand = "null" : $brand = $_POST["brand"];
    $sql2 = "INSERT INTO pretraga(korisnik_id,brand_id,cijena,id_tip) VALUES(".$_SESSION["id"].",$brand,".$proiz["cijena"].",".$red->tip_proizvoda_id.");";
    $baza->updateDB($sql2);
    array_push($rezJSON, $proiz);
}
echo json_encode($rezJSON);
?>