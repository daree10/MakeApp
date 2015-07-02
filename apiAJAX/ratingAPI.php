<?php

require_once '../class/baza.class.php';

$baza = new Baza();

$rating = $_POST["ocjena"];
$idProduct = $_POST["id_proizvod"];
$idUser = $_POST["id_korisnik"];

$sql = "SELECT * FROM ocjena WHERE kozmeticki_proizvod_id = $idProduct AND korisnik_id = $idUser;";
$rezultat = $baza->selectDB($sql);
if($rezultat->num_rows != 0)
{
    echo json_encode(array("status"=>"ne"));
}
else
{
    $baza->updateDB("INSERT INTO ocjena(kozmeticki_proizvod_id,korisnik_id,ocjena) VALUES($idProduct,$idUser,$rating)");
    echo json_encode(array("status"=>"da"));
}

?>

