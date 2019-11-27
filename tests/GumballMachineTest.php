<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    public $gumballMachineInstance;
    //prof
    private $nom="test12"; // a changer
    private $prenom="test13"; // a changer
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
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageProf("after Insertion of Professors"));
    }
     
    
    public function testAffichageCoursAVI()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("Before Insertion of courses"));
    }
    public function testInsertC()
    {
       $max__id3 = $this->gumballMachineInstance->GetLastIDC();
       $this->assertContains("good job",$this->gumballMachineInstance->InsertC("JAVA",$this->duree,$this->gumballMachineInstance->GetIdP("test12" ,"test13")));
       $this->assertContains("good job",$this->gumballMachineInstance->InsertC($this->intitule,$this->duree1,$this->gumballMachineInstance->GetIdP("XXX2" ,"YYY2")));
       #$this->assertContains("good job",$this->gumballMachineInstance->InsertC($this->intitule2,$this->duree2,$this->gumballMachineInstance->GetIdP("XXX3" ,"YYY3")));
       $max__id4 = $this->gumballMachineInstance->GetLastIDC();
       print("id3 ".$max__id3);
       print("id4 ".$max__id4);
       $this->assertEquals($max__id3+2,$max__id4);

        
    }
    public function testAffichageCoursAPI()
   {
         $this->assertEquals(true,$this->gumballMachineInstance->AffichageCours("after Insertion of courses"));
    }

    public function testUpdatec()
    {
        $this->assertEquals(true,$this->gumballMachineInstance->UpdateC(30,"IOT"));
    }


    public function testDeletec()
    {
        //$this->assertEquals(true,$this->gumballMachineInstance->DeleteC("IOT"));
    }



}
