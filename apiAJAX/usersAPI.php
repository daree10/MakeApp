<?php

        require_once '../class/baza.class.php';

        $baza = new Baza();

        $sql = "SELECT korisnik.id,ime,prezime,email,lozinka,tip_korisnika.naziv as tnaziv,podton,tip_koze,ten,boja_ociju,velicina_ociju,nijansa_usana,nijansa_obrva,velicina_usana,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,nijansa_trepavica FROM korisnik JOIN tip_korisnika ON(tip_korisnika.id = korisnik.tip_korisnika_id);";

        $rezultat = $baza->selectDB($sql);

        $korisnici = array();

        while ($red = $rezultat->fetch_object()) {
            
                if(isset($_POST["id_korisnika"]))
                {
                    if($_POST["id_korisnika"] != $red->id)
                    {
                        continue;
                    }
                }
                $korisnik = array("id" => $red->id);
                $korisnik["email"] = $red->email;
                $korisnik["ime"] = $red->ime;
                $korisnik["prezime"] = $red->prezime;
                $korisnik["lozinka"] = $red->lozinka;
                $korisnik["tip"] = $red->tnaziv;
                
                $korisnik["podton"] = $red->podton;
                $korisnik["tip_koze"] = $red->tip_koze;
                $korisnik["ten"] = $red->ten;
                $korisnik["boja_ociju"] = $red->boja_ociju;
                $korisnik["velicina_ociju"] = $red->velicina_ociju;
                $korisnik["nijansa_usana"] = $red->nijansa_usana;
                $korisnik["nijansa_obrva"] = $red->nijansa_obrva;
                $korisnik["velicina_usana"] = $red->velicina_usana;
                $korisnik["duzina_trepavica"] = $red->duzina_trepavica;
                $korisnik["gustoca_trepavica"] = $red->gustoca_trepavica;
                $korisnik["uvijenost_trepavica"] = $red->uvijenost_trepavica;
                $korisnik["nijansa_trepavica"] = $red->nijansa_trepavica;
                
                array_push($korisnici, $korisnik);

        }
        echo json_encode($korisnici);
?>

