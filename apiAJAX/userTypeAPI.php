<?php

if (isset($_POST["session_id"]) && isset($_POST["session_tip"])) {
    if ($_POST["session_id"] == 4 && $_POST["session_tip"] == 3) {
        
        
        require_once '../class/baza.class.php';

        $baza = new Baza();

        $sql = "SELECT id,naziv,opis FROM tip_korisnika;";

        $rezultat = $baza->selectDB($sql);

        $korisnici = array();

        while ($red = $rezultat->fetch_object()) {
            
                $korisnik = array("id" => $red->id);
                $korisnik["naziv"] = $red->naziv;
                $korisnik["opis"] = $red->opis;
                array_push($korisnici, $korisnik);

        }
        echo json_encode($korisnici);
    }
}
?>
