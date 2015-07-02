<?php
class Brand
{
    private $id;
    private $naziv;
    private $email_kontakt;
    private $web_site;
    
    function getId()
    {
        return $this->id;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    
    function getNaziv()
    {
        return $this->naziv;
    }
    function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }
    
    function getEmail_kontakt()
    {
        return $this->email_kontakt;
    }
    function setEmail_kontakt($email_kontakt)
    {
        $this->email_kontakt = $email_kontakt;
    }
    
    function getWeb_site()
    {
        return $this->web_site;
    }
    function setWeb_site($web_site)
    {
        $this->web_site = $web_site;
    }
    
    function insert()
    {
        include 'baza.class.php';
        $baza = new Baza();
        
        $upit = "INSERT INTO brand(id,naziv,email_kontakt,web_site) VALUES(default,'$this->naziv','$this->email_kontakt','$this->web_site');";
        
        $baza->updateDB($upit);
    }
    
}
?>

