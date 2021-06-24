<?php
class macbook
{
    public $kleur = "";
    public $matriaal = "";
    public $vorm = "";
    public $aanstroom = false;
  

    public function __construct($kleur, $matriaal, $vorm, $aanstroom)
    {
        $this->kleur = $kleur;
        $this->matriaal = $matriaal;
        $this->vorm = $vorm;
        $this->aanstroom = $aanstroom;
    }
    public function accu()
    {
      if ($this->aanstroom == true)
      {
        echo "De accu wordt opgeladen <br>";
      }
      else{
        echo "De accu wordt niet opgeladen <br>";
      }
    }
    
}

echo "<pre>";
$macbook = new macbook ("spacegray","polycarbonaat","vierkant",false,);
$macbook->accu();
var_dump($macbook);
echo "<br>---------<br>";

