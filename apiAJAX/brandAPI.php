<?php
/*
 * checks if user id and user type is set
 * authentification
 * data fetch
 * 
 */
        require_once '../class/baza.class.php';

        $baza = new Baza();

        $sql = "SELECT id,naziv,email_kontakt,web_site FROM brand;";

        $rezultat = $baza->selectDB($sql);

        $rezJSON = array();

        while ($red = $rezultat->fetch_object()) {
            
                $brand = array("id" => $red->id);
                $brand["naziv"] = $red->naziv;
                $brand["email"] = $red->email_kontakt;
                $brand["web"] = $red->web_site;
                array_push($rezJSON, $brand);

        }
        echo json_encode($rezJSON);
?>

