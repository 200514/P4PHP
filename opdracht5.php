<?php
class macbook {
 private $merk;
 private $kleur;
 public function __construct($merk,$kleur) {
   $this->merk = $merk;
   $this->kleur = $kleur;

 }
 public function intro() {
   echo "Deze laptop is van {$this->merk} en de kleur is {$this->kleur}.";
 }
}

 class apple extends  macbook {
 public function message() {
   echo "is het een appel of een laptop? ";
 }
}
$apple = new apple("apple", "spacegray");
$apple->message();
$apple->intro();
?>