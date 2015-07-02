<?php

if (isset($_POST["session_id"]) && isset($_POST["session_tip"])) {
    if ($_POST["session_id"] == 4 && $_POST["session_tip"] == 3) {
        
        
        require_once '../class/baza.class.php';

        $baza = new Baza();

        $sql = "SELECT pretraga.id as id,korisnik.email as email,COALESCE(brand.naziv,'nema podataka o brandu') as nazivbrand,cijena,tip_proizvoda.naziv as nazivtip FROM pretraga JOIN korisnik ON(korisnik_id = korisnik.id)  LEFT JOIN brand ON(brand.id = brand_id) JOIN tip_proizvoda ON(id_tip = tip_proizvoda.id);";

        $rezultat = $baza->selectDB($sql);

        $korisnici = array();

        while ($red = $rezultat->fetch_object()) {
            
                $korisnik = array("id" => $red->id);
                $korisnik["email"] = $red->email;
                $korisnik["nazivbrand"] = $red->nazivbrand;
                $korisnik["cijena"] = $red->cijena;
                $korisnik["nazivtip"] = $red->nazivtip;
                array_push($korisnici, $korisnik);
        }
        echo json_encode($korisnici);
    }
}
?>