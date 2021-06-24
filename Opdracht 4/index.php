<?php
class macbook
{
    public $naam = "";
    public $kleur = "";
    public $matriaal = "";
    public $vorm = "";
    public $aanstroom = false;
  

    public function __construct($naam, $kleur, $matriaal, $vorm, $aanstroom)
    {
        $this->naam = $naam;
        $this->kleur = $kleur;
        $this->matriaal = $matriaal;
        $this->vorm = $vorm;
        $this->aanstroom = $aanstroom;
    }
    public function intro() {
        echo "Dit is de {$this->naam}. De kleur is {$this->kleur}. Hij is gemaakt van {$this->matriaal}, en de vorm is {$this->vorm}. 
        <br>";
      }
     }
     
     class toetsenbord extends macbook {
       public function message() {
         echo "hiermee kan je typen<br> ";
       }
      }
      $strawberry = new toetsenbord("Macbook Pro 2019","Spacegray","hout","vierkant",false, );
      $strawberry->intro();
      $strawberry->message();
