<?php

class Korisnik {

    private $id;
    private $email;
    private $ime;
    private $prezime;
    private $lozinka;
    private $podton;
    private $tip_koze;
    private $ten;
    private $boja_ociju;
    private $velicina_ociju;
    private $nijansa_usana;
    private $nijansa_obrva;
    private $velicina_usana;
    private $duzina_trepavica;
    private $gustoca_trepavica;
    private $uvijenost_trepavica;
    private $nijansa_trepavica;
    private $tip_korisnika;

    function getId()
    {
        return $this->id;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    
    function getEmail()
    {
        return $this->email;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    
    function getIme()
    {
        return $this->ime;
    }
    function setIme($ime)
    {
        $this->ime = $ime;
    }
    
    function getPrezime()
    {
        return $this->prezime;
    }
    function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }
    
    function getLozinka()
    {
        return $this->lozinka;
    }
    function setLozinka($lozinka)
    {
        $this->lozinka = $lozinka;
    }
    
    function getPodton()
    {
        return $this->podton;
    }
    function setPodton($podton)
    {
        $this->podton = $podton;
    }
    
    function getTipkoze()
    {
        return $this->tip_koze;
    }
    function setTipkoze($tip_koze)
    {
        $this->tip_koze = $tip_koze;
    }
    
    function getTen()
    {
        return $this->ten;
    }
    function setTen($ten)
    {
        $this->ten = $ten;
    }
    
    function getBojaociju()
    {
        return $this->boja_ociju;
    }
    function setBojaociju($boja_ociju)
    {
        $this->boja_ociju = $boja_ociju;
    }
    
    function getVelicinaociju()
    {
        return $this->velicina_ociju;
    }
    function setVelicinaociju($velicina_ociju)
    {
        $this->velicina_ociju = $velicina_ociju;
    }
    
    function getNijansausana()
    {
        return $this->nijansa_usana;
    }
    function setNijansausana($nijansa_usana)
    {
        $this->nijansa_usana = $nijansa_usana;
    }
    
    function getNijansaobrva()
    {
        return $this->nijansa_obrva;
    }
    function setNijansaobrva($nijansa_obrva)
    {
        $this->nijansa_obrva = $nijansa_obrva;
    }
    
    function getVelicinausana()
    {
        return $this->velicina_usana;
    }
    function setVelicinausana($velicina_usana)
    {
        $this->velicina_usana = $velicina_usana;
    }
    
    function getDuzinatrepavica()
    {
        return $this->duzina_trepavica;
    }
    function setDuzinatrepavica($duzina_trepavica)
    {
        $this->duzina_trepavica = $duzina_trepavica;
    }
    
    function getGustocatrepavica()
    {
        return $this->gustoca_trepavica;
    }
    function setGustocatrepavica($gustoca_trepavica)
    {
        $this->gustoca_trepavica = $gustoca_trepavica;
    }
    
    function getUvijenosttrepavica()
    {
        return $this->uvijenost_trepavica;
    }
    function setUvijenosttrepavica($uvijenost_trepavica)
    {
        $this->uvijenost_trepavica = $uvijenost_trepavica;
    }
    
    function getNijansatrepavica()
    {
        return $this->nijansa_trepavica;
    }
    function setNijansatrepavica($nijansa_trepavica)
    {
        $this->nijansa_trepavica = $nijansa_trepavica;
    }
    
    function getTipkorisnika()
    {
        return $this->tip_korisnika;
    }
    function setTipkorisnika($tip_korisnika)
    {
        $this->tip_korisnika = $tip_korisnika;
    }
    
    function insert()
    {
        include_once 'baza.class.php';
        $baza = new Baza();
        
        $sql = "INSERT INTO korisnik(id,email,lozinka,ime,prezime,podton,tip_koze,ten,boja_ociju,velicina_ociju,nijansa_usana,nijansa_obrva,velicina_usana,duzina_trepavica,gustoca_trepavica,uvijenost_trepavica,nijansa_trepavica,tip_korisnika_id) values("
                . "DEFAULT,"
                . "'$this->email',"
                . "'$this->lozinka',"
                . "'$this->ime',"
                . "'$this->prezime',"
                . "'$this->podton',"
                . "'$this->tip_koze',"
                . "'$this->ten',"
                . "'$this->boja_ociju',"
                . "'$this->velicina_ociju',"
                . "'$this->nijansa_usana',"
                . "'$this->nijansa_obrva',"
                . "'$this->velicina_usana',"
                . "'$this->duzina_trepavica',"
                . "'$this->gustoca_trepavica',"
                . "'$this->uvijenost_trepavica',"
                . "'$this->nijansa_trepavica',"
                . "$this->tip_korisnika);";
        $baza->updateDB($sql);
    }
}
?>


