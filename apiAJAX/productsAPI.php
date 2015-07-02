<?php
/*
 * auth
 * 
 * fetches all products from database
 * 
 */
    if (isset($_POST["session_id"]) && isset($_POST["session_tip"])) {
    if ($_POST["session_id"] == 4 && $_POST["session_tip"] == 3) {
        
        
        require_once '../class/baza.class.php';

        $baza = new Baza();

        $sql = "SELECT kozmeticki_proizvod.id,url_slika,brand.naziv as brandnaziv,tip_proizvoda.naziv as tipnaziv,kozmeticki_proizvod.naziv as proinaziv,tip_proizvoda_id,cijena,kolicina,trajnost FROM kozmeticki_proizvod JOIN brand ON(brand_id = brand.id) JOIN tip_proizvoda ON (tip_proizvoda_id = tip_proizvoda.id);";

        $rezultat = $baza->selectDB($sql);

        $korisnici = array();

        while ($red = $rezultat->fetch_object()) {
            
                $korisnik = array("id" => $red->id);
                $korisnik["urlSlika"] = $red->url_slika;
                $korisnik["brand"] = $red->brandnaziv;
                $korisnik["tip"] = $red->tipnaziv;
                $korisnik["naziv"] = $red->proinaziv;
                $korisnik["cijena"] = $red->cijena;
                $korisnik["kolicina"] = $red->kolicina;
                $korisnik["trajnost"] = $red->trajnost;
                $korisnik["idtip"] = $red->tip_proizvoda_id;
                array_push($korisnici, $korisnik);

        }
        echo json_encode($korisnici);
    }
}
?>