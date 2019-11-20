<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom="xx1"; // a changer
    private $prenom="yy1"; // a changer
    private $date_naissance="29-09-1980"; // a changer
    private $lieu_naissance="ZZZ1"; // a changer

     private $nom1="XXX2"; // a changer
     private $prenom1="YYY2"; // a changer
     private $date_naissance1="30-10-1981"; // a changer
     private $lieu_naissance1="ZZZ2"; // a changer
    // cours
    private $intitule="IOT"; //a remplir
    private $duree="10";    //a remplir
    private $intitule1="IA"; //a remplir
    private $duree1="12";    //a remplir
    private $intitule2="c++"; //a remplir
    private $duree2="18";    //a remplir


    public function setUp()
    {
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testAffichageProfAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("Before Insertion of Professors"));
    }
    public function testInsertP()
    {
        $max__id1=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom,$this->prenom,$this->date_naissance,$this->lieu_naissance));
        $this->assertEquals(true,$this->gumballMachineInstance->InsertP($this->gumballMachineInstance->getDB(),$this->nom1,$this->prenom1,$this->date_naissance1,$this->lieu_naissance1));
        $max__id2=$this->gumballMachineInstance->GetLastIDP();
        $this->assertEquals($max__id1+2,$max__id2);
    }
    public function testAffichageProfAPI()
    {
        /*� completer*/
    }
     
    
    public function testAffichageCoursAVI()
    {
        /*� completer*/
    }
    public function testInsertC()
    {
       $maxc__id1=$this->gumballMachineInstance->GetLastIDC();
       $this->assertEquals("good job",$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule,$this->duree),$this->GetIdP(XXX2 ,YYY2)));
       $this->assertEquals("good job",$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule1,$this->duree1,$this->GetIdP(XX1 ,YYY1)));
       $this->assertEquals("good job",$this->gumballMachineInstance->InsertC($this->gumballMachineInstance->getDB(),$this->intitule2,$this->duree2,$this->GetIdP(XXX3 ,YYY3)));
       $maxc__id2=$this->gumballMachineInstance->GetLastIDC();
       $this->assertEquals($maxc__id1+3,$maxc__id2);

        
    }
    public function testAffichageCoursAPI()
    {
        /*� completer*/
    }

   
}
