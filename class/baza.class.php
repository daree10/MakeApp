<?php
    class Baza {
        
        const server = "sql4.freesqldatabase.com";
        const korisnik = "sql481363";
        const lozinka = "hK9%jK3%";
        const baza = "sql481363";
        
        public $insertId;
        
        private function spojiDB(){
           
            $mysqli = new mysqli(self::server,self::korisnik,self::lozinka,self::baza);
            if($mysqli->connect_errno)
            {
                echo "neuspjesno spajanje na bazu". $mysqli->connect_errno . ", " . $mysqli->connect_error."<br>";
            }
            return $mysqli;
        }
        
        private function odspojiDB($veza)
        {
            $veza->close();
        }
        
        public function selectDB($upit){
            
            $veza = $this->spojiDB();
            
            $rezultat = $veza->query($upit) or trigger_error("Greska kod upita: {$upit} - "." Greska: " . $veza->error . " ". E_USER_ERROR);
            //obrada upita
            if(!$rezultat)
            {$rezultat = null;}
            $this->odspojiDB($veza);
            return $rezultat;
        }
        
        function updateDB($upit, $skripta=''){
            $veza = $this->spojiDB();
            //obrada upita
            if($rezultat = $veza->query($upit)){
                $this->insertId = $veza->insert_id;
                $this->odspojiDB($veza);
                if($skripta != ""){
                    header("Location: $skripta");
                }
                return $rezultat;
            }
            else{
                echo "Pogreska: " . $veza->error;
                $this->odspojiDB($veza);
            }
            
            return $rezultat;
        }
    }
?>