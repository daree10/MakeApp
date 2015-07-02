<?php
/*
 * 
 * auth
 *
 * fetches product types 
 */
     
        require_once '../class/baza.class.php';

        $baza = new Baza();

        $sql = "SELECT id,naziv,opis FROM tip_proizvoda;";

        $rezultat = $baza->selectDB($sql);

        $korisnici = array();

        while ($red = $rezultat->fetch_object()) {
            
                $korisnik = array("id" => $red->id);
                $korisnik["naziv"] = $red->naziv;
                $korisnik["opis"] = $red->opis;
                array_push($korisnici, $korisnik);

        }
        echo json_encode($korisnici);
?>

